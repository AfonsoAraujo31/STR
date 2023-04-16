<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- CSS -->
   <link rel="stylesheet" href="./css/association.scss" />
    <link rel="stylesheet" href="./css/common/header.css" />
    <link rel="stylesheet" href="./css/common/language.css" />
    <link rel="stylesheet" href="./css/common/backTop.css" />
    <link rel="stylesheet" href="./css/common/footer.css" />
    <link rel="stylesheet" href="./css/common/scrollbar.css" />
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
        <a href="./home.php">
            <p class="tittle">STR</p>
            <img class="logo" src="./assets/logo/logo.png" />
        </a>
        <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <ul class="nav_links">
            <li class="li"><a href="./home.php"><i class="fa-solid fa-house"></i> Início</a>
            </li>
            <li class="li"><a class="active" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language">
                    <div class="language-selected"><img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
                    <ul cl>
                        <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a>
                        </li>
                        <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a>
                        </li>
                        <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a>
                        </li>
                    </ul>
                </div>
                <?php
                ini_set('display_errors', 0);
                if($_COOKIE["temp_user"] == ""){
                    echo "<li class='user-container'><a href='http://localhost/STR/login/login.php'><span><img class='user' src='./assets/others/user.png' /></span></a></li></li>";
                }else{
                    require_once '../configurations/dbconnection.php';
                    $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_COOKIE['temp_user'] . "'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["email"] == $_COOKIE['temp_user']) {
                                $foto_perfil = base64_encode($row['foto_perfil']);
                                echo "<li class='user-container'><a href='http://localhost/STR/login/login.php'><span><img alt='' style='width:50px;border-radius: 50%; position:relative;top:0.5px;  ' src='data:image/*;base64," . $foto_perfil . "' /></span></a></li></li>";
                            }
                        }
                    }
                }
                ?>
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
                                <li class="breadcrumb-item"><a href="./volunteer.php">Voluntariado</a></li>
                                <li class="breadcrumb-item active">Casa do Brasil de Lisboa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery" id="product-gallery">
                            <div class="product-image">
                                <img class="active" src="./assets/association/cbl/cbl1.png">
                            </div>
                            <ul class="image-list" id="image-list">
                                <li class="image-item"><img src="./assets/association/cbl/cbl1.png"></li>
                                <li class="image-item"><img src="./assets/association/cbl/cbl2.png"></li>
                                <li class="image-item"><img src="./assets/association/cbl/cbl3.png"></li>
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
                                        <img clas="rounded mx-auto" src="./assets/others/user_login.png" />
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
                                    const db = "cbl";
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
                            require_once '../configurations/dbconnection.php';
                            $sql = "SELECT * FROM comentarios_cbl ORDER BY id LIMIT 2";
                            $result = mysqli_query($conn, $sql);
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
                                    $query1 = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                                    if ($result1 = $conn->query($query1)) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $foto_perfil = base64_encode($row1['foto_perfil']);
                                        }
                                        $result1->free();
                                    }
                                    echo " <br>
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
    <script src="../controller/association/script.js"></script>
    <!-- BOTÃO BACKTOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <a href="#" class="to-top"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
    <!-- JavaSricpt -->
    <script type="module" src="../controller/association.js"></script>
    <script type="module" src="./lang/association/association_lang.js"></script>
    <script type="module" src="./lang/association/cbl.js"></script>
   <!-- Font Awesome Kit -->
   <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
</body>

</html>