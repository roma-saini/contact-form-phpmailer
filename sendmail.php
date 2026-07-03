<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'config.php';
require 'db.php';

if(isset($_POST['send']))
{
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Save to Database
    $stmt = $conn->prepare(
        "INSERT INTO contacts(name,email,subject,message)
         VALUES(?,?,?,?)"
    );

    $stmt->bind_param(
        "ssss",
        $name,
        $email,
        $subject,
        $message
    );

    $stmt->execute();

    $mail = new PHPMailer(true);

    try {

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = SMTP_EMAIL;
        $mail->Password   = SMTP_PASSWORD;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom(
            SMTP_EMAIL,
            'Contact Form'
        );

        // Receiver
        $mail->addAddress(
            SMTP_EMAIL
        );

        // Email Content
        $mail->isHTML(false);

        $mail->Subject = $subject;

        $mail->Body =
            "Name: $name\n\n" .
            "Email: $email\n\n" .
            "Message:\n$message";

        $mail->send();

        echo "<h2>Message Saved & Email Sent Successfully!</h2>";

    }
    catch (Exception $e)
    {
        echo "<h2>Email Failed!</h2>";
        echo $mail->ErrorInfo;
    }
}
?>