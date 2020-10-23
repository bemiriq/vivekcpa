<?php
echo'inside send email';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

// require("class.phpmailer.php");
// $mail = new PHPMailer();
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.mailtrap.io";
$mail->SMTPAuth = true;
$mail->Username = 'f4b07b1f289204';
$mail->Password = '4416ba5f9dab6a';

$mail->setFrom = "ujjumaki23@gmail.com";
$mail->AddAddress('ujjumaki23@gmail.com');
$mail->Subject = "Test 1";
$mail->Body = "Test 1 of PHPMailer.";

if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;;
}
else
{
   echo "Letter is sent";
}?>