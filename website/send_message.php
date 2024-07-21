<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'pixelsphotography87@gmail.com';
    $subject = 'Contact Form Submission';
    $headers = "From: $email\r\n";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    if (message($name, $email)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message.';
    }
} else {
    echo 'Invalid request.';
}
?>
