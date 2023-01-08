<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- CSS -->
    <link rel="stylesheet" href="voluntariado.scss" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital@0;1&family=IBM+Plex+Sans+Condensed:ital@0;1&family=IBM+Plex+Sans:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&family=IBM+Plex+Serif:ital@0;1&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
    <header>
        <!-- RESPONSIVE BARS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!-- LOGO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <a href="http://localhost/STR/home/home.php">
            <p class="tittle">STR</p>
            <img class="logo" src="images/logo.png" />
        </a>
        <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <ul class="nav_links">
            <li class="li"><a href="http://localhost/STR/home/home.php"><i class="fa-solid fa-house"></i> Início</a>
            </li>
            <li class="li"><a class="active" href="http://localhost/STR/voluntariado/voluntariado.php"><i
                        class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language">
                    <div class="language-selected"><img id="flags" src="images/flags/pt.png" width="35px" height="25px"
                            style="margin-right:10px;">Português</div>
                    <ul cl>
                        <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a>
                        </li>
                        <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a>
                        </li>
                        <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a>
                        </li>
                    </ul>
                </div>
            <li class="user-container"><a href="teste.html"><span><img class="user" src="images/user.png" /></span></a>
            </li>
            </li>
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
        <div class="content-box">
            <h2 class="big-text">Os nossos associados</h2>
            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <section class="number-line">
            <div class="container">
                <div class="number-container" id="number-container">
                    <div class="number-cell1" id="number-cell1">
                        <p class="number-value"><span class="num" data-val="42">000</span></p>
                        <p class="number-text">web design projects</p>
                    </div>
                    <div class="number-cell2 " id="number-cell2">
                        <p class="number-value"><span class="num" data-val="123">000</span></p>
                        <p class="number-text">happy client</p>
                    </div>
                    <div class="number-cell3" id="number-cell3">
                        <p class="number-value"><span class="num" data-val="15">000</span></p>
                        <p class="number-text">award winner</p>
                    </div>
                    <div class="number-cell4" id="number-cell4">
                        <p class="number-value"><span class="num" data-val="99">000</span></p>
                        <p class="number-text">cup of coffee</p>
                    </div>
                    <div class="number-cell5" id="number-cell5">
                        <p class="number-value"><span class="num" data-val="24">000</span></p>
                        <p class="number-text">members</p>
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
                    <!-- ASSOCIAÇÂO CRUZ VERMELHA -->
                    <li class="name" name="Cruz Vermelha">
                        <div class="row">
                            <div class="image-container">
                                <div class="small-image">
                                    <img src="img/product1/1.jpg" alt="" class="featured-image-1">
                                    <img src="img/product1/2.jpg" alt="" class="featured-image-1">
                                    <img src="img/product1/3.jpg" alt="" class="featured-image-1">
                                </div>
                                <div class="big-image">
                                    <img src="img/product1/1.jpg" alt="" class="big-image-1">
                                </div>
                            </div>
                            <div class="content">
                                <h3>Cruz Vermelha</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    A Cruz Vermelha é uma instituição humanitária internacional sem vinculação estatal
                                    que atua na defesa de pessoas em situação de vulnerabilidade causada por conflitos
                                    armados.
                            </div>
                        </div>
                    </li>
                    <!-- ASSOCIAÇÂO Associação de Apoio a Imigrantes e Refugiados em Portugal -->
                    <li class="name reveal" name="Associação de Apoio a Imigrantes e Refugiados em Portugal">
                        <div class="row">
                            <div class="image-container">
                                <div class="small-image">
                                    <img src="img/product2/1.jpg" alt="" class="featured-image-2">
                                    <img src="img/product2/2.jpg" alt="" class="featured-image-2">
                                    <img src="img/product2/3.jpg" alt="" class="featured-image-2">
                                </div>
                                <div class="big-image">
                                    <img src="img/product2/1.jpg" alt="" class="big-image-2">
                                </div>
                            </div>
                            <div class="content">
                                <h3>Associação de Apoio a Imigrantes e Refugiados em Portugal</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    A Apirp foi constituída sem fins lucrativos de acordo com a lei portuguesa, no dia
                                    18 de setembro de 2015. Os membros da Associação de apoio a Imigrantes e Refugiados
                                    em Portugal que, independentemente da sua origem, língua e género, decidiram unir-se
                                    para melhorar as condições de vida. </p>
                            </div>
                        </div>
                    </li>
                    <!-- ASSOCIAÇÂO Conselho Português para os Refugiados -->
                    <li class="name reveal" name="Conselho Português para os Refugiados">
                        <div class="row">
                            <div class="image-container">
                                <div class="small-image">
                                    <img src="img/product3/1.jpg" alt="" class="featured-image-3">
                                    <img src="img/product3/2.jpg" alt="" class="featured-image-3">
                                    <img src="img/product3/3.jpg" alt="" class="featured-image-3">
                                </div>
                                <div class="big-image">
                                    <img src="img/product3/1.jpg" alt="" class="big-image-3">
                                </div>
                            </div>
                            <div class="content">
                                <h3>Conselho Português para os Refugiados</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="text">
                                    Ao longo de 30 anos, o CPR prestou apoio a cerca de 14,000 requerentes e refugiados
                                    em Portugal, criou respostas especializadas para as necessidades jurídicas, sociais
                                    e de integração desta população, construiu três centros de acolhimento, sendo
                                    pioneiro no ensino da Língua Portuguesa como Língua Estrangeira e Alfabetização.
                                </p>

                            </div>
                        </div>
                    </li>
                    <!-- ASSOCIAÇÂO  Associação Lusofonia, Cultura e Cidadania (ALCC) -->
                    <li class="name reveal" name=" Associação Lusofonia, Cultura e Cidadania (ALCC)">
                        <div class="row">
                            <div class="image-container">
                                <div class="small-image">
                                    <img src="img/product4/1.jpg" alt="" class="featured-image-4">
                                    <img src="img/product4/2.jpg" alt="" class="featured-image-4">
                                    <img src="img/product4/3.jpg" alt="" class="featured-image-4">
                                </div>
                                <div class="big-image">
                                    <img src="img/product4/1.jpg" alt="" class="big-image-4">
                                </div>
                            </div>
                            <div class="content">
                                <h3> Associação Lusofonia, Cultura e Cidadania (ALCC)</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    A ALCC, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor
                                    com o pressuposto da defesa dos legítimos interesses da população imigrante em
                                    Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação
                                    representativa da comunidade Brasileira em Portugal, está aberta a todas as
                                    nacionalidades.
                                </p>

                            </div>
                        </div>
                    </li>
                    <!-- ASSOCIAÇÂO   Casa do Brasil de Lisboa -->
                    <li class="name reveal" name="  Casa do Brasil de Lisboa">
                        <div class="row">
                            <div class="image-container">
                                <div class="small-image">
                                    <img src="img/product4/1.jpg" alt="" class="featured-image-5">
                                    <img src="img/product4/2.jpg" alt="" class="featured-image-5">
                                    <img src="img/product4/3.jpg" alt="" class="featured-image-5">
                                </div>
                                <div class="big-image">
                                    <img src="img/product4/1.jpg" alt="" class="big-image-5">
                                </div>
                            </div>
                            <div class="content">
                                <h3> Casa do Brasil de Lisboa</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das
                                    políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de
                                    políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos
                                    projetos com ações que pretendem promover o acesso aos direitos e aos serviços de
                                    forma igualitária para as pessoas imigrantes.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
        </div>
        </div>
        <!-- FOOTER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Encontra-nos</h4>
                                    <span>R. Dr. Eduardo Neves 3A, 1050-077 Lisboa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Contacta-nos</h4>
                                    <span>910 947 908</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="far fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Escreve-nos</h4>
                                    <span>2220100@info.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="http://localhost/STR/home/home.php"><img src="images/3logo"
                                            class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                        incididuntut consec tetur adipisicing
                                        elit,Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Segue-nos</span>
                                    <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Links</h3>
                                </div>
                                <ul>
                                    <li class="footer_info"><a href="http://localhost/STR/home/home.php">Início</a></li>
                                    <li class="footer_info"><a
                                            href="http://localhost/STR/voluntariado/voluntariado.php">Voluntariado</a>
                                    </li>
                                    <li class="footer_info"><a href="#">Doação Especial</a></li>
                                    <li class="footer_info"><a href="#">Iniciar sessão</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscreve</h3>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>Não te esqueças de subscrever para não perder nenhuma novidade.</p>
                                </div>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email">
                                        <button><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2023</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                            <div class="footer-menu">
                                <ul class="footer-menu-li">
                                    <li><a href="http://localhost/STR/home/home.php">Início</a></li>
                                    <li><a href="#">Termos</a></li>
                                    <li><a href="#">Privacidade</a></li>
                                    <li><a href="#">Politica</a></li>
                                    <li><a href="#">Contactos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- BOTÃO BACKTOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
        <a href="#" class="to-top"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
        <!-- JavaSricpt -->
        <script type="module" src="voluntariado.js"></script>
        <script type="module" src="language.js"></script>
        <script src="js/script.js"></script>
        <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
        <script src="./script.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.2/dist/iconify-icon.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>

</html>