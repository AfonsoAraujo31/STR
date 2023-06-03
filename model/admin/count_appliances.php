<?php
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';

$query = "SELECT 'candidaturas' as table_name, COUNT(*) as row_count FROM candidaturas";

$result = mysqli_query($conn, $query);
$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $rowCount = $row['row_count'];
    $total = $total + $rowCount;
}
echo $total;

mysqli_close($connection);