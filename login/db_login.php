<?php
ini_set('display_errors', 0);
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

$sql = "SELECT id, email, pass FROM utilizadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["email"] == $_GET["email"] & $row["pass"] == $_GET["pass"]) {
      echo "<script>localStorage.setItem('sing_in', 1);</script>";
      echo "<script>localStorage.setItem('temp_user', '".$row["email"]."');</script>";
      echo "<script>location.href='http://localhost/STR/login/user_page.php?email=".$_GET["email"]."';</script>";
      $login = 0;
    }else{
      $login = 1;
    }
  }
  if($login = 1){
      echo "<script>location.href='http://localhost/STR/login/login.php?error=login';</script>";
  }
}
$conn->close();
?>