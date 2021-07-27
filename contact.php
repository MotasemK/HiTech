<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $email_from = "Hi-Tech Engineering";
    $email_subject = "New message from a customer";

    $email_body = "Name: $name.\n".
                    "Email: $email.\n".
                    "Subject: $subject.\n".
                    "Message: $message.\n";

    $to = "mo3tasem66@gmail.com";
    $headers = "From: $name \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email,$subject,$email_body,$headers);

    header("location: index.html");
    
?>