<?php
echo "This is a test";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "logitechidfdev@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    $mail_success = mail($to, $subject, $message_body, $headers);
}
header('Location: https://idftene.com');
echo "This is a test";
