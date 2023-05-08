<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "UPDATE utilizadores SET descricao = '".$_GET['descricao']."' WHERE email = '".$_COOKIE['current_user']."'";
if ($conn->query($sql) === TRUE) {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}
$conn->close();
?>