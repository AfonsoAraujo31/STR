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

$sql = "UPDATE utilizadores SET nome = '".$_GET['nome']."',sobrenome = '".$_GET['sobrenome']."',num_telefone = '".$_GET['num_telefone']."',morada = '".$_GET['morada']."',data_nascimento = '".$_GET['data_nascimento']."',pass = '".$_GET['pass']."',descricao = '".$_GET['descricao']."',nacionalidade = '".$_GET['nacionalidade']."' WHERE email = '".$_COOKIE['current_user']."'";

if ($conn->query($sql) === TRUE) {
   echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
} else {
  echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}

$conn->close();
?>