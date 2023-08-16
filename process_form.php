<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message = $_POST["message"];
    
    $to = "spacejockeydev@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Send the email
    mail($to, $subject, $body);
    
    // Redirect back to the contact page after submission
    header("Location: contact.html?message=success");
}
?>
