<?php 
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';
$email = $_GET["id"];
if($_GET["db"] == 1){
    $sql = "DELETE FROM `comentarios_cbl` WHERE id = '$email'";
}else if($_GET["db"] == 2){
    $sql = "DELETE FROM `comentarios_alcc` WHERE id = '$email'";
}else if($_GET["db"] == 3){
    $sql = "DELETE FROM `comentarios_apirp` WHERE id = '$email'";
}else if($_GET["db"] == 4){
    $sql = "DELETE FROM `comentarios_cpr` WHERE id = '$email'";
}else if($_GET["db"] == 5){
    $sql = "DELETE FROM `comentarios_cv` WHERE id = '$email'";
}

if ($conn->query($sql) === TRUE) {
   echo "<script>location.href='http://localhost/STR/view/login.php';</script>";
}