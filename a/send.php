<?php

$name = filter_var( $_POST['name'],FILTER_SANITIZE_STRING);
$phone = filter_var( $_POST['phone'],FILTER_SANITIZE_STRING);
$email = filter_var( $_POST['email'],FILTER_SANITIZE_STRING);
$message = filter_var( $_POST['message'],FILTER_SANITIZE_STRING);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ProGod2k@gmail.com';                     //SMTP username
    $mail->Password   = 'Papazola123@';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Sender
    $mail->setFrom('duattran2701@yahoo.com', 'Khach hang');

    //Recipients
    $mail->addAddress('ProGod2k@gmail.com', $name);     //Add a recipient

    //body content
    $body="you have received email from : " . $email . "<br> Who is :" . $name . "<br> The message is : " . $message . "<br> The contact is : " . $phone;
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';

    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header("location: thankyou.php");
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}