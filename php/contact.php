<?php
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
    header('Location: https://flourishing-toffee-be2e06.netlify.app');
    if ($mail_success) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle the case where the form was not submitted via POST
    echo "Form not submitted.";
}
