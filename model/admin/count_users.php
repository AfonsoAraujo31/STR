<?php
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';

$query = "SELECT 'utilizadores' as table_name, COUNT(*) as row_count FROM utilizadores";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $rowCount = $row['row_count'];
}
echo $rowCount;

mysqli_close($connection);
?>