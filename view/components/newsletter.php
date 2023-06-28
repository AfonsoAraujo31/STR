<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);
$email = $_GET['email'];
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'afonso16araujo@gmail.com';
    $mail->Password   = 'ybicdcikrodnnabx';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    // Recipients
    $mail->setFrom('afonso16araujo@gmail.com', 'STR');
    $mail->addAddress('' . $email . '');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Newsletter ativada!';
    $mail->Body    = '
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f2f2f2; font-family: Arial, sans-serif;">
    <tr>
      <td align="center">
        <table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #ffffff;">
          <tr>
            <td align="center" style="padding: 40px 0;">
              <h1>Obrigado pela sua inscrição!</h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 0 40px;">
              <p>Olá,</p>
              <p>Obrigado por se inscrever na nossa newsletter! Estamos animados para compartilhar conteúdos incríveis com você.</p>
              <p>Aqui está uma prévia do que você pode descobrir:</p>
              <ul>
                <li>Últimas notícias e atualizações da nossa empresa</li>
                <li>Dicas e truques sobre o assunto de interesse</li>
                <li>Recursos exclusivos e ofertas especiais</li>
              </ul>
              <p>Fique atento à sua caixa de entrada, pois enviaremos regularmente as nossas últimas novidades.</p>
              <p>Se tiver alguma dúvida ou precisar de mais informações, não hesite em entrar em contato conosco.</p>
              <p>Atenciosamente,</p>
              <p>A equipe da nossa empresa</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
    
    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>location.href='http://localhost/STR/view/home.php';</script>";
} catch (Exception $e) {
    echo "<script>location.href='http://localhost/STR/view/home.php?error=newsletter';</script>";
}
