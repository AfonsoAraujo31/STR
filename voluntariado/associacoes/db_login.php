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

$sql = "SELECT id, email, pass FROM utilizadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["email"] == $_GET["email"] & $row["pass"] == $_GET["pass"]) {
      echo "<script>localStorage.setItem('sing_in', 1);</script>";
      echo "<script>localStorage.setItem('temp_user', '".$row["email"]."');</script>";
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php';</script>";
    } else {
      echo "nao top";
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>