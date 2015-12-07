<?php 
	
	include('../config.php');
	require_once(ABSPATH.'modules/notify/notify.php');	// Load eMail functionality
	
	require_once(ABSPATH.'lib/phpmailer/PHPMailerAutoload.php');
	$mail = new PHPMailer;
	$mail->isSMTP();
	
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 4;
	$mail->Debugoutput = 'html';
	
	$mail->Host = SMTP_HOST;
	$mail->Port = 25;
	$mail->SMTPSecure = '';
	$mail->SMTPAutoTLS = false;
	$mail->SMTPAuth = true;
	
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASS;
	$mail->setFrom(SMTP_EMAIL, 'Leaves Applications');
	
	$mail->addAddress('fotis.routsis@gmail.com', 'Fotis Routsis');
	$mail->Subject = 'PDM Test email';
	$mail->msgHTML('PDM Test email');
	$mail->AltBody ='PDM Test email';
	
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
	
?>