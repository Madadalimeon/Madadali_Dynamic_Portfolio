<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Common{
public function SendEmail(){
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    // --- Server Settings ---
    $mail->isSMTP();                                      // Send using SMTP
    $mail->Host       = '://example.com';               // Set your SMTP server provider
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'your_email@example.com';         // SMTP username
    $mail->Password   = 'your_secure_password';           // SMTP password or App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable implicit TLS/STARTTLS encryption
    $mail->Port       = 587;                              // TCP port to connect to (587 or 465)

    // --- Recipients ---
    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Add a recipient

    // --- Content ---
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Testing PHPMailer via Composer';
    $mail->Body    = '<h1>Success!</h1><p>This email was sent using PHPMailer.</p>';
    $mail->AltBody = 'This is the plain text version for non-HTML mail clients';

    // --- Send ---
    $mail->send();
    echo 'Message has been successfully sent!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

}