<?php
session_start();

$form_error = false;
$success = false;


if($_POST) {
	
	$data = $_POST;

	// REQUIRED: first_name, last_name, email, cover_letter, resume, captcha
	$required = array('first_name', 'last_name', 'email', 'captcha');
	
	foreach($required as $req) {
		if(empty($data[$req])) {
			$form_error = 'Please fill in all required fields.';
			goto form_end;
		}
	}
	
	// Cover letter
	if(!$_FILES['cover_letter'] || !$_FILES['resume']) {
		$form_error = 'Please provide both a resume and cover letter.';
		goto form_end;
	}
	
	
	// Check the captcha
	if($data['captcha'] != $_SESSION['CAPTCHAString']) {
		$form_error = "Please enter the text in the image correctly.";
		goto form_end;
	}
	
	// Send an email 
	$mail = new \PHPMailer();
	$mail->AddAddress('careers@apollointeractive.com');
	$mail->AddAddress('justinlopez0@gmail.com');
	$mail->FromName = 'Apollo Careers';
	$mail->From = 'no-reply@apollointeractive.com';
	$mail->Subject = $data['position'] . ' - ' . $data['first_name'] . ' ' . $data['last_name']; 
 
	// Check validity of files and attach them if valid
	//$allowed_mimes = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/plain');
	
	$allowed_extensions = array('pdf', 'doc','docx','txt');
	

	if ($_FILES['resume']['error'] == UPLOAD_ERR_OK) {
	    	
		// Check mime type
		//$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
		//$mime = finfo_file($finfo, $_FILES['resume']['tmp_name']);
		$extension = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
		if(!in_array($extension, $allowed_extensions)) {
			$form_error = "Please upload a valid PDF, Microsoft Word, or text file. ($mime not allowed)";
			goto form_end;
		}
		
		
	    $mail->AddAttachment($_FILES['resume']['tmp_name'],
	                         $_FILES['resume']['name']);
	}
	else {
		http_response_code(500);
		exit();
	}
	
	if ($_FILES['cover_letter']['error'] == UPLOAD_ERR_OK) {
	    	
		// Check mime type
		$extension = strtolower(pathinfo($_FILES['cover_letter']['name'], PATHINFO_EXTENSION));
		if(!in_array($extension, $allowed_extensions)) {
			$form_error = "Please upload a valid PDF, Microsoft Word, or text file.";
			goto form_end;
		}
		
		
	    $mail->AddAttachment($_FILES['cover_letter']['tmp_name'],
	                         $_FILES['cover_letter']['name']);
	}
	else {
		http_response_code(500);
		exit();
	}
	
	$body = "Position:".htmlentities($_POST['position'])."\nName: ".$data['first_name'].' '.$data['last_name']."\n"."Email: ".$data['email'];
	
	
	
	
	
	$mail->Body = $body;
	$mail->Host = 'localhost';
	$sent = $mail->Send();
	
	$success = true;
	
	
	/**
	 * Now send a confirmation to the applicant
	 */
	 $confirm = new \PHPMailer();
	$confirm->AddAddress($data['email']);
	$confirm->FromName = 'Apollo Careers';
	$confirm->From = 'no-reply@apollointeractive.com';
	$confirm->Subject = 'Application Received';
	$confirm->Body = "Thank you for your interest in Apollo Interactive. We have received your resume and are in the process of reviewing it. Should we feel your skill set and experience are in line with what we are looking for, you will be contacted to continue the process. Again, thank you for your time and have a pleasant day!";
	$confirm->Host = 'localhost';
	$confirm->Send();

	
}

form_end:
