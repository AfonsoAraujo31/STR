<?php 
ini_set('display_errors', 1);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $foto_familia = base64_encode($row['foto_familia']);
        $sql1 = "SELECT email, doador_especial FROM utilizadores WHERE email='" . $_COOKIE['current_user'] . "'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
                if ($row1["doador_especial"]) {
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
                }else if(!$row1["doador_especial"]){
                    $sql = "SELECT * FROM familias_doacaoespecial ORDER BY id ASC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                    <img src="data:image/*;base64,'.$foto_familia.'">
                                </div>
                                <div class="blog-slider__content">
                                    <span class="blog-slider__code">'.$row['data_chegada'].'</span>
                                    <div class="blog-slider__title">Familia '.$row['nome_familia'].'</div>
                                        <div class="blog-slider__text">'.$row['descricao'].'</div>
                                        <a class="blog-slider__button text-white" tooltip="Não é doador especial">VER MAIS</a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                }
            }
        }
    }
}
?>