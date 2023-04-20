<?php 
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        /*$count++;
        if ($count > 4 && ($count - 1) % 4 == 0) {
            echo "Olá";
        }*/
        echo '
            <div class="card">
                <div class="content">
                    <h2 class="title">'.$row['nome_familia'].'</h2>
                    <p class="copy">'.$row['descricao'].'</p>
                    <button class="btn">Ajudar</button>
                </div>
            </div>
        ';
    }
}
?>