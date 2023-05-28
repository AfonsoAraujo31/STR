<?php 
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$email = $_GET["id"];

$sql = "DELETE FROM `utilizadoreszsada` WHERE id = '$email'";

if ($conn->query($sql) === TRUE) {
   echo "<script>location.href='http://localhost/STR/view/login.php';</script>";
}