<?php
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT email,tipo,data_registo,foto FROM notificacoes WHERE email='" . $_COOKIE['current_user'] . "'";
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
    echo "";
}
