<?php
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';

$query = "
    SELECT 'comentarios_cv' as table_name, COUNT(*) as row_count FROM comentarios_cv
    UNION ALL
    SELECT 'comentarios_cpr' as table_name, COUNT(*) as row_count FROM comentarios_cpr
    UNION ALL
    SELECT 'comentarios_cbl' as table_name, COUNT(*) as row_count FROM comentarios_cbl
    UNION ALL
    SELECT 'comentarios_apirp' as table_name, COUNT(*) as row_count FROM comentarios_apirp
    UNION ALL
    SELECT 'comentarios_alcc' as table_name, COUNT(*) as row_count FROM comentarios_alcc
";

$result = mysqli_query($conn, $query);
$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $rowCount = $row['row_count'];
    $total = $total + $rowCount;
}
echo $total;

mysqli_close($connection);
