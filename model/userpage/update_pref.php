<?php
require_once '/wamp64/www/STR/configurations/dbconnection.php';
ini_set('display_errors', 0);
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
if ($_GET["linguagem"] == "Português" || $_GET["linguagem"] == "Portuguese" || $_GET["linguagem"] == "Portugais") {
  $linguagem = "Português";
} else if ($_GET["linguagem"] == "Inglês" || $_GET["linguagem"] == "English" || $_GET["linguagem"] == "Anglais") {
  $linguagem = "Inglês";
} else if ($_GET["linguagem"] == "Françes" || $_GET["linguagem"] == "French" || $_GET["linguagem"] == "Français") {
  $linguagem = "Françes";
} else if ($_GET["linguagem"] == "Sem preferência" || $_GET["linguagem"] == "No preference" || $_GET["linguagem"] == "Pas de préférence") {
  $linguagem = "Sem preferência";
}

if ($_GET["contacto"] == "Telemóvel" || $_GET["contacto"] == "Phone" || $_GET["contacto"] == "Téléphone") {
  $contacto = "Telemóvel";
} else if ($_GET["contacto"] == "Email" || $_GET["contacto"] == "Email" || $_GET["contacto"] == "Email") {
  $contacto = "Email";
} else if ($_GET["contacto"] == "Sem preferência" || $_GET["contacto"] == "No preference" || $_GET["contacto"] == "Pas de préférence") {
  $contacto = "Sem preferência";
}

if ($_GET["coockies"] == "Ativado" || $_GET["coockies"] == "Activated" || $_GET["coockies"] == "Activé") {
  $coockies = "Ativado";
} else if ($_GET["coockies"] == "Desativado" || $_GET["coockies"] == "Disabled" || $_GET["coockies"] == "Désactivé") {
  $coockies = "Desativado";
} else if ($_GET["coockies"] == "Sem preferência" || $_GET["coockies"] == "No preference" || $_GET["coockies"] == "Pas de préférence") {
  $coockies = "Sem preferência";
}

if ($_GET["dados_login"] == "Sim" || $_GET["dados_login"] == "Yes" || $_GET["dados_login"] == "Oui") {
  $dados_login = "Sim";
} else if ($_GET["dados_login"] == "Não" || $_GET["dados_login"] == "No" || $_GET["dados_login"] == "Au") {
  $dados_login = "Não";
} else if ($_GET["dados_login"] == "Sem preferência" || $_GET["dados_login"] == "No preference" || $_GET["dados_login"] == "Pas de préférence") {
  $dados_login = "Sem preferência";
}

$sql = "UPDATE preferencias SET linguagem = '" . $linguagem . "',contacto = '" . $contacto . "',coockies = '" . $coockies . "',dados_login = '" . $dados_login . "' WHERE email = '" . $_COOKIE['current_user'] . "'";

if ($conn->query($sql) === TRUE) {
  if ($_GET["linguagem"] == "Português" || $_GET["linguagem"] == "Portuguese" || $_GET["linguagem"] == "Portugais") {
    echo "<script>localStorage.setItem('language', 1);</script>";
  } else if ($_GET["linguagem"] == "Inglês" || $_GET["linguagem"] == "English" || $_GET["linguagem"] == "Anglais") {
    echo "<script>localStorage.setItem('language', 2);</script>";
  } else if ($_GET["linguagem"] == "Françes" || $_GET["linguagem"] == "French" || $_GET["linguagem"] == "Français") {
    echo "<script>localStorage.setItem('language', 3);</script>";
  }
  $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $_COOKIE["current_user"] . "','" . $data . "','Preferências Atualizadas!','../view/assets/notifications/updated.png')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
  }
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
}

$conn->close();
