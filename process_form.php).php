<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Gmail SMTP Configuration
    $to = "ankush.rana3565@gmail.com";  // Replace with your Gmail address
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send email using Gmail SMTP
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error! Unable to send the message.";
    }
} else {
    echo "Error! Invalid form submission.";
}
?>
