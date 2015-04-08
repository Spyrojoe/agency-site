<?php
session_start();
if(!$_POST) {
	header('location:/careers');
	exit();
}


$data = $_POST;

// REQUIRED: first_name, last_name, email, cover_letter, resume, captcha
$required = array('first_name', 'last_name', 'email', 'captcha');

foreach($required as $req) {
	if(empty($data[$req])) {
		http_response_code(400);
		echo "REQUIRED";
		exit();
	}
}

// Cover letter
if(!$_FILES['cover_letter'] || !$_FILES['resume']) {
	http_response_code(400);
	echo "REQUIRED";
	exit();
}


// Check the captcha
if($data['captcha'] != $_SESSION['CAPTCHAString']) {
	http_response_code(400);
	echo 'CAPTCHA';
	exit();
}

// Send an email
$mail = new \PHPMailer();
$mail->AddAddress('jason.raede@gmail.com');
$mail->FromName = 'Apollo Careers';
$mail->From = 'no-reply@apollointeractive.com.com';
$mail->Subject = 'New Job Application @ Apollo Careers';

// Check validity of files and attach them if valid
$allowed_mimes = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/plain');
if ($_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    	
	// Check mime type
	$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
	$mime = finfo_file($finfo, $_FILES['resume']['tmp_name']);
	if(!in_array($mime, $allowed_mimes)) {
		http_response_code(400);
		echo 'FILE';
		exit();
	}
	finfo_close($finfo);
	
	
    $mail->AddAttachment($_FILES['resume']['tmp_name'],
                         $_FILES['resume']['name']);
}
else {
	http_response_code(500);
	exit();
}

if ($_FILES['cover_letter']['error'] == UPLOAD_ERR_OK) {
    	
	// Check mime type
	$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
	$mime = finfo_file($finfo, $_FILES['cover_letter']['tmp_name']);
	if(!in_array($mime, $allowed_mimes)) {
		http_response_code(400);
		echo 'FILE';
		exit();
	}
	finfo_close($finfo);
	
	
    $mail->AddAttachment($_FILES['cover_letter']['tmp_name'],
                         $_FILES['cover_letter']['name']);
}
else {
	http_response_code(500);
	exit();
}

$body = "Name: ".$data['first_name'].' '.$data['last_name']."\n"."Email: ".$data['email'];





$mail->Body = $body;
$mail->Host = 'localhost';
$sent = $mail->Send();

http_response_code(200);
exit();
