<?php 
ini_set('display_errors', 0);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg" alt="" />
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">'.$row['data_chegada'].'</span>
                <div class="blog-slider__title">Familia '.$row['nome_familia'].'</div>
                    <div class="blog-slider__text">'.$row['descricao'].'</div>
                    <a href="#" class="blog-slider__button">READ MORE</a>
                </div>
            </div>  
        ';
    }
}
?>