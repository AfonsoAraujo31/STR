<?php 
ini_set('display_errors', 1);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
         $foto_familia = base64_encode($row['foto_familia']);
        echo '
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="data:image/*;base64,'.$foto_familia.'">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">'.$row['data_chegada'].'</span>
                <div class="blog-slider__title">Familia '.$row['nome_familia'].'</div>
                    <div class="blog-slider__text">'.$row['descricao'].'</div>
                    <a href="http://localhost/STR/view/specialdonation_detail.php?id='.$row['id'].'" class="blog-slider__button">VER MAIS</a>
                </div>
            </div>  
        ';
    }
}
?>