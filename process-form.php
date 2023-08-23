<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userText = $_POST["userText"];
    $toEmail = "zacharina.sebek@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "User's text: \n\n" . $userText;
    $headers = "From: webmaster@example.com"; // Replace with your website's email address

    if (mail($toEmail, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
