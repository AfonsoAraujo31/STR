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

$sql = "INSERT INTO comentarios (comentario) VALUES ('".$_GET["comment"]."')";

if ($conn->query($sql) === TRUE) {
  //echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php';</script>";
} else {
  echo "Error: " . $conn->error;
}


$conn->close();
?>