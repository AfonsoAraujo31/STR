<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);
$email = $_GET['email'];
setcookie("recovery_user", $_GET['email'],0,"/");
try {
    // Server settings
    //codigo
    $mail->addAddress('' . $email . '');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Recuperar Palavra Chave';
    $mail->Body    = 'Caro(a) utilizador,<br>
            Caso pretenda recuperar a sua palavra chave aceda a este link: http://localhost/STR/view/password_recovery_view.php<br><br>
            Atenciosamente,<br><br>
            Afonso Araújo,<br>
            STR
          ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>location.href='http://localhost/STR/view/login.php';</script>";
} catch (Exception $e) {
    echo "<script>location.href='http://localhost/STR/view/login.php';</script>";
}
