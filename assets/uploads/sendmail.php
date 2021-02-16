<?php
function sendmail($to,$name,$subject,$body)
{
	require 'class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'cloud.tajmahalsilver.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '465';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = ssl;						//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'info@tajmahalsilver.com';					//Sets SMTP username
	$mail->Password = 'virin@123';					//Sets SMTP password
//	$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = 'info@tajmahalsilver.com';			//Sets the From email address for the message
	$mail->FromName = 'tajmahal';			//Sets the From name of the message
	$mail->AddAddress($to,$name);		//Adds a "To" address
	$mail->IsHTML(true);							//Sets message type to HTML				
	$mail->Subject = $subject;			//Sets the Subject of the message
	$mail->Body = $body;				//An HTML or plain text message body
	return $mail->Send();								//Send an Email. Return true on success or false on error
	
}


?>