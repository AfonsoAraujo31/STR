<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CSS -->
  <link rel="stylesheet" href="login.scss" />
  <link rel="stylesheet" href="style copy.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital@0;1&family=IBM+Plex+Sans+Condensed:ital@0;1&family=IBM+Plex+Sans:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&family=IBM+Plex+Serif:ital@0;1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Muli:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
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
      <li class="li"><a href="http://localhost/STR/home/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a href="http://localhost/STR/voluntariado/voluntariado.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
      <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
      <li>
        <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <div class="language">
          <div class="language-selected"><img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
          <ul cl>
            <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
            <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
            <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
          </ul>
        </div>
      <li class="user-container"><a href="http://localhost/STR/login/login.php"><span><img class="user" src="images/user.png" /></span></a></li>
      </li>
    </ul>
  </header>
  <!-- LOGIN/REGISTO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
  <div id="container" class="container">
    <div class="signin-signup">
      <form action="" class="sign-in-form">
        <h2 class="title">Entrar</h2>
        <!--begin::Main wrapper-->
        <div class="fv-row" data-kt-password-meter="true">
          <!--begin::Wrapper-->
          <div class="mb-1">

            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
              <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />

              <!--begin::Visibility toggle-->

              <!--end::Visibility toggle-->
            </div>
            <!--end::Input wrapper-->

            <!--begin::Highlight meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Highlight meter-->
          </div>
          <!--end::Wrapper-->

          <!--begin::Hint-->
          <div class="text-muted">
            Use 8 or more characters with a mix of letters, numbers & symbols.
          </div>
          <!--end::Hint-->
        </div>
        <!--end::Main wrapper-->
      </form>
      <form action="" class="sign-up-form">
        <h2 class="title">Regista-te no STR</h2>
        <br>
        <!-- NOME/SOBRENOME -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="form3Example1m1" class="form-control form-control-lg form-rounded" />
              <label class="form-label" for="form3Example1m1">Nome</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="form3Example1n1" class="form-control form-control-lg form-rounded" />
              <label class="form-label" for="form3Example1n1">Sobrenome</label>
            </div>
          </div>
        </div>
        <!-- EMAIL -->
        <div class="form-outline mb-4">
          <input type="email" id="form3Example8" class="form-control form-control-lg form-rounded" />
          <label class="form-label" id="label_email" for="form3Example8" >Endereço de email</label>
        </div>
        <!-- TELEMÓVEL/DATA NASCIMENTO -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="tel" id="form3Example1m1" class="form-control form-control-lg form-rounded" pattern="[0-9]{9}" />
              <label class="form-label" for="form3Example1m1">Número de telemóvel</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="input-group mb-3">
              <select class="custom-select form-rounded" id="inputGroupSelect01" style="width:280px;height:50px;">
                <option selected>Escolha...</option>
                <option value="1">Portugal</option>
                <option value="2">Espanha</option>
                <option value="3">França</option>
              </select>
            </div>
          </div>
        </div>
        <!-- PALAVRA CHAVE -->
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <form class="form-horizontal mar-top-bot-50" id="validateForm" action="signup.html">
              <fieldset>
                <!-- Password input-->
                <div class="form-group">
                  <div class="col-md-12">
                    <input style="width:600px;" id="password" name="password" type="password" placeholder="" class="form-control input-md form-rounded" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true">
                    <label class="form-label" for="form3Example4cg">Palavra chave</label>
                    <br>
                    <div id="popover-password">
                      <div class="progress">
                        <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;"></div>
                      </div>
                      <ul class="list-unstyled">
                        <li class=""><span class="low-upper-case"><i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Maiúsculas e Minúsculas</li>
                        <li class=""><span class="one-number"><i class="fa fa-file-text" aria-hidden="true"></i></span> &nbsp;Números (0-9)</li>
                        <li class=""><span class="one-special-char"><i class="fa fa-file-text" aria-hidden="true"></i></span> &nbsp;Character especial</li>
                        <li class=""><span class="eight-character"><i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Pelo menos 8 character</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>



      </form>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>You don't have an account?</h3>
          <p>Create your account right now to follow people and like publications</p>
          <button class="btn transparent" id="sign-up-btn">Register</button>
        </div>
        <img src="img/log.svg" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>Already have an account?</h3>
          <p>Login to see your notifications and post your favorite photos</p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>
  <!-- JavaSricpt -->
  <script type="module" src="login.js"></script>
  <script type="module" src="language.js"></script>
  <script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script>
  <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.2/dist/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src="./script.js"></script>
</body>

</html>