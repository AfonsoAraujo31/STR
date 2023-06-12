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

$sql = "INSERT INTO candidaturas_familias(nome,sobrenome,email,id_familia,motivacao,data_registo,tipo,quantidade,frequencia,data_inicio)
VALUES ('" . $_GET["nome"] . "','" . $_GET["sobrenome"] . "','" . $_GET["email"] . "','" . $_GET["id"] . "','" . $_GET["motivacao_familia"] . "','" . $data . "','" . $_GET["tipo"] . "','" . $_GET["quantidade"] . "','" . $_GET["frequencia"] . "','" . $_GET["data_inicio"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_GET["email"] . "';</script>";
} else {
    echo "<script>location.href='http://localhost/STR/view/login.php?error=register';</script>";
}