<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->issmtp();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shrutikumaribbs_cse20@its.edu.in';
    $mail->Password = 'hckwlmkvzaxrrrqu';

$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('shrutikumaribbs_cse20@its.edu.in');
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];
$mail->send();
echo
"
<script>alert('sent Sucessfull);
document.location.href = 'index.php';
</script>
";
}
?>