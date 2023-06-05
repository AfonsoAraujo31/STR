<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "UPDATE utilizadores SET nome = '" . $_GET['nome'] . "',sobrenome = '" . $_GET['sobrenome'] . "',num_telefone = '" . $_GET['num_telefone'] . "' WHERE email = '" . $_GET['email'] . "'";
if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
}