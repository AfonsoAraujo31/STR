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
$teste = addslashes(file_get_contents($_FILES('http://localhost/STR/login/images/fotodefault.png')));

$sql = "INSERT INTO utilizadores(nome,sobrenome,email,pass,nacionalidade,num_telefone,foto_perfil)
VALUES ('".$_GET["nome"]."','".$_GET["sobrenome"]."','".$_GET["email"]."','".$_GET["pass"]."','".$_GET["pais"]."','".$_GET["telemovel"]."','".$teste."'    )";

if ($conn->query($sql) === TRUE) {
    echo "top";
   //echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
} else {
 // echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}

?>