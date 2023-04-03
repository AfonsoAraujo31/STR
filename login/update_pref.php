<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "str";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE preferencias SET linguagem = '".$_GET['linguagem']."',contacto = '".$_GET['contacto']."',coockies = '".$_GET['coockies']."',dados_login = '".$_GET['dados_login']."' WHERE email = '".$_COOKIE['current_user']."'";

if ($conn->query($sql) === TRUE) {
   echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}

$conn->close();
?>