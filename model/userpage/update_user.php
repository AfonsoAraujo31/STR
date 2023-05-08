<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "UPDATE utilizadores SET nome = '".$_GET['nome']."',sobrenome = '".$_GET['sobrenome']."',num_telefone = '".$_GET['num_telefone']."',morada = '".$_GET['morada']."',data_nascimento = '".$_GET['data_nascimento']."',pass = '".$_GET['pass']."',nacionalidade = '".$_GET['nacionalidade']."' WHERE email = '".$_COOKIE['current_user']."'";
if ($conn->query($sql) === TRUE) {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}
$conn->close();
?>