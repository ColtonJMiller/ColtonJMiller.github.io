<?php
    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $telephone = $_POST['phone']
    $message = $_POST['message'];
    $email_from = 'Portfolio page';
    $email_subject = "GA portfolio Email";
    $email_body = "You have received a new message from $name.\n".
                            "Here is the message:\n $message".
    $to = "ColtonJMMiller@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $sender_email \r\n";
    mail($to,$email_subject,$email_body,$headers);                      
?>





