<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/association.scss" />
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <div id="includedCssContent"></div>
    <!-- Bootstrap -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
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
            <!--<li class="li"><a class="text-label-gray hover:text-white" href="../view/gallery"><i class="fa-solid fa-circle-dollar-to-slot"></i> Galeria</a></li>-->
            <li class="li"><a class="text-label-gray hover:text-white login" href="../view/login.php"><i class="fa-solid fa-user"></i> Conta</a></li>
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
                                <li class="breadcrumb-item active">Conselho Português para os Refugiados</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid product">
                    <div class="column-xs-12 column-md-7">
                        <div class="product-gallery" id="product-gallery">
                            <div class="product-image">
                                <img class="active" src="./assets/association/cpr/cpr1.png">
                            </div>
                            <ul class="image-list" id="image-list">
                                <li class="image-item"><img src="./assets/association/cpr/cpr1.png"></li>
                                <li class="image-item"><img src="./assets/association/cpr/cpr2.png"></li>
                                <li class="image-item"><img src="./assets/association/cpr/cpr3.png"></li>
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
                        <div class="description text-justify">
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
                <div class="panel">
                    <p>Defender e promover o direito de asilo em Portugal</p>
                    <ul>
                        <li><i class="fa-solid fa-square squareli"></i>Nos termos do Direito Internacional, Europeu e Nacional dos Direitos Humanos e dos Refugiados;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através do apoio direto e gratuito, independente e imparcial, efetuado pelos vários departamentos especificamente direcionados a requerentes e beneficiários de proteção internacional com os objetivos de garantir o acesso à proteção internacional e de capacitar esta população para a integração, respetivamente;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através do acolhimento inicial e transitório de requerentes de proteção internacional e refugiados reinstalados nos Centros de Acolhimento para Refugiados, sitos na Bobadela e São João da Talha e no Centro de Acolhimento para Crianças Refugiadas;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através de advocacy junto das entidades governamentais, de forma a cumprir a visão e os valores seguidamente descritos;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Através de ações de informação, sensibilização e formação, contribuindo para uma sociedade mais informada e recetiva aos refugiados.</li>
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
                    <p>O CPR foi constituído em 20 de setembro de 1991 por um conjunto de personalidades de diversos quadrantes da sociedade portuguesa. Teresa Tito de Morais foi eleita Presidente da Direção, cargo que manteve até março de 2019. É o parceiro operacional do Alto Comissariado das Nações Unidas (ACNUR) para Portugal, mantendo um Protocolo de Cooperação, desde julho de 1993, que visa a proteção jurídica e social dos requerentes de asilo e dos refugiados. <br><br>A partir de dezembro de 1998, data do encerramento do ACNUR em Portugal, o CPR passou a representar esta organização no nosso país.<br><br>Em 12 de dezembro de 2000, o CPR foi distinguido com o “Prémio Direitos Humanos” da Assembleia da República. No dia 20 de julho de 2012 foi entregue à Presidente da Direção do CPR, a Medalha de Mérito e Dedicação da Câmara Municipal de Loures. No âmbito do seu 50.º aniversário, a Comissão Episcopal da Pastoral Social e Mobilidade Humana, numa cerimónia realizada na Fundação Calouste Gulbenkian, em dezembro de 2012, homenageou o CPR “pelo excelente trabalho que desenvolve no apoio aos refugiados e por ser uma instituição parceira de referência para a Obra Católica Portuguesa para as Migrações”.</p>
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
                        <li><i class="fa-solid fa-square squareli"></i>Inclusão e ponderada dos requerentes e beneficiários de proteção internacional;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Sociedade inclusiva e consciente das suas responsabilidades nos domínios do asilo;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Transparência, independência, rigor e integridade;</li>
                        <li><i class="fa-solid fa-square squareli"></i>Espírito de equipa, trabalho em parceria e em rede (local e comunitária), formas essenciais de cooperação e colaboração para concretizar os objetivos.</li>
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
                    <p>Que Portugal cumpra os compromissos internacionalmente assumidos e a legislação relativa a direitos humanos e ao direito de asilo e tenha uma cooperação internacional, assuma responsabilidade acrescida no sistema internacional e europeu de proteção, nomeadamente no âmbito da Reinstalação e de mecanismos de solidariedade. <br><br>Respeite a dignidade dos requerentes de proteção internacional, assegurando a quem seja reconhecida proteção, a possibilidade de se integrar e desenvolver. O CPR é, e continuará a ser, a organização de referência em termos da defesa e promoção do direito de asilo em Portugal.</p>
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

                                    <a class="small text-muted button" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Esqueceu-se da palavra chave?</a>
                                    <p class="mb-5 pb-lg-2 text" style="color: #202020;">Não têm conta? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Registe-se aqui!</a></p>
                                    <a href="#!" class="small text-muted">Termos.</a>
                                    <a href="#!" class="small text-muted">Política de privacidade</a>
                                    <!-- MODAL -->
                                    <div class="modal fade scrollable-content" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div id="errorAlertModal" class="alert alert-warning hide-item" role="alert">É necessário preencher o(s) campo(s)!</div>
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Recuperar conta</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" id="nome" class="form-control" />
                                                                    <label class="form-label" for="form3Example1">Nome</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" id="sobrenome" class="form-control" />
                                                                    <label class="form-label" for="form3Example2">Sobrenome</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="email" class="form-control" />
                                                            <label class="form-label" for="form3Example3">Endereço de email</label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                    <button type="button" class="btn btn-primary" onclick="enviarEmailRecuperacao();">Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function enviarEmailRecuperacao() {
                                            var email = document.getElementById('email').value;
                                            var nome = document.getElementById('nome').value;
                                            var sobrenome = document.getElementById('sobrenome').value;
                                            if (document.getElementById('email').value == "" || document.getElementById('nome').value == "" || document.getElementById('sobrenome').value == "") {
                                                $("#errorAlertModal").show("medium");
                                                setTimeout(function() {
                                                    $("#errorAlertModal").hide("medium");
                                                }, 4000);
                                            } else {
                                                setTimeout(function() {
                                                    location.href = "http://localhost/STR/model/password_recovery.php?email=" + email + "&nome=" + nome + "&sobrenome=" + sobrenome;
                                                }, 300);
                                            }
                                        }
                                    </script>
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
                            require '../configurations/dbconnection.php';
                            $sql = "SELECT * FROM comentarios_cpr ORDER BY id LIMIT 2";
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
    <div id="includedFooterContent"></div>
    <script src="../controller/association/script.js"></script>
    <!-- BOTÃO BACKTOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <a href="#" class="to-top bg-wrapper-oragen text-whitesmoke hover:bg-strong-oragen hover:text-white"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
    <!-- Language -->
    <script type="module" src="./lang/common/header_lang.js"></script>
    <script type="module" src="./lang/common/language_lang.js"></script>
    <script type="module" src="./lang/common/footer_lang.js"></script>
    <script type="module" src="./lang/association/cpr_lang.js"></script>
    <!-- JavaSricpt -->
    <script src="../controller/association/cookie.js"></script>
    <script type="module" src="../controller/association.js"></script>
    <script type="module" src="../controller/common/scroll_animation.js"></script>
    <script type="module" src="../controller/common/backtop.js"></script>
    <script type="module" src="../controller/common/include_components.js"></script>
    <script type="module" src="../configurations/loadcontent.js"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
</body>

</html>