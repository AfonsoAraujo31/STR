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

$email = $_GET["user"];
$sql_nome = "SELECT nome FROM utilizadores WHERE email = '$email'";
$result = $conn->query($sql_nome);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $table_name = "";
    if ($_GET["current_url"] == "/STR/voluntariado/associacoes/associacao_cv.php") {
      $table_name = "comentarios_cv";
    } else if ($_GET["current_url"] == "/STR/voluntariado/associacoes/associacao_cpr.php") {
      $table_name = "comentarios_cpr";
    } else if ($_GET["current_url"] == "/STR/voluntariado/associacoes/associacao_apirp.php") {
      $table_name = "comentarios_apirp";
    } else if ($_GET["current_url"] == "/STR/voluntariado/associacoes/associacao_alcc.php") {
      $table_name = "comentarios_alcc";
    } else if ($_GET["current_url"] == "/STR/voluntariado/associacoes/associacao_cbl.php") {
      $table_name = "comentarios_cbl";
    }
    if($_GET["comment"] == ""){
      echo "tem de escrever algo";
    }else{
      $sql = "INSERT INTO `" . $table_name . "`(comentario,utilizador,nome,data_registo) VALUES ('" . $_GET["comment"] . "','" . $_GET["user"] . "','" . $row["nome"] . "','" . $data . "')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>
            location.href='http://localhost/STR/voluntariado/associacoes/associacao_cv.php';
          </script>";
      } else {
        echo "Error: " . $conn->error;
      }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
