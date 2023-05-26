<?php 
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "INSERT INTO utilizadores(nome,sobrenome,email,pass,nacionalidade,num_telefone)
VALUES ('".$_GET["nome"]."','".$_GET["sobrenome"]."','".$_GET["email"]."','".$_GET["pass"]."','".$_GET["pais"]."','".$_GET["telemovel"]."')";

if ($conn->query($sql) === TRUE) {
  $sql = "INSERT INTO preferencias(email,linguagem,coockies,contacto,dados_login)
  VALUES ('".$_GET["email"]."','Sem preferência','Sem preferência','Sem preferência','Sem preferência')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>localStorage.setItem('sing_in', 1);</script>";
    echo "<script>localStorage.setItem('temp_user', '" . $_GET["email"] . "');</script>";
    setcookie("current_user", $_GET['email'],0,"/");
    setcookie("sing_in", "1",0,"/");
    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_GET["email"]."';</script>";
  }else{
    echo "<script>location.href='http://localhost/STR/view/login.php?error=register';</script>";
  }
}