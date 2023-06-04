<?php
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';

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

$sql = "SELECT email,tipo,data_registo,foto FROM notificacoes WHERE email='" . $_COOKIE['current_user'] . "' ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
            <li class="dropdown-item d-flex">
                        <div class="p-2"><img style="width:40px; position:relative;top:0.5px;"  src="'.$row['foto'] . '"/></div>
                        <div class="p-2">
                            <p><b>' . $row["tipo"] . '</b></p>
                            <p>' . $row["data_registo"] . '</p>
                        </div>
                    </li>
            ';
    }
} else {
    echo '
    <li class="dropdown-item d-flex">
                        <div class="p-2"><img style="width:40px; position:relative;top:0.5px;"  src="../view/assets/notifications/out-of-stock.png"/></div>
                        <div class="p-2">
                            <p><b>Sem Notificações!</b></p>
                            <p>' . $data . '</p>
                        </div>
                    </li>
    ';
}
