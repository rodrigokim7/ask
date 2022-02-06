<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
 
 if($_POST && isset($_POST['name'],$_POST['email'],$_POST['inquiry'],$_POST['title'])) {
  // submit the form
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     //Validate the email
   
    $mail->CharSet    = "EUC-KR";
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.askparaguay.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@askparaguay.com';                     //SMTP username
    $mail->Password   = 'askpyinfo2022';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email'], "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",$_POST['name']))."?=");
    $mail->addAddress('info@askparaguay.com', 'A.S.K Paraguay');     //Add a recipient
    $mail->addAddress('shkim@askparaguay.com', 'SHKIM-ASK PY');  //Name is optional
    $mail->addReplyTo('rodrigokim7@gmail.com', 'Information'); 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",$_POST['title']))."?=";     
    $mail->Body    = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",$_POST['inquiry']))."?=";
    $mail->AltBody = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",$_POST['inquiry']))."?=";
    $mail->send();

    if ($mail->send())
    {      
      header_remove();
      session_start();
      $_SESSION['USER'] = htmlspecialchars($_POST['name']);
      header('location:thankyou.php');
    }
   
   } 
 }

?>