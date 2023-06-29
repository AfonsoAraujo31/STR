<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "str";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
if (date("m") == 1) {
  $mes = "Jan";
} else if (date("m") == 2) {
  $mes = "Fev";
} else if (date("m") == 3) {
  $mes = "Mar";
} else if (date("m") == 4) {
  $mes = "Abr";
} else if (date("m") == 5) {
  $mes = "Maio";
} else if (date("m") == 6) {
  $mes = "Jun";
} else if (date("m") == 7) {
  $mes = "Jul";
} else if (date("m") == 8) {
  $mes = "Ago";
} else if (date("m") == 9) {
  $mes = "Set";
} else if (date("m") == 10) {
  $mes = "Out";
} else if (date("m") == 11) {
  $mes = "Nov";
} else if (date("m") == 12) {
  $mes = "Dez";
}
$data = "$mes  " . date("d") . ",   " . date("Y");

$query = "SELECT id,tipo,email FROM candidaturas_familias WHERE id_familia = '" . $_GET['id'] . "' AND tipo = '" . $_GET['tipo'] . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  if ($row['tipo'] == 'Alimentação') {
    $table_name = "alimentacao";
  } else if ($row['tipo'] == 'Alojamento') {
    $table_name = "habitacao";
  } else if ($row['tipo'] == 'Vestuario') {
    $table_name = "vestuario";
  } else if ($row['tipo'] == 'Educação') {
    $table_name = "educacao";
  }
  $sql = "DELETE FROM candidaturas_familias WHERE id = '" . $row['id'] . "'";
  $result1 = mysqli_query($conn, $sql);
  if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE familias_doacaoespecial SET $table_name = 1 WHERE id = '" . $_GET['id'] . "'";
    $email = $row['email'];
    if ($conn->query($sql) === TRUE) {
      $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $email . "','" . $data . "','Candidatura Aprovada!','../view/assets/notifications/smile.png')";
      if ($conn->query($sql) === TRUE) {

        $mail = new PHPMailer(true);

        try {
          // Server settings
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'afonso16araujo@gmail.com';
          $mail->Password   = 'pntwfrdsbrnqskoh';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port       = 465;
          // Recipients
          $mail->setFrom('afonso16araujo@gmail.com', 'STR');
          $mail->addAddress('' . $email . '');

          // Content
          $mail->isHTML(true);
          $mail->Subject = 'Candidatura Aceite - Informações de Contacto';
          $mail->Body    = 'Caro(a) doador especial,<br>
          É com grande satisfação que lhe informamos que sua candidatura foi aceita na nossa organização. Parabenizamos pela conquista e temos a certeza de que você contribuirá significativamente para a nossa causa.<br><br>
          Para facilitar a comunicação e garantir uma integração adequada, solicitamos que forneça as seguintes informações de contato:<br>
            Morada: Rua do Carmo, Lisboa Nº 58<br>
            Número de Telefone: +351 974 741 635<br>
            Novamente, parabéns pela aprovação da sua candidatura!<br>
            Atenciosamente,<br><br>
            Afonso Araújo,<br>
            STR
          ';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
        } catch (Exception $e) {
          echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
        }
      } else {
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
      }
    }
  }
}
