<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
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
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            // Insert image content into database 
            $insert = $conn->query("UPDATE utilizadores SET foto_perfil = '" . $imgContent . "'  WHERE email = '" . $_COOKIE["current_user"] . "'");

            if ($insert) {
                $status = 'success';
                //$statusMsg = "File uploaded successfully."; 
                $sql = "INSERT INTO notificacoes (`email`, `data_registo`, `tipo`,`foto`) VALUES ('" . $_COOKIE["current_user"] . "','" . $data . "','Foto de Perfil Atualizada!','../view/assets/notifications/updated.png')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
                }
            } else {
                //$statusMsg = "File upload failed, please try again."; 
                echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
            }
        } else {
            //$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
        }
    } else {
        //$statusMsg = 'Please select an image file to upload.'; 
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE["current_user"] . "';</script>";
    }
}
//echo $statusMsg; 
