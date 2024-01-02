<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
$name=$_POST['name'];

$subject=$_POST['subject'];
$email=$_POST['email'];

$message=$_POST['message'];
// Create a new PHPMailer instance
$mail = new PHPMailer();

// Set the SMTP configuration
$mail->isSMTP();
$mail->Host = "smtp.mailtrap.io";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "763bcf490f2969";
$mail->Password = "580dcec720c5b9";



$mail->setFrom('wastewiseplastic@gmail.com', 'Waste Wise Plastic');
$mail->addAddress($email, 'Farah');

$mail->Subject =$subject;
$mail->Body = 'Hello the name is'. $name . "\n the message is" . $message;

// Send the email
if ($mail->send()) {
    header('Location: thanks.html'); 
    exit;
} else {
    echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
