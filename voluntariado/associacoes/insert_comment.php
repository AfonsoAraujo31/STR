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
$email = $_GET["user"];
$sql_nome = "SELECT nome FROM utilizadores WHERE email = '$email'";
if ($conn->query($sql_nome) === TRUE) {
  $nome = json_decode($sql_nome);
  echo  "<script>alert($nome);</script>";
} else {
  echo "Error: " . $conn->error;
}

$sql = "INSERT INTO comentarios (comentario,utilizador,nome) VALUES ('".$_GET["comment"]."','".$_GET["user"]."','Afonso')";

if ($conn->query($sql) === TRUE) {
  //echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php';</script>";
} else {
  echo "Error: " . $conn->error;
}


$conn->close();
?>