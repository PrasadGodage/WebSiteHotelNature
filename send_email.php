<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


    $subject = "Contact Form";
    $msg = $_POST['message'];
    $tomailid = $_POST['email'];
	$mail = new PHPMailer(true);
	$mail->SMTPDebug = 3;

    $frommailid = "soulsoft.gauravvanam@gmail.com";
    $password = "soulsoft@gaurav";

	$mail->isSMTP();
	// $mail->Host = 'order.gvsoft.in';
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = $frommailid; //Your Mail
	$mail->Password = $password; //Your Gmail APP Code

	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->setFrom($frommailid); //Your Mail
	$mail->addAddress($tomailid);
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $msg;

	$mail->send();



