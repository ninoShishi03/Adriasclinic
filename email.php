<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require 'C:\xampp\htdocs\vendor\autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ninoshishi03@gmail.com";
$mail->Password = "sccruwcfvnqqjnyl";

$mail->setFrom($email, $name);
$mail->addAddress("kaisottodinadraft@gmail.com", "Kai Sotto");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");
