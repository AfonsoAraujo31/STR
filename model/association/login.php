<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT id, email, pass FROM utilizadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["email"] == $_GET["email"] & $row["pass"] == $_GET["pass"]) {
      echo "<script>localStorage.setItem('sing_in', 1);</script>";
      echo "<script>localStorage.setItem('temp_user', '".$row["email"]."');</script>";
      if ($_GET['db'] == "cv") {
        echo "<script>location.href='http://localhost/STR/view/association_cv.php';</script>";
      } else if ($_GET['db'] == "cpr") {
        echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cpr.php';</script>";
      } else if ($_GET['db'] == "apirp") {
        echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_apirp.php';</script>";
      } else if ($_GET['db'] == "alcc") {
        echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_alcc.php';</script>";
      } else if ($_GET['db'] == "cbl") {
        echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cbl.php';</script>";
      }
      $login = 0;
    }else{
      $login = 1;
    }
  }
  if($login = 1){
    if ($_GET['db'] == "cv") {
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php?error=login';</script>";
    } else if ($_GET['db'] == "cpr") {
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cpr.php?error=login';</script>";
    } else if ($_GET['db'] == "apirp") {
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_apirp.php?error=login';</script>";
    } else if ($_GET['db'] == "alcc") {
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_alcc.php?error=login';</script>";
    } else if ($_GET['db'] == "cbl") {
      echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cbl.php?error=login';</script>";
    }
  }
}
$conn->close();
?>