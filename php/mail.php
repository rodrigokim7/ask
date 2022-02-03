<?php
 $inquiry_sent = false;

 if($_POST && isset($_POST['name'],$_POST['email'],$_POST['inquiry'],$_POST['title'])) {

  // submit the form
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     //Validate the email

    $userName = $userEmail = $userTel = $title = $inquiry = "";

    $userName = htmlspecialchars($_POST['name']);
    $userEmail = htmlspecialchars($_POST['email']);
    $userTel = htmlspecialchars($_POST['tel']);
    $title = htmlspecialchars($_POST['title']);
    $inquiry = htmlspecialchars($_POST['inquiry']);
    
    $to = "info@askparaguay.com";
    $content = "";
    
    $content .= "From: ".$userName. "\r\n";
    $content .= "Email: ".$userEmail. "\r\n";
    $content .= "Tel: ".$userTel. "\r\n";
    $content .= "Title: ".$title. "\r\n";
    $content .= "Inquiry: ".$inquiry. "\r\n";
    
    mail($to, $title, $content);
    
    session_start();
    $_SESSION['USER'] = $userName;
    header ('location: ../thankyou.php');

   } 
 }

?>