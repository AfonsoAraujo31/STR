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

if (date("m") == 1) {
  $mes = "Jan";
} else if (date("m") == 2) {
  $mes = "Fev";
} else if (date("m") == 3) {
  $mes = "Mar";
} else if (date("m") == 4) {
  $mes = "Abr";
} else if (date("m") == 5) {
  $mes = "Maio";
} else if (date("m") == 6) {
  $mes = "Jun";
} else if (date("m") == 2) {
  $mes = "Jul";
} else if (date("m") == 2) {
  $mes = "Ago";
} else if (date("m") == 2) {
  $mes = "Set";
} else if (date("m") == 2) {
  $mes = "Out";
} else if (date("m") == 2) {
  $mes = "Nov";
} else if (date("m") == 2) {
  $mes = "Dez";
}
$data = "$mes  " . date("d") . ",   " . date("Y");

$sql_nome = "SELECT nome FROM utilizadores WHERE email = '".$_GET['user']."'";
$result = $conn->query($sql_nome);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $table_name = "";
    if ($_GET['db'] == "cv") {
      $table_name = "comentarios_cv";
    } else if ($_GET['db'] == "cpr") {
      $table_name = "comentarios_cpr";
    } else if ($_GET['db'] == "apirp") {
      $table_name = "comentarios_apirp";
    } else if ($_GET['db'] == "alcc") {
      $table_name = "comentarios_alcc";
    } else if ($_GET['db'] == "cbl") {
      $table_name = "comentarios_cbl";
    }
      $sql = "INSERT INTO `" . $table_name . "`(coment1ario,utilizador,nome,data_registo) VALUES ('" .$_GET['comentario'] . "','" . $_GET['user'] . "','" . $row["nome"] . "','" . $data . "')";
      if ($conn->query($sql) === TRUE) {
        if ($_GET['db'] == "cv") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php';</script>";
        } else if ($_GET['db'] == "cpr") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_cpr.php';</script>";
        } else if ($_GET['db'] == "apirp") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_apirp.php';</script>";
        } else if ($_GET['db'] == "alcc") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_alcc.php';</script>";
        } else if ($_GET['db'] == "cbl") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_cbl.php';</script>";
        }
        $login = 0;
      } else {
        $login = 1;
      }
      if($login = 1){
        if ($_GET['db'] == "cv") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php?error=comment';</script>";
        } else if ($_GET['db'] == "cpr") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_cpr.php?error=comment';</script>";
        } else if ($_GET['db'] == "apirp") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_apirp.php?error=comment';</script>";
        } else if ($_GET['db'] == "alcc") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_alcc.php?error=comment';</script>";
        } else if ($_GET['db'] == "cbl") {
          echo "<script>location.href='http://localhost/STR/voluntariado/associacoes/comentarios_cbl.php?error=comment';</script>";
        }
      }
  }
} else {
  
}
$conn->close();
