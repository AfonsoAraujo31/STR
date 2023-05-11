<?php
ini_set('display_errors', 1);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial where id= '".$_GET['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $foto_familia = base64_encode($row['foto_familia']);
        /*$row['descricao']*/
        echo '
        
        ';
    }
}
?>