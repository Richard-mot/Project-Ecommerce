<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your actual email address
    $to = "recipient@example.com";

    // Common variables
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $senderEmail = $_POST["email"];

    try {
        $mail = new PHPMailer(true);

        // SMTP configuration using environment variables
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST');
        $mail->SMTPAuth = getenv('SMTP_AUTH');
        $mail->Username = getenv('SMTP_USERNAME');
        $mail->Password = getenv('SMTP_PASSWORD');
        $mail->SMTPSecure = getenv('SMTP_SECURE');
        $mail->Port = getenv('SMTP_PORT');

        // Set sender and recipient
        $mail->setFrom($senderEmail);
        $mail->addAddress($to);

        // Email content
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send the email
        $mail->send();
        echo 'Email sent successfully using PHPMailer with SMTP!';
    } catch (Exception $e) {
        echo 'Failed to send email using PHPMailer with SMTP. Error: ', $mail->ErrorInfo;
    }
}
?>
