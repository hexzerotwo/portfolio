<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Construct the email message
    $to = "johnrichardlagbas@gmail.com";
    $headers = "From: $name <$email>";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // If the request method is not POST, redirect to the homepage or display an error message
    echo "Error: Invalid request method.";
}
?>
