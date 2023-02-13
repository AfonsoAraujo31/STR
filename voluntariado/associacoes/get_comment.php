<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "str";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM comentarios";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
       echo $row["comentario"]."<br>";
    }
$result->free();
}
?>