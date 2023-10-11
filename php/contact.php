<?php

// check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'email@idftene.com';

    // validate form data
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        // some form data is missing
        $error = 'Please fill out all required fields.';
    } else {
        // form data is valid
        // send email 
        // $to = 'logitechidfdev@gmail.com';
        $to = 'moshe@mosheschwartzberg.com';
        $subject = 'New Message from Contact Form from ' . $name;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $email\r\n";
        if (mail($to, $subject, $body, $headers)) {
            // email was sent
            $msg = 'Thank you for your message! We will get back to you as soon as possible.';
            // echo $msg;
            header("Location: /index.html");
        } else {
            // email was not sent
            $error = 'There was an error sending your message. Please try again later.';
            // echo $error;
            header("Location: /index.html");
        }
    }
}
