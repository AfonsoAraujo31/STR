<?php
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
$sql = "INSERT INTO candidaturas(nome,sobrenome,email,num_telefone,num_identificacao,motivacao,data_registo)
VALUES ('" . $_GET["nome"] . "','" . $_GET["sobrenome"] . "','" . $_GET["email"] . "','" . $_GET["num_telefone"] . "','" . $_GET["num_identificacao"] . "','" . $_GET["motivacao"] . "','" . $data . "')";

if ($conn->query($sql) === TRUE) {
    $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $_GET["email"] . "','" . $data . "','Candidatura Enviada!','../view/assets/notifications/mail.png')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
    }
} else {
    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_GET["email"] . "&error=appliance';</script>";
}
