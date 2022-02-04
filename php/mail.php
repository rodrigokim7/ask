<?php

include('SMTPconfig.php');
 
 if($_POST && isset($_POST['name'],$_POST['email'],$_POST['inquiry'],$_POST['title'])) {

  // submit the form
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     //Validate the email
    $Title = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",htmlspecialchars($_POST['title'])))."?=";
    $Inquiry = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",htmlspecialchars($_POST['inquiry'])))."?=";
    $Email = htmlspecialchars($_POST['email']);
    $Name = "=?EUC-KR?B?".base64_encode(iconv("UTF-8","EUC-KR",htmlspecialchars($_POST['name'])))."?=";

    $mail->subject = $Title;
    $mail->message = $Inquiry;
    $mail->from($Email, $Name);
    $mail->to('info@askparaguay.com', 'A.S.K Paraguay');

    if ($mail->send())
    {      
      session_start();
      $_SESSION['USER'] = htmlspecialchars($_POST['name']);
      header('location:../thankyou.php');
    }
    else echo $mail->error;    
   } 
 }
   
 

?>