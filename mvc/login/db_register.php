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

$sql = "INSERT INTO utilizadores(nome,sobrenome,email,pass,nacionalidade,num_telefone)
VALUES ('".$_GET["nome"]."','".$_GET["sobrenome"]."','".$_GET["email"]."','".$_GET["pass"]."','".$_GET["pais"]."','".$_GET["telemovel"]."')";

if ($conn->query($sql) === TRUE) {
    $sql = "INSERT INTO preferencias(email,linguagem,coockies,contacto,dados_login)
    VALUES ('".$_GET["email"]."','Sem preferência','Sem preferência','Sem preferência','Sem preferência')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>localStorage.setItem('sing_in', 1);</script>";
      echo "<script>localStorage.setItem('temp_user', '".$_GET["email"]."');</script>";
      echo "<script>document.cookie = 'current_user='".$_GET["email"]."'</script>";
      setcookie('current_user', $_GET["email"]);
      echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_GET["email"]."';</script>";
    }
   } else {
 // echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_COOKIE["current_user"]."&error=updatefail';</script>";
}
