<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/home.scss" />
  <link rel="stylesheet" href="./css/common/header.css" />
  <link rel="stylesheet" href="./css/common/language.css" />
  <link rel="stylesheet" href="./css/common/backTop.css" />
  <link rel="stylesheet" href="./css/common/footer.css" />
  <link rel="stylesheet" href="./css/common/scrollbar.css" />
  <link rel="stylesheet" href="../dist/output.css" />
  <!-- Bootstrap -->
  <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
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
      <li class="li"><a class="active hover:text-white" href="#" id="homeLink"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
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
        <?php include '../model/common/load_profilephoto.php';?>
    </ul>
  </header>
  <!-- SLIDESHOW *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
  <div class="slideshow_position">
    <section class="slideshow">
      <div class="slideshow-inner">
        <div class="slides">
          <div class="slide is-active ">
            <div class="slide-content">
              <div class="caption">
                <div class="title_slide1 text-white">
                  Bem vindo!
                </div>
                <div class="text_slide1 text-white">
                  <p>Descrição</p>
                </div>
                <a href="#about" class="btn">
                  <span class="btn-inner_slide1 text-white hover:text-black">Ver mais</span>
                </a>
              </div>
            </div>
            <div class="image-container">
              <img src="../view/assets/slideshow/image_slide1.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="slide">
            <div class="slide-content">
              <div class="caption">
                <div class="title_slide2 text-white">Ajuda os mais necessitados</div>
                <div class="text_slide2 text-white">
                  <p>Descrição</p>
                </div>
                <a href="#" class="btn">
                  <span class="btn-inner_slide2 text-white hover:text-black">Ver mais</span>
                </a>
              </div>
            </div>
            <div class="image-container">
              <img src="../view/assets/slideshow/image_slide2.png" alt="" class="image" />
            </div>
          </div>
          <div class="slide">
            <div class="slide-content">
              <div class="caption">
                <div class="title_slide3 text-white">Inscreve-te!</div>
                <div class="text_slide3 text-white">
                  <p>Descrição</p>
                </div>
                <a href="#" class="btn">
                  <span class="btn-inner_slide3 text-white hover:text-black">Ver mais</span>
                </a>
              </div>
            </div>
            <div class="image-container">
              <img src="../view/assets/slideshow/image_slide3.png" alt="" class="image" />
            </div>
          </div>
          <div class="slide">
            <div class="slide-content">
              <div class="caption">
                <div class="title_slide4 text-white">Não sei</div>
                <div class="text_slide4 text-white">
                  <p>Descrição</p>
                </div>
                <a href="#" class="btn">
                  <span class="btn-inner_slide4 text-white hover:text-black">Ver mais</span>
                </a>
              </div>
            </div>
            <div class="image-container">
              <img src="../view/assets/slideshow/image_slide4.png" alt="" class="image" />
            </div>
          </div>
        </div>
        <div class="arrows">
          <div class="arrow prev">
            <span class="svg svg-arrow-left">
              <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
              </svg>
              <span class="alt sr-only"></span>
            </span>
          </div>
          <div class="arrow next">
            <span class="svg svg-arrow-right">
              <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
              </svg>
              <span class="alt sr-only"></span>
            </span>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- CARDS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <section class="services" id="services">
    <div class="content">
      <div class="card">
        <div class="service-icon text-wrapper-oragen">
          <i class="fa-solid fa-user"></i></i>
        </div>
        <div class="info reveal">
          <h3 class="tittle1_card text-strong-oragen"><b>Inscreve-te</b></h3>
          <p class="text1_card">É rápido e fácil de aceder.<br>Basta clicares em Iniciar sessão no topo da página e
            procederes ao registo no nosso website.</p>
        </div>
      </div>
      <div class="card">
        <div class="service-icon text-wrapper-oragen">
          <i class="fa-solid fa-file-lines"></i>
        </div>
        <div class="info reveal">
          <h3 class="tittle2_card text-strong-oragen">Candidata-te</h3>
          <p class="text2_card">Agora que fizeste o registo está apto para te candidatares. Para isso deves ir ao teu
            perfil e encontrarás a secção da Doação Especial.</p>
        </div>
      </div>
      <div class="card">
        <div class="service-icon text-wrapper-oragen">
          <i class="fa-solid fa-handshake-angle"></i>
        </div>
        <div class="info reveal">
          <h3 class="tittle3_card text-strong-oragen">Ajuda</h3>
          <p class="text3_card">Foste aceite? Perfeito!<br>Agora podes começar a ajudar quem mais precisa. Obrigado pela
            tua contribuição!</p>
        </div>
      </div>
    </div>
  </section>
  <div class="about-section reveal bg-white">
    <div class="inner-container reveal bg-white">
      <h1 class="about_tittle">Sobre nós</h1>
      <p class="text text-weak-gray">
        O STR é um website de Voluntariado Social abrangendo unicamente os Refugiados. Resringe-se a este tema, por ser
        um assunto da atualidade, e de extrema relevância.
        Para colmatar este problema o STR disponibliza ferramentas onde particulares e empresas podem candidatar-se no
        auxílio a famílias refugiadas, permitindo não ser
        só informativo, mas também interativo.
      </p>
      <div class="skills">
        <span>Voluntariado</span>
        <span>Interativo & Informativo</span>
        <span>Refugiados</span>
      </div>
    </div>
  </div>
  <div class="about-section-2 reveal bg-white">
    <div class="reveal">
      <h2 class="content-title text-black">Quantos refugiados existem no mundo?</h2>
      <p class="content-text text-weak-gray">Pelo menos 89,3 milhões de pessoas em todo o mundo foram forçadas a deixar suas casas.
        Entre elas estão quase 27,1 milhões de refugiados, cerca de metade dos quais têm menos de 18 anos, pessoas a
        quem foi negada a nacionalidade e
        que não têm acesso a direitos básicos como educação, saúde, emprego e liberdade de movimento. <br><br>O gráfico
        ao lado mostra que 65% saíram de apenas cinco países.
        Os números não somam 100 por cento devido a arredondamentos, este também exclui refugiados palestinos sob
        mandato da UNRWA. Este é o número de refugiados venezuelanos
        e venezuelanos deslocados no exterior.
      </p>
    </div>
    <div class="inner-container-2 bg-white">
      <section class="bar-chart">
        <div class="chart-row '">
          <p class="chart-caption">Síria</p>
          <div class="bar-wrap bg-bar-wrap hover:bg-bar-wrap-hover">
            <span>27%</span>
            <div class="chart-bar" data-bar-value="60.92%"></div>
          </div>
        </div>
        <div class="chart-row ">
          <p class="chart-caption ">Venezuela</p>
          <div class="bar-wrap bg-bar-wrap hover:bg-bar-wrap-hover">
            <span>18%</span>
            <div class="chart-bar" data-bar-value="44.83%"></div>
          </div>
        </div>
        <div class="chart-row ">
          <p class="chart-caption">Afeganistão</p>
          <div class="bar-wrap bg-bar-wrap hover:bg-bar-wrap-hover">
            <span>11%</span>
            <div class="chart-bar bg-bar-wrap" data-bar-value="27.59%"></div>
          </div>
        </div>
        <div class="chart-row ">
          <p class="chart-caption">Sudão do Sul</p>
          <div class="bar-wrap bg-bar-wrap hover:bg-bar-wrap-hover">
            <span>9%</span>
            <div class="chart-bar bg-bar-wrap" data-bar-value="16.09%"></div>
          </div>
        </div>
        <div class="chart-row ">
          <p class="chart-caption">Outros</p>
          <div class="bar-wrap bg-bar-wrap hover:bg-bar-wrap-hover">
            <span>36%</span>
            <div class="chart-bar" data-bar-value="50.64%"> </div>
          </div>
        </div>
      </section>
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
                <a href="index.html"><img src="../view/assets/3logo" class="img-fluid" alt="logo"></a>
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
                <li><a href="./home.php" >Início</a></li>
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
  <!-- BOTÃO BACK TO TOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <a href="#" class="to-top bg-wrapper-oragen text-whitesmoke hover:bg-strong-oragen hover:text-white"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
  <!-- JavaSricpt -->
  <script type="module" src="../controller/home.js"></script>
  <script type="module" src="./lang/home_lang.js"></script>
  <script src="../configurations/router.ts"></script>
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>