<?php

date_default_timezone_set('Etc/UTC');
require '../phpmailer/PHPMailerAutoload.php';

function mailsend($uname,$pass,$email)
{

$name=$uname;
$passw=$pass;
$ermail=$email;

	//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tertertool@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "phpmaster";
//Set who the message is to be sent from
$mail->setFrom('tetertool@gmail.com', 'DOWEL SYSTEM');

//Set who the message is to be sent to
$mail->addAddress($ermail);
//Set the subject line
$mail->Subject = 'DOWELS Registraion';

$mail->Body ='Congratulations! You have registered in DOWELS system. Your user name is ' .$name. ' and password is '. $passw.' Thank you ';

//send the message, check for errors
$mail->send();

}



?>