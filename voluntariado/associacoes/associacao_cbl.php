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
                                <li class="breadcrumb-item active">Casa do Brasil de Lisboa</li>
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
                        <h1>Casa do Brasil de Lisboa</h1>
                        <div class="stars">
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                        <div class="description">
                            <p>Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="wrapper">
            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">O que é a casa</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel" style="">
                    <p>A Casa do Brasil de Lisboa (CBL) é uma associação de imigrantes sem fins lucrativos, fundada em Janeiro de 1992 por brasileiros/as residentes em Portugal e portugueses/as amigos/as do Brasil e está aberta a todas as nacionalidades.</p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">O que fazemos</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p>Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes. Além do trabalho de intervenção social e de ativismo, promovemos a valorização da multiculturalidade, da interculturalidade e a integração por meio da cultura.</p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Ativismo - CBL</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p><b>O que é?</b></p>
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>É tomar posições políticas contra as manifestações de racismo, xenofobia, desigualdades de género,perseguição de governos, políticos e seus partidos, entre outros;</li>
                        <li><i class="fa-solid fa-square squareli"></i>É ajudar a articular a unidade das associações de imigrantes e entidades pró-imigrante, nas atividades, nas tomadas de posição conjuntas, na pressão sobre as autoridades em favor de leis e práticas favoráveis;</li>
                        <li><i class="fa-solid fa-square squareli"></i>É exigir também dos países de origem o apoio do Estado aos seus cidadãos e cidadãs do país de acolhimento;</li>
                        <li><i class="fa-solid fa-square squareli"></i>É promover debates e sessões de esclarecimentos sobre direitos e deveres, diálogo constante com o governo e partidos políticos, para a elaboração e desenvolvimento de políticas públicas que promovam o acolhimento e apoio aos e as migrantes e refugiados/as;</li>
                        <li><i class="fa-solid fa-square squareli"></i>É garantir a democracia associativa, incentivar a participação de todos e todas na vida associativa, combater qualquer forma de personalismos e utilização das associações para outros fins que não seja a promoção da igualdade para as pessoas imigrantes.</li>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Cultura</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p><b>Bar da casa</b></p>
                    <p>O Bar da Casa é o espaço cultural onde a associação desenvolve e acolhe atividades de várias áreas artísticas, como concertos musicais, teatro, exposições, gastronomia, ciclos de cinema, workshops, exposições, debates e palestras. É um espaço de encontro de culturas que visa apoiar artistas a mostrarem o seu trabalho a diferentes públicos, promovendo o conhecimento e interação num circuito alternativo.
                        Ligado aos e às imigrantes e aos assuntos do Brasil, a sua missão intervém ativamente não só pela divulgação da cultura brasileira, nomeadamente os novos artistas brasileiros/as pouco conhecidos em Portugal, mas também pela criação de um espaço de ação política, reflexão e debate de ideias. O seu principal objetivo é a integração pela cultura e conhecimento numa perspectiva participativa e transformadora.
                        O Bar da Casa encontra-se aberto nos dias de eventos, consulte aqui a nossa programação.</p><br>
                    <p><b>Centro de documentação</b></p>
                    <p>O CEDOC – Centro de Documentação é um espaço vocacionado para o atendimento a estudantes, investigadores/as e jornalistas, entre outros.

A Casa do Brasil de Lisboa dispõe de um espaço de pesquisa de temas relacionados ao Brasil, às relações entre o Brasil e Portugal, à lusofonia em geral e às questões dos e das imigrantes em Portugal.</p>
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
    <script type="module" src="cbl.js"></script>
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