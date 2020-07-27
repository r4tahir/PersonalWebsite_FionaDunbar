<?php

    $NAME = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'math128ola@gmail.com';

    $email_subject = "Contact Form Submission";

    $email_body = "User Name $name.\n".
        "User_Email: $visitor_email.\n".
            "User Message: $message.\n";
    
    $to = "raftahir2001@gmail.com";

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body.$headers);

    header("Location: contactForm.html");

?>

