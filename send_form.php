<?php
if($_POST['submit']){
    $to = "David.blue.8@gmail.com";
    $from = $_POST['Email'];
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['Lastname'];
    $message = $_POST['Message'];
    $subject = "client";
    $email_body = "you have received a message form $firstname.";
    
    $headers = "From: $Email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
 
    
}












?>