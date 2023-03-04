<?php  
$output = '';  
$video_id = '';  
$connect = mysqli_connect("localhost", "root", "", "str");  
$sql = "SELECT * FROM comentarios_cv WHERE id > ".$_POST['last_video_id']." LIMIT 2";  
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $comentario = $row['comentario'];
          $email = $row['utilizador'];
          $nome = $row['nome'];
          $data = $row['data_registo'];

          $query = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";
          if ($result1 = $connect->query($query)) {
               while ($row1 = $result1->fetch_assoc()) {
                    $foto_perfil = base64_decode($row1['foto_perfil']);
               }
               $result1->free();
          }            

          $output .= '  
          <tbody>  
          <tr><td>
          <div class="comment-box">
                                                    <div class="comment-avatar">
                                                    <img alt="" src="data:image/png;base64,""" />
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
               <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-sm" style="background-color: #ff5e14a8; color:  #fff;">Mais comentários</button></td>
               </tr></tbody>  
     ';  
     echo $output;  
}
?>