<?php 
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
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
} else if (date("m") == 2) {
  $mes = "Jul";
} else if (date("m") == 2) {
  $mes = "Ago";
} else if (date("m") == 2) {
  $mes = "Set";
} else if (date("m") == 2) {
  $mes = "Out";
} else if (date("m") == 2) {
  $mes = "Nov";
} else if (date("m") == 2) {
  $mes = "Dez";
}
$data = "$mes  " . date("d") . ",   " . date("Y");
if($_GET['pass1'] == $_GET['pass2']){
    $sql = "UPDATE utilizadores SET pass = '" . $_GET['pass1'] . "' WHERE email = '" . $_COOKIE['recovery_user'] . "'";
    if ($conn->query($sql) === TRUE) {
      $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $_COOKIE["recovery_user"] . "','" . $data . "','Perfil Atualizado!','../view/assets/notifications/updated.png')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>location.href='http://localhost/STR/view/home.php';</script>";
      }
    } else {
      echo "<script>location.href='http://localhost/STR/view/home.php';</script>";
    }
}else{
    
}
