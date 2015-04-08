<?php
phpinfo();
exit();
$appointment_emailer = new PHPMailer();
			$appointment_emailer->IsSMTP();
			$appointment_emailer->IsHTML(true);
			$appointment_emailer->Host = "127.0.0.1";				
		
			$appointment_emailer->Subject = 'Health Assessment Emailed';
			$appointment_emailer->AddReplyTo("lhendry@curves.com");
			$appointment_emailer->From = 'no-reply@email.mycurves.com';
			$appointment_emailer->FromName = 'Health Assessments';

			$appointment_emailer->Body = $body;
			
			$email_actually_sent_to = "raede@apollointeractive.com";	
			$appointment_emailer->AddAddress($email_actually_sent_to);
			
			
           // echo "sent to ".$email_actually_sent_to;
			$sent = $appointment_emailer->send();
			
			
?>
<h1><?=$_SERVER['X-Apollo-Hostname']?></h1>
<pre>
<?php var_dump($appointment_emailer->ErrorInfo);?>
</pre>