<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/specialdonation.scss" />
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
      <li class="li"><a class="text-label-gray hover:text-white" href="#" id="homeLink"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a class="active" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
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
  <div id="cover" class="cover blur-in">
    <main class="page-content">
      <img src="./assets/others/image.png" class="presentation-image" />
      <div class="column">
        <div class="wrapper">
          <div class="title uppercase">O que é a Doação Especial ?</div>
          <p>Na Ajuda em Ação promovemos a <b>transparência e a prestação</b> de contas perante todos os nossos atores, doadores públicos e privados, pessoas e organizações com e para as quais trabalhamos e a sociedade em geral.</p>
          <p>A transparência é o princípio básico que rege a nossa gestão interna,<b> assegurando boas práticas e fomentando a eficiência e eficácia para alcançar os nossos objetivos.</b></p>
          <p>Para isso, utilizamos diferentes instrumentos de acompanhamento e <b> avaliação, externos e internos,</b> com o objetivo de reforçar o compromisso com os nossos grupos de interesse e identificar áreas que necessitam de ser melhoradas,<b> ao nível da nossa gestão interna</b>, como parte de um processo de melhoria contínua.</p>
          <p>Somos também membro honorário da<b> World Compliance Association</b>, com o objetivo de impulsionar e dar visibilidade ao nosso esforço de integração no nosso modelo de gestão de mecanismos para monitorizar os riscos a que estamos expostos, de forma a garantir a máxima qualidade da nossa intervenção.</p>
        </div>
      </div>
      <section class="services" id="services">
        <div class="content">
          <div class="card">

          </div>
          <div class="card">
              
          </div>
          <div class="card">

          </div>
        </div>
      </section>
      <!-- include '../model/specialdonation/load_familys.php'; -->
    </main>
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
  <script type="module" src="../controller/specialdonation.js"></script>
  <script type="module" src="./lang/specialdonation_lang.js"></script>
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>