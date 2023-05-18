<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT id, email, pass FROM utilizadores";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["email"] == $_GET["email"] & $row["pass"] == $_GET["pass"]) {
      echo "<script>localStorage.setItem('sing_in', 1);</script>";
      echo "<script>localStorage.setItem('temp_user', '" . $_GET["email"] . "');</script>";
      setcookie("current_user", $_GET['email'],0,"/");
      setcookie("temp_user", $_GET['email'],0,"/");
      setcookie("sing_in", "1",0,"/");
      echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_GET["email"] . "';</script>";
    } else {
      echo "<script>location.href='http://localhost/STR/view/login.php?error=login';</script>";
    }
  }
}
$conn->close();
?>