<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'hdehaini@ucsd.edu';
    $subject = 'New message from your website';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank-you page
    header('Location: thankyou.html');
    exit();
}
