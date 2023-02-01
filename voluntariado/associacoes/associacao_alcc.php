<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- CSS -->
    <link rel="stylesheet" href="associacao.scss" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital@0;1&family=IBM+Plex+Sans+Condensed:ital@0;1&family=IBM+Plex+Sans:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&family=IBM+Plex+Serif:ital@0;1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
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
            <li class="li"><a class="active" href="http://localhost/STR/voluntariado/voluntariado.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language">
                    <div class="language-selected"><img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
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
    <div id="results">
        <main>
            <div class="container">
                <div class="grid second-nav">
                    <div class="column-xs-12">
                        <nav>
                            <ol class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="http://localhost/STR/voluntariado/voluntariado.php">Voluntariado</a></li>
                                <li class="breadcrumb-item active">Associação Lusofonia, Cultura e Cidadania</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery">
                            <div class="product-image">
                                <img class="active" src="https://source.unsplash.com/W1yjvf5idqA">
                            </div>
                            <ul class="image-list">
                                <li class="image-item"><img src="https://source.unsplash.com/W1yjvf5idqA"></li>
                                <li class="image-item"><img src="https://source.unsplash.com/VgbUxvW3gS4"></li>
                                <li class="image-item"><img src="https://source.unsplash.com/5WbYFH0kf_8"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column-xs-12 column-md-5">
                        <h1>Associação Lusofonia, Cultura e Cidadania</h1>
                        <div class="stars">
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                        <div class="description">
                            <p>A ALCC, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="wrapper">
            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Missão</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel" style="">
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Ser um agente defensor eficaz dos direitos dos migrantes, transformando a vida das pessoas e mudando as atitudes públicas para melhor;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Comprometer-se com o princípio de que a migração regular e ordenada beneficia os migrantes e a sociedade;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Auxiliar no atendimento aos crescentes desafios operacionais de gerenciamento de migração;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Incentivar a integração e o desenvolvimento social e econômico por meio da migração;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Defender a dignidade humana e o bem-estar dos migrantes</li>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Quem somos?</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p>A Associação Lusofonia Cultura e Cidadania, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades.
                        A Associação iniciou suas atividades em 2000, através de um grupo de pessoas imigrantes e nacionais ,tendo sido constituída em 2007 com o objetivo de promover a integração legal e social desta população e, desde o início, busca soluções para promover a inserção do imigrante na sociedade e facilitar o seu acesso aos serviços necessários à sua sobrevivência, visando minimizar as dificuldades da população imigrante oferecendo, um conjunto de serviços gratuitos, tanto a nível individual como familiar.
                        Pretendemos ser uma organização não governamental representativa dos imigrantes em Portugal, reconhecida pelos serviços prestados, nomeadamente os mais vulneráveis.
                        Procuramos diversas formas para sensibilizar, esclarecer, divulgar, promover, integrar e transmitir conhecimentos sobre várias temáticas como Cidadania e Inclusão, Empreendedorismo, Formação, Igualdade de Oportunidades – Género e Imigração, emprego e formação entre outros.</p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Estratégia</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Melhorar a maneira como os migrantes são recebidos e tratados em Portugal;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Alcançar mais migrantes que possam aceder aos nossos serviços especializados e transformadores;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Ser instrumento na criação de um movimento popular e poderoso pela mudança;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Ser uma associação credível e confiável nas necessidades e aspirações dos migrantes em Portugal;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Ser uma organização independente, responsável, orientada por valores e sustentável.</li>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Valores</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p>Os nossos valores se assentam na humanidade e dignidade das pessoas, não em sua nacionalidade ou status de imigração. Acreditamos que empatia, cooperação e colaboração são essenciais para alcançar mudanças significativas. Somos resolutos e criativos na promoção e defesa dos direitos dos migrantes.</p>
                </div>
            </div>

            <div class="separator120"></div>
            <div class="separator20"></div>
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
                                <a href="http://localhost/STR/home/home.php"><img src="images/3logo" class="img-fluid" alt="logo"></a>
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
                                <li class="footer_info"><a href="http://localhost/STR/voluntariado/voluntariado.php">Voluntariado</a>
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
    <script src="script.js"></script>
    <!-- BOTÃO BACKTOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <a href="#" class="to-top"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
    <!-- JavaSricpt -->
    <script type="module" src="associacao.js"></script>
    <script type="module" src="language.js"></script>
    <script type="module" src="alcc.js"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src="./script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.2/dist/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>