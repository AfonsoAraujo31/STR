<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("UPDATE utilizadores SET foto_perfil = '".$imgContent."'  WHERE email = '".$_COOKIE["current_user"]."'"); 
             
            if($insert){ 
                $status = 'success'; 
                //$statusMsg = "File uploaded successfully."; 
                echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
            }else{ 
                //$statusMsg = "File upload failed, please try again."; 
                echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
            }  
        }else{ 
            //$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
        } 
    }else{ 
        //$statusMsg = 'Please select an image file to upload.'; 
        echo "<script>location.href='http://localhost/STR/view/user_page.php?email=".$_COOKIE["current_user"]."';</script>";
    } 
}
//echo $statusMsg; 
?>