<?php
ini_set('display_errors', 1);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT * FROM familias_doacaoespecial where id= '".$_GET['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $foto_familia = base64_encode($row['foto_familia']);
        /*
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
            */
        echo '
        <main>
            <div class="container">
                <div class="grid second-nav">
                    <div class="column-xs-12">
                        <nav>
                            <ol class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="../view/specialdonation.php">Doação Especial</a></li>
                                <li class="breadcrumb-item active">nao sei o que escrever</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery" id="product-gallery">
                            <div class="product-image">
                                <img src="data:image/*;base64,'.$foto_familia.'">
                            </div>
                        </div>
                    </div>
                    <div class="column-xs-12 column-md-5">
                        <h1 class="h1">Cruz Vermelha Portuguesa</h1>
                        <div class="description">
                            <p>A Cruz Vermelha é uma instituição humanitária internacional sem vinculação estatal que atua na defesa de pessoas em situação de vulnerabilidade causada por conflitos armados.</p>
                            <p>Voluntários da Cruz Vermelha Portuguesa são aqueles que de forma consciente, num espírito de solidariedade e compromisso, prestam o seu contributo à população.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        ';
    }
}
?>