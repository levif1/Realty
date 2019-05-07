<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:\CS Languages\Composer\vendor';



$mail->setFrom('foglelevi@gmail.com', 'Levi Fogle');
$mail->addAddress('foglelevi@gmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->isHTML(true);
$mail->Body = 'Hello, <b>my friend</b>! This message uses HTML!';
$mail->AltBody = "Hello, my friend! This message uses plain text !";
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>