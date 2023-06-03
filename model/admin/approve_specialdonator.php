<?php
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$query = "SELECT email FROM candidaturas WHERE id = '" . $_GET['id'] . "'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $sql = "DELETE FROM candidaturas WHERE email = '" . $row['email'] . "'";
    $result1 = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE utilizadores SET doador_especial = 1 WHERE email = '" . $row['email'] . "'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
        } else {
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
        }
    } else {
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "&error=updatefail';</script>";
    }
}
