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

$query = "SELECT email FROM candidaturas_familias WHERE id_familia = '" . $_GET['id'] . "'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $sql = "DELETE FROM candidaturas_familias WHERE id_familia = '" . $_GET['id'] . "'";
    $result1 = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        $email = $row['email'];
        $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $email . "','" . $data . "','Candidatura Rejeitada!','../view/assets/notifications/unhappy.png')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
        } else {
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
        }
    }
}