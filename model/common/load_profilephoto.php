<?php 
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';
if ($_COOKIE["temp_user"] == "") {
    echo "<li class='user-container'><a href='./login.php'><span><img class='user' src='../view/assets/others/user.png' /></span></a></li></li>";
  } else {
    require_once '../configurations/dbconnection.php';
    $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_COOKIE['temp_user'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if ($row["email"] == $_COOKIE['temp_user']) {
          $foto_perfil = base64_encode($row['foto_perfil']);
          echo "<li class='user-container'><a href='./login.php'><span><img alt='' style='width:50px;border-radius: 50%; position:relative;top:0.5px;  ' src='data:image/*;base64," . $foto_perfil . "' /></span></a></li></li>";
        }
      }
    }
    $conn->close();
  }
?>