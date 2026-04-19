<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ujjwalraj843429@gmail.com';
$mail->Password = 'ujj123@wal';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('ujjwalraj843429@gmail.com');
$mail->addAddress($user_email); // yaha user ka email aayega

$mail->isHTML(true);
$mail->Subject = 'Test Email';
$mail->Body    = 'This is a test email from your project';

if($mail->send()){
    echo "Email sent successfully";
}else{
    echo "Email failed";
}
?>