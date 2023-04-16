<?php
ini_set('display_errors', 0);
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$output = '';  
$video_id = '';  
$sql = "SELECT * FROM ".$_POST['db']." WHERE id > ".$_POST['last_video_id']." LIMIT 2";  
$result = mysqli_query($conn, $sql);
if(mysqli_connect_errno()){
    if($_POST['language']== 1){
        echo '<div class="alert_erro rounded alert-danger" role="alert">
        <h4 class="alert-heading">Erro!</h4><hr>
        <p class="mb-0">Oops, algo de inesperado aconteceu. Por favor recarregue a página ou tente novamente mais tarde.</p>
      </div>';
    }else if ($_POST['language'] == 2){
        echo '<div class="alert_erro rounded alert-danger" role="alert">
        <h4 class="alert-heading">Error!</h4><hr>
        <p class="mb-0">Oops, something unexpected happened. Please reload the page or try again later.</p>
      </div>';
    }else if($_POST['language'] == 3){
        echo '<div class="alert_erro rounded alert-danger" role="alert">
        <h4 class="alert-heading">Erreur!</h4><hr>
        <p class="mb-0">Oops, quelque chose inattendu est produit. Veuillez recharger la page ou réessayer plus tard.</p>
      </div>';
    }
}else{
    if(mysqli_num_rows($result) > 0)  
    {  
         while($row = mysqli_fetch_array($result))  
         {  
              $comentario = $row['comentario'];
              $email = $row['utilizador'];
              $nome = $row['nome'];
              $data = $row['data_registo'];
              require_once '/wamp64/www/STR/configurations/dbconnection.php';
                                            $query1 = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                                            if ($result1 = $conn->query($query1)) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                    $foto_perfil = base64_encode($row1['foto_perfil']);
                                                }
                                                $result1->free();
                                            }      
    
              $output .= '  
              <tbody>  
              <tr><td>
              <div class="comment-box">
                                                        <div class="comment-avatar">
                                                        <img src="data:image/png;base64, '.$foto_perfil.'"/>
                                                        </div>
                                                        <div class="comment-text">'.$comentario.'</div>
                                                            <div class="comment-footer">
                                                                <div class="comment-info">
                                                                    <span class="comment-author">
                                                                        <a href="mailto:'.$email.'">'.$nome.'</a>
                                                                    </span>
                                                                    <span class="comment-date">'.$data.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div>  
                                                    <br>
                                                    
                                                    
              </td></tr></tbody>';  
              $video_id = $row["id"];  
         }
         $output .= '  
                   <tbody><tr id="remove_row">  
                   <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-sm" style="background-color: #ff5e14a8; color:  #fff;box-shadow:none;">Mais comentários</button></td>
                   </tr></tbody>  
         ';  
         echo $output;
    }else{
        $output .= '  
                   <tbody><tr id="remove_row">  
                   <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-sm" style="background-color: #ff5e14a8; color:  #fff;box-shadow:none;">0 Resultados</button></td>
                   </tr></tbody>  
         ';  
         echo $output;
    }
}
