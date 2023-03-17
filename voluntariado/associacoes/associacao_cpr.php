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
                                <li class="breadcrumb-item active">Conselho Português para os Refugiados</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery" id="product-gallery">
                            <div class="product-image">
                                <img class="active" src="images/cpr/cpr1.png">
                            </div>
                            <ul class="image-list" id="image-list">
                                <li class="image-item"><img src="images/cpr/cpr1.png"></li>
                                <li class="image-item"><img src="images/cpr/cpr2.png"></li>
                                <li class="image-item"><img src="images/cpr/cpr3.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column-xs-12 column-md-5">
                        <h1>Conselho Português para os Refugiados</h1>
                        <div class="stars">
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                        <div class="description">
                            <p>Ao longo de 30 anos, o CPR prestou apoio a cerca de 14,000 requerentes e refugiados em Portugal, criou respostas especializadas para as necessidades jurídicas, sociais e de integração desta população, construiu três centros de acolhimento, sendo pioneiro no ensino da Língua Portuguesa como Língua Estrangeira e Alfabetização.</p>
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
                    <p>Defender e promover o direito de asilo em Portugal</p>
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Nos termos do Direito Internacional, Europeu e Nacional dos Direitos Humanos e dos Refugiados;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através do apoio directo e gratuito, independente e imparcial, efectuado pelos vários departamentos especificamente direccionados a requerentes e beneficiários de protecção internacional com os objectivos de garantir o acesso à protecção internacional e de capacitar esta população para a integração, respectivamente;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através do acolhimento inicial e transitório de requerentes de protecção internacional e refugiados reinstalados nos Centros de Acolhimento para Refugiados, sitos na Bobadela e São João da Talha e no Centro de Acolhimento para Crianças Refugiadas;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através de advocacy junto das entidades governamentais, de forma a cumprir a visão e os valores seguidamente descritos;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através de acções de informação, sensibilização e formação, contribuindo para uma sociedade mais informada e receptiva aos refugiados.</li>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Quem somos</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p>O CPR foi constituído em 20 de Setembro de 1991 por um conjunto de personalidades de diversos quadrantes da sociedade portuguesa. Teresa Tito de Morais foi eleita Presidente da Direção, cargo que manteve até março de 2019. É o parceiro operacional do Alto Comissariado das Nações Unidas (ACNUR) para Portugal, mantendo um Protocolo de Cooperação, desde Julho de 1993, que visa a proteção jurídica e social dos requerentes de asilo e dos refugiados. <br><br>A partir de Dezembro de 1998, data do encerramento do ACNUR em Portugal, o CPR passou a representar esta organização no nosso país.<br><br>Em 12 de Dezembro de 2000, o CPR foi distinguido com o “Prémio Direitos Humanos” da Assembleia da República. No dia 20 de Julho de 2012 foi entregue à Presidente da Direção do CPR, a Medalha de Mérito e Dedicação da Câmara Municipal de Loures. No âmbito do seu 50º aniversário, a Comissão Episcopal da Pastoral Social e Mobilidade Humana, numa cerimónia realizada na Fundação Calouste Gulbenkian, em dezembro de 2012, homenageou o CPR “pelo excelente trabalho que desenvolve no apoio aos refugiados e por ser uma instituição parceira de referência para a Obra Católica Portuguesa para as Migrações”.</p>
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
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Os Direitos Humanos;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Inclusão e empoderamento dos requerentes e beneficiários de protecção internacional;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Sociedade inclusiva e consciente das suas responsabilidades nos domínios do asilo;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Transparência, independência, rigor e integridade;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Espírito de equipa, trabalho em parceria e em rede (local e comunitária), formas essenciais de cooperação e colaboração para concretizar os objectivos.</li>
                    </ul>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">Visão</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <p>Que Portugal cumpra os compromissos internacionalmente assumidos e a legislação relativa a direitos humanos e ao direito de asilo e tenha uma cooperação internacional, assuma responsabilidade acrescida no sistema internacional e europeu de protecção, nomeadamente no âmbito da Reinstalação e de mecanismos de solidariedade. <br><br>Respeite a dignidade dos requerentes de protecção internacional, assegurando a quem seja reconhecida protecção, a possibilidade de se integrar e desenvolver. O CPR é, e continuará a ser, a organização de referência em termos da defesa e promoção do direito de asilo em Portugal.</p>
                </div>
            </div>

            <div class="faq">
                <span class="accordion lang_coment" id="tab-title-dimensions_tab">Comentários</span>
            </div>

            <div id="errorAlertlogin" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
            <div id="errorAlertlogin2" class="alert alert-danger  hide-item errorAlertlogin2" role="alert">Endereço de email ou palavra chave incorretos.</div>
            <div id="errorAlertcomentarios" class="alert alert-danger  hide-item errorAlertcomentarios" role="alert">Oops, algo de inesperado aconteceu. Por favor recarregue a página ou tente novamente mais tarde.</div>
            <div class="row d-flex justify-content-center align-items-center h-100 login" id="login">
                <div class="col col-xl-6">
                    <div class="card" style="border-radius: 1rem; background-color:#f9f9f9;">
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <div class="text-center p-3">
                                        <img clas="rounded mx-auto" src="images\user_login.png" />
                                    </div>
                                    <style>
                                        .form-control:focus {
                                            outline: none !important;
                                            border-color: #ff5e14a8;
                                            box-shadow: none;
                                        }

                                        .form-control {
                                            font-size: 20px;
                                        }
                                    </style>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre na sua conta</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Endereço de email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" name="pass" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Palavra chave</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button onclick="login();" class="btn btn-dark btn-lg btn-block btn_login" type="button">Entrar</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Esqueceu-se da palavra chave?</a>
                                    <p class="mb-5 pb-lg-2 text" style="color: #202020;">Não têm conta? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Registe-se aqui!</a></p>
                                    <a href="#!" class="small text-muted">Termos.</a>
                                    <a href="#!" class="small text-muted">Política de privacidade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="comments">
                <form action="insert_comment.php" method="GET" id="comment_form">
                    <div class="card-footer py-3 border-0" style="background-color: transparent;">
                        <div class="d-flex flex-start w-100">
                            <div class="form-outline w-100">
                                <div id="errorAlert" class="alert alert-warning hide-item errorAlert" role="alert">É necessário preencher o campo!</div>
                                <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;" name="comment"></textarea>

                                <input name="user" id="idUnico" hidden>
                                <script>
                                    document.getElementById("idUnico").value = localStorage.getItem("temp_user");
                                    const db = "cpr";
                                </script>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="button" class="btn btn-sm" onclick="send_comment()" style="background-color: #ff5e14a8; color:  #fff;box-shadow:none;">Enviar comentário</button>
                            <button type="button" class="btn btn-sm" onclick="clear_text()" style="background-color: #ff5e14a8; color: #fff;box-shadow:none;">Cancelar</button>
                        </div>
                    </div>
                </form>
                <div class="comments-app" id="comments-app" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">
                    <div class="comment" id="comment">
                        <table id="load_data_table" style="width:100%;">
                            <script>
                                document.cookie = "language=" + localStorage.getItem('language');
                            </script>
                            <?php
                            ini_set('display_errors', 0);
                            $connect = mysqli_connect("localhost", "root", "", "str");
                            $sql = "SELECT * FROM comentarios_cpr ORDER BY id LIMIT 2";
                            $result = mysqli_query($connect, $sql);
                            $video_id = '';
                            if (mysqli_connect_errno()) {
                                if ($_COOKIE["language"] == 1) {
                                    echo '<div class="alert_erro rounded alert-danger" role="alert">
                                    <h4 class="alert-heading">Erro!</h4><hr>
                                    <p class="mb-0">Oops, algo de inesperado aconteceu. Por favor recarregue a página ou tente novamente mais tarde.</p>
                                  </div><br>';
                                } else if ($_COOKIE["language"] == 2) {
                                    echo '<div class="alert_erro rounded alert-danger" role="alert">
                                    <h4 class="alert-heading">Error!</h4><hr>
                                    <p class="mb-0">Oops, something unexpected happened. Please reload the page or try again later.</p>
                                  </div><br>';
                                } else if ($_COOKIE["language"] == 3) {
                                    echo '<div class="alert_erro rounded alert-danger" role="alert">
                                    <h4 class="alert-heading">Erreur!</h4><hr>
                                    <p class="mb-0">Oops, quelque chose inattendu est produit. Veuillez recharger la page ou réessayer plus tard.</p>
                                  </div><br>';
                                }
                            } else {
                                while ($row = mysqli_fetch_array($result)) {
                                    $comentario = $row['comentario'];
                                    $email = $row['utilizador'];
                                    $nome = $row['nome'];
                                    $data = $row['data_registo'];

                                    $connect = mysqli_connect("localhost", "root", "", "str");
                                    $query1 = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                                    if ($result1 = $connect->query($query1)) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $foto_perfil = base64_encode($row1['foto_perfil']);
                                        }
                                        $result1->free();
                                    }
                                    echo "
                                                    <div class='comment-box'>
                                                        <div class='comment-avatar'>
                                                        <img alt='' src='data:image/png;base64," . $foto_perfil . "' />
                                                        </div>
                                                        <div class='comment-text'>$comentario</div>
                                                            <div class='comment-footer'>
                                                                <div class='comment-info'>
                                                                    <span class='comment-author'>
                                                                        <a href='mailto:$email'>$nome</a>
                                                                    </span>
                                                                    <span class='comment-date'>$data</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div>  
                                                    <br>
                                                ";

                                    $video_id = $row["id"];
                                }
                            }
                            ?>

                            <tr id="remove_row">
                                <td><button type="button" name="btn_more" data-vid="<?php echo $video_id; ?>" onclick="loadata()" id="btn_more" class="btn btn-sm comentario" style="background-color: #ff5e14a8; color:  #fff;box-shadow:none;">Mais comentários</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
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
    <script type="module" src="language/cpr_lang.js"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src="./script.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/react/0.13.0/react.min.js'></script>
    <script src="./script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.2/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>