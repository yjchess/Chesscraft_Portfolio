<?php

try{
    if(isset( $_POST['name']))
    $name = $_POST['name'];
    if(isset( $_POST['email']))
    $email = $_POST['email'];
    if(isset( $_POST['message']))
    $message = $_POST['message'];
    $message = wordwrap($message,70);


    $content=$message;
    $recipient = "yangjian.zhou@live.co.uk";
    $mailheader = "From: $email \r\n";
    $subject = "From Portfolio";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    echo "Email sent!";
}catch(Exception $e){
    echo $e->getMessage();
}
?>