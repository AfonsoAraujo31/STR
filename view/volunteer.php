<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/volunteer.scss" />
    <div id="includedCssContent"></div>
    <!-- Bootstrap -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body style="display:none;" id="body">
    <header class="bg-strong-gray">
        <!-- RESPONSIVE BARS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
            <i class="fas fa-bars text-white"></i>
        </label>
        <div id="includedLogoContent"></div>
        <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <ul class="nav_links bg-strong-gray" id="routesList">
            <li class="li"><a class="text-label-gray hover:text-white" href="../view/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
            <li class="li"><a class="active" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a class="text-label-gray hover:text-white" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language" style="font-size:16px;">
                    <div class="language-selected text-white"><img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
                    <ul cl class="bg-white border-white">
                        <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
                        <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
                        <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
                    </ul>
                </div>
                <?php include '../model/common/load_profilephoto.php'; ?>
        </ul>
    </header>
    <section class="wrapper">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="content-box animate__animated animate__fadeIn">
            <h2 class="big-text">Os nossos associados</h2>
            <p class="content-text">Nossos associados são fundamentais para o sucesso do nosso programa de voluntariado.
                Através de sua dedicação e comprometimento, temos conseguido ajudar cada vez mais pessoas e
                causas importantes em nossa comunidade. Cada associado traz consigo habilidades e experiências únicas que
                são valiosas para nossos projetos.
            </p>
        </div>

        <section class="number-line animate__animated animate__fadeIn">
            <div class="container">
                <div class="number-container" id="number-container">
                    <div class="number-cell1" id="number-cell1">
                        <p class="number-value"><span class="num" data-val="5">0</span></p>
                        <p class="number-text">Associações</p>
                    </div>
                    <div class="number-cell2 " id="number-cell2">
                        <p class="number-value"><span class="num" data-val="357">0</span></p>
                        <p class="number-text">Voluntários</p>
                    </div>
                    <div class="number-cell3" id="number-cell3">
                        <p class="number-value"><span class="num" data-val="9">0</span></p>
                        <p class="number-text">Países</p>
                    </div>
                    <div class="number-cell4" id="number-cell4">
                        <p class="number-value"><span class="num" data-val="58">0</span></p>
                        <p class="number-text">Colaboradores</p>
                    </div>
                    <div class="number-cell5" id="number-cell5">
                        <p class="number-value"><span class="num" data-val="167">0</span></p>
                        <p class="number-text">Membros</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <ul id="myUL">
        <div class="container-search">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="placeholder" id="searchInput" type="text" placeholder="Procure uma associação">
            </div>
            <section class="featured " id="fearured">
                <ul id="results">

                </ul>
            </section>
        </div>
        </div>
        </div>
    </ul>
    <div id="includedFooterContent"></div>
    <!-- BOTÃO BACKTOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <a href="#" class="to-top bg-wrapper-oragen text-whitesmoke hover:bg-strong-oragen hover:text-white"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
    <!-- Language -->
    <script type="module" src="./lang/common/header_lang.js"></script>
    <script type="module" src="./lang/common/language_lang.js"></script>
    <script type="module" src="./lang/common/footer_lang.js"></script>
    <script type="module" src="./lang/volunteer_lang.js"></script>
    <!-- JavaSricpt -->
    <script type="module" src="../controller/volunteer.js"></script>
    <script type="module" src="../controller/common/scroll_animation.js"></script>
    <script type="module" src="../controller/common/backtop.js"></script>
    <script type="module" src="../controller/common/include_components.js"></script>
    <script type="module" src="../configurations/loadcontent.js"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>