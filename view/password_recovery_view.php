<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/home.scss" />

  <div id="includedCssContent"></div>
  <link href="/dist/output.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body id="body" style="display:none; overflow-x:hidden;">
  <header class="bg-strong-gray">
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars text-white"></i>
    </label>
    <div id="includedLogoContent"></div>
    <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <ul class="nav_links bg-strong-gray" id="routesList">
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial</a></li>
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
  <div class="row d-flex justify-content-center align-items-center login" id="login" style="height:100%;">
    <div class="card" style="border-radius: 1rem; background-color:#f9f9f9;margin-top:10%;">
      <div class="row">
        <div class="d-flex align-items-center">
          <div class="p-5">
            <form action="../model/update_password.php" method="GET">
              <div class="text-center p-3">
                <img clas="rounded mx-auto" src="./assets/others/user_login.png" />
              </div>
              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Alterar a palavra chave</h5>
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
              <div class="form-outline mb-4">
                <input type="password" id="pass1" name="pass1" class="form-control form-control-lg" required />
                <label class="form-label" for="form2Example17">Palavra chave</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="pass2" name="pass2" class="form-control form-control-lg" required />
                <label class="form-label" for="form2Example27">Repita a palavra chave</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn-block btn-lg uppercase" type="submit" style="background-color: #343a40;color:whitesmoke; font-weight:600; letter-spacing:2px;">Atualizar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BOTÃO BACK TO TOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <a href="#" class="to-top bg-wrapper-oragen text-whitesmoke hover:bg-strong-oragen hover:text-white"><i class="fa-sharp fa-solid fa-arrow-up"></i></i></a>
  <!-- Language -->
  <script type="module" src="./lang/common/header_lang.js"></script>
  <script type="module" src="./lang/common/language_lang.js"></script>
  <!-- JavaSricpt -->
  <script type="module" src="../controller/common/scroll_animation.js"></script>
  <script type="module" src="../controller/common/backtop.js"></script>
  <script type="module" src="../controller/common/include_components.js"></script>
  <script type="module" src="../configurations/loadcontent.js"></script>
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>