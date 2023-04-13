<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/specialdonation.scss" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet" />
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
    <a href="./home.php">
      <p class="tittle">STR</p>
      <img class="logo" src="./assets/logo/logo.png" />
    </a>
    <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <ul class="nav_links">
      <li class="li"><a href="./home.php"><i class="fa-solid fa-house"></i>
          Início</a></li>
      <li class="li"><a href="http://localhost/STR/voluntariado/voluntariado.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a class="active" href="http://localhost/STR/doacaoespecial/doacaoespecial.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
      <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
      <li>
        <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <div class="language">
          <div class="language-selected"><img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
          <ul cl>
            <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
            <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
            <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
          </ul>
        </div>
        <?php
        ini_set('display_errors', 0);
        if($_COOKIE["temp_user"] == ""){
          echo "<li class='user-container'><a href='http://localhost/STR/login/login.php'><span><img class='user' src='./assets/others/user.png' /></span></a></li></li>";
        }else{
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "str";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

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
          $conn->close();
        }
        ?>
    </ul>
  </header>
  <div id="cover" class="cover blur-in">
    <div class="content">
      <h1>The history or Lorem Ipsum</h1>
      <span>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
      </span>
      <span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus viverra porta. Pellentesque scelerisque eros quis dignissim semper. Nulla ut justo a sapien lobortis posuere. Maecenas scelerisque justo eleifend risus dapibus, id bibendum tellus placerat. Sed massa diam, ornare ut varius ut, auctor non arcu. Cras rutrum tortor eu diam feugiat aliquam. Suspendisse rutrum pretium pretium.
        </p>
      </span>
      <span>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      </span>
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
                <a href="index.html"><img src="images/3logo" class="img-fluid" alt="logo"></a>
              </div>
              <div class="footer-text">
                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec
                  tetur adipisicing
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
  <!-- BOTÃO BACK TO TOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <a href="#" class="to-top"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
  <!-- JavaSricpt -->
  <script type="module" src="../controller/specialdonation.js"></script>
  <script type="module" src="./lang/specialdonation_lang.js"></script>
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