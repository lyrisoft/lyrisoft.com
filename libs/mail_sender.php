<?php
define ('USER', 'nifeneny@gmail.com');
define ('PWD', '');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';
$mail->Username = USER;
$mail->Password = PWD;
$mail->SMTPSecure = 'tls';//'ssl';
$mail->Port = 587;

$mail->From = 'nifeneny@gmail.com';
$mail->FromName = 'Nifemi SOLA-OJO';
// $mail->addReplyTo('nifex007@yahoo.com', 'Reply Adress'); //other mails to be sent to 
$mail->addCC('nifemisolaojo@ymail.com','Captain Nigeria');
$mail->Subject = 'Potential Customer';
$mail->Body = 'Mailing testing';
var_dump($mail->send());