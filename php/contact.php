<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["myname"];
    $email = $_POST["myemail"];
    $message = $_POST["mymessage"];

    // Email configuration
    $to = "logitechidfdev@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    $mail_success = mail($to, $subject, $message_body, $headers);
    header('Location: "index.html"');
}
