<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $to = "sanjurichard0@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
