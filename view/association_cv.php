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
    <link rel="stylesheet" href="../dist/output.css" />
    <!-- Bootstrap -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
<style>
    a.pt:before {background-image: url(../view/assets/flags/pt.png);}
    a.en:before {background-image: url(../view/assets/flags/gb-eng.png);}
    a.fr:before {background-image: url(../view/assets/flags/fr.png);}
  </style>
    <header class="bg-strong-gray">
        <!-- RESPONSIVE BARS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!-- LOGO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <a href="./home.php">
            <p class="tittle text-white">STR</p>
            <img class="logo" src="../view/assets/logo/logo.png" />
        </a>
        <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <ul class="nav_links bg-strong-gray" id="routesList">
            <li class="li"><a class="text-label-gray hover:text-white" href="#" id="homeLink"><i class="fa-solid fa-house"></i>Início</a></li>
            <li class="li"><a class="active" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a class="text-label-gray hover:text-white" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language">
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
    <div id="results">
        <main>
            <div class="container">
                <div class="grid second-nav">
                    <div class="column-xs-12">
                        <nav>
                            <ol class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="./volunteer.php">Voluntariado</a></li>
                                <li class="breadcrumb-item active">Cruz Vermelha Portuguesa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery" id="product-gallery">
                            <div class="product-image">
                                <img class="active" src="./assets/association/cv/cv3.png">
                            </div>
                            <ul class="image-list" id="image-list">
                                <li class="image-item"><img src="./assets/association/cv/cv3.png"></li>
                                <li class="image-item"><img src="./assets/association/cv/cv1.png"></li>
                                <li class="image-item"><img src="./assets/association/cv/cv2.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column-xs-12 column-md-5">
                        <h1 class="h1">Cruz Vermelha Portuguesa</h1>
                        <div class="stars">
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                        </div>
                        <div class="description">
                            <p>A Cruz Vermelha é uma instituição humanitária internacional sem vinculação estatal que atua na defesa de pessoas em situação de vulnerabilidade causada por conflitos armados.</p>
                            <p>Voluntários da Cruz Vermelha Portuguesa são aqueles que de forma consciente, num espírito de solidariedade e compromisso, prestam o seu contributo à população.</p>
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
                    <p>A Cruz Vermelha Portuguesa esforça-se para prevenir e aliviar o sofrimento humano, em Portugal e no mundo. Constitui missão da CVP prestar assistência humanitária e social, em especial aos mais vulneraveis, prevenindo e reparando o sofrimento e contribuindo para a defesa da vida, da saúde e da dignidade humana. [Artigo 5º, Decreto-lei nº 281/2007, 7 de Agosto.<br><br>Para o desenvolvimento da nossa actividade, mobilizamos o “Poder da Humanidade”, bem como a generosidade dos doadores e parceiros por todo o país. Na qualidade de Sociedade Nacional do Movimento Internacional da Cruz Vermelha e do Crescente Vermelho, agimos no respeito pelos princípios fundamentais da Humanidade, Imparcialidade, Neutralidade, Independência, Voluntariado, Unidade e Universalidade.<br><br>Saiba mais explorando a nossa infografia repleta de dados e números que explicam como os nossos voluntários, doadores e colaboradores ajudam as pessoas em Portugal e noutras partes do mundo.</p>
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
                    <p>A Juventude Cruz Vermelha (JCV) é o departamento juvenil da Cruz Vermelha Portuguesa. Guiados pelos Princípios Fundamentais da instituição, desenvolvemos o nosso trabalho com base no voluntariado e com o objectivo principal de promover a resiliência das crianças e jovens nas comunidades locais. Somos já mais de 2.000 voluntários jovens a trabalhar em mais de 90 locais, com mais de 250 projectos no terreno e cerca de 50.000 beneficiários directos por ano.<br><br>Na JVC encontrarás um espaço aberto à tua energia, às tuas ideias e à tua vontade de fazer mais. Assim, se tens vontade de aumentar os teus conhecimentos e competências pessoais e interesse em contribuir para a felicidade dos mais desfavorecidos, não percas tempo e junta-te a nós!</p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" aria-haspopup="true" aria-expanded="false">
                    <span id="tab-title-dimensions_tab">O que te pedimos</span>
                    <div class="circle-animation closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </button>
                <div class="panel">
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Compromisso, com os valores da instituição;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Proactividade, ter espírito crítico, tomar a iniciativa, querer fazer mais e chegar mais longe;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Envolvimento, acreditar nos objectivos e propósitos da organização, perspectivando sempre resultados positivos;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Entrega, ter a capacidade de abraçar os diversos projectos, mostrando o melhor de ti.</li>
                    </ul>
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
                    <p>O público-alvo da JCV são crianças (5-11 anos), adolescentes (12-17 anos) e jovens adultos (18-35 anos), os quais participam na organização enquanto voluntários, beneficiários ou líderes/ agentes de mudança positiva.<br><br>Desenvolvemos o nosso trabalho numa perspetiva de educação por pares, de jovens para jovens, e com recurso a metodologias de educação não formal, nas seguintes áreas de intervenção:Pode consultar aqui, o Relatório 2021 e projeções para o ano 2022 da Juventuude Cruz Vermelha. </p>
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
                                    const db = "cv";
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
                            $sql = "SELECT * FROM comentarios_cv ORDER BY id LIMIT 2";
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
                                <td><button type="button" name="btn_more" data-vid="<?php echo $video_id; ?>" id="btn_more" class="btn btn-sm comentario" style="background-color: #ff5e14a8; color:  #fff;box-shadow:none;">Mais comentários</button></td>
                            </tr>

                            <script>
                                $(document).ready(function() {
                                    $(document).on('click', '#btn_more', function() {
                                        var last_video_id = $(this).data("vid");
                                        var language = localStorage.getItem("language");
                                        $.ajax({
                                            url: "http://localhost/STR/model/association/load_data.php",
                                            method: "POST",
                                            data: {
                                                last_video_id: last_video_id,
                                                language: language,
                                                db: "comentarios_cv"
                                            },
                                            dataType: "text",
                                            success: function(data) {
                                                if (data != '') {
                                                    $('#remove_row').remove();
                                                    $('#load_data_table').append(data);
                                                } else {

                                                }
                                            }
                                        });
                                    });
                                });
                            </script>
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
    <!-- FOOTER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <footer class="footer-section bg-extra-strong-gray">
        <div class="container">
            <div class="footer-cta pt-5 pb-5 border-b-[1px] border-footer-line-gray">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt text-strong-oragen"></i>
                            <div class="cta-text text-white">
                                <h4>Encontra-nos</h4>
                                <span class="text-footer-weak-gray">R. Dr. Eduardo Neves 3A, 1050-077 Lisboa</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone text-strong-oragen"></i>
                            <div class="cta-text text-white">
                                <h4>Contacta-nos</h4>
                                <span class="text-footer-weak-gray">910 947 908</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta text-strong-oragen">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text text-white">
                                <h4>Escreve-nos</h4>
                                <span class="text-footer-weak-gray">2220100@info.com</span>
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
                                <a href="index.html"><img src="../view/assets/logo/3logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p class="text-footer-weak-gray">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec
                                    tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span class="text-white ">Segue-nos</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg text-white"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg text-white"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 class="text-white before:bg-strong-oragen">Links</h3>
                            </div>
                            <ul>
                                <li class="footer_info hover:text-strong-oragen"><a href="./home.php">Início</a></li>
                                <li class="footer_info hover:text-strong-oragen"><a href="./volunteer.php">Voluntariado</a></li>
                                <li class="footer_info hover:text-strong-oragen"><a href="#">Doação Especial</a></li>
                                <li class="footer_info hover:text-strong-oragen"><a href="#">Iniciar sessão</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 class="text-white before:bg-strong-oragen">Subscreve</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p class="text-footer-weak-gray">Não te esqueças de subscrever para não perder nenhuma novidade.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email" class="text-white bg-strong-gray">
                                    <button class="bg-strong-oragen border-strong-gray"><i class="fab fa-telegram-plane text-white"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area bg-strong-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p class="text-footer-copyright-gray">Copyright &copy; 2023</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul class="footer-menu-li text-footer-copyright-gray">
                                <li><a href="./home.php">Início</a></li>
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
    <!-- BOTÃO BACK TO TOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <a href="#" class="to-top bg-wrapper-oragen text-whitesmoke hover:bg-strong-oragen hover:text-white"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
    <!-- JavaSricpt -->
    <script type="module" src="../controller/association.js"></script>
    <script type="module" src="./lang/association/association_lang.js"></script>
    <script type="module" src="./lang/association/cv_lang.js"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
</body>

</html>