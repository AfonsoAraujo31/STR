<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "str";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
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
} else if (date("m") == 7) {
  $mes = "Jul";
} else if (date("m") == 8) {
  $mes = "Ago";
} else if (date("m") == 9) {
  $mes = "Set";
} else if (date("m") == 10) {
  $mes = "Out";
} else if (date("m") == 11) {
  $mes = "Nov";
} else if (date("m") == 12) {
  $mes = "Dez";
}
$data = "$mes  " . date("d") . ",   " . date("Y");

echo $_GET['id'];
echo $_GET['tipo'];

$query = "SELECT id,tipo,email FROM candidaturas_familias WHERE id_familia = '" . $_GET['id'] . "' AND tipo = '".$_GET['tipo']."'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  if ($row['tipo'] == 'Alimentação') {
    $table_name = "alimentacao";
  } else if ($row['tipo'] == 'Alojamento') {
    $table_name = "habitacao";
  } else if ($row['tipo'] == 'Vestuario') {
    $table_name = "vestuario";
  } else if ($row['tipo'] == 'Educação') {
    $table_name = "educacao";
  }
  $sql = "DELETE FROM candidaturas_familias WHERE id = '" . $row['id'] . "'";
  $result1 = mysqli_query($conn, $sql);
  if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE familias_doacaoespecial SET $table_name = 1 WHERE id = '" . $_GET['id'] . "'";
    $email = $row['email'];
    if ($conn->query($sql) === TRUE) {
      $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $email . "','" . $data . "','Candidatura Aprovada!','../view/assets/notifications/smile.png')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
      } else {
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
      }
    }
  }
}
