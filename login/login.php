<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="login.scss">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
  <style>
    .form-rounded {
      border-radius: 1rem;
    }

    .form-control:focus {
      outline: none !important;
      border-color: #ff5e14a8;
      box-shadow: none;
    }

    .custom-select:focus {
      outline: none !important;
      border-color: #ff5e14a8;
      box-shadow: none;
    }

    .form-control {
      font-size: 20px;
    }

    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>

  <div id="container" class="cont">
    <div class="signin-signup">
      <!-- LOGIN -->
      <form action="" class="sign-in-form">
        <h2 class="title" id="title_login">Iniciar sessão</h2>
        <br>
        <div id="errorAlertlogin" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
        <div class="form-outline mb-4">
          <input type="email" id="input_email" class="form-control form-control-lg form-rounded" />
          <label class="form-label label" id="label_email" for="form3Example8">Endereço de email</label>
        </div>
        <div class="form-outline mb-4">
          <input type="email" id="input_password" class="form-control form-control-lg form-rounded" />
          <label class="form-label label" id="label_pass" for="form3Example8">Palavra chave</label>
        </div>
        <div class="pt-1 mb-4">
          <button class="btn btn-dark btn-lg btn-block btn_login" onclick="login();" type="button" style="margin:5px;">Entrar</button>
        </div>
        <script></script>
      </form>
      <!-- REGISTO -->
      <form action="" class="sign-up-form">
        <h2 class="title" id="title_register">Criar conta</h2>
        <br>
        <div id="errorAlertlogin1" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
        <!-- NOME/SOBRENOME -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="input_nome_reg" class="form-control form-control-lg form-rounded" />
              <label class="form-label" id="label_nome_reg" for="form3Example1m1">Nome</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="input_sobrenome_reg" class="form-control form-control-lg form-rounded" />
              <label class="form-label" id="label_sobrenome_reg" for="form3Example1n1">Sobrenome</label>
            </div>
          </div>
        </div>
        <!-- EMAIL -->
        <div class="form-outline mb-4">
          <input type="email" id="input_email_reg" class="form-control form-control-lg form-rounded" />
          <label class="form-label label" id="label_email_reg" for="form3Example8">Endereço de email</label>
        </div>
        <!-- TELEMÓVEL/DATA NASCIMENTO -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="tel" id="input_telemovel_reg" class="form-control form-control-lg form-rounded" pattern="[0-9]{9}" />
              <label class="form-label" id="label_tel_reg" for="form3Example1m1">Número de telemóvel</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="input-group mb-3">
              <select class="custom-select form-rounded" id="input_pais_reg" style="width:280px;height:50px;">
                <option selected id="label_pais_reg">Escolha...</option>
                <?php
                ini_set('display_errors', 0);
                $connect = mysqli_connect("localhost", "root", "", "str");
                $sql = "SELECT * FROM paises";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  $id = $row['id'];
                  $nome = $row['nome'];
                  $iso = $row['iso'];
                  echo "<option value='$nome ($iso)'>$nome ($iso)</option>";
                }
                ?>
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
                    <label class="form-label" id="label_pass_reg" for="form3Example4cg">Palavra chave</label>
                    <br>
                    <div id="popover-password">
                      <div class="progress">
                        <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;"></div>
                      </div>
                      <ul class="list-unstyled">
                        <li class=""><span class="low-upper-case" id="label_1"><i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; </li>
                        <li class=""><span class="one-number" id="label_2"><i class="fa fa-file-text" aria-hidden="true"></i></span> &nbsp;</li>
                        <li class=""><span class="one-special-char" id="label_3"><i class="fa fa-file-text" aria-hidden="true"></i></span> &nbsp;</li>
                        <li class=""><span class="eight-character" id="label_4"><i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="pt-1 mb-4" id="button">

        </div>
      </form>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content" id="content_login">
          <h3>Ainda não têm uma conta?</h3>
          <p>Crie a sua agora e comece a ajudar e explorar o nosso mundo!</p>
          <button class="btn transparent" id="sign-up-btn" onclick="showbutton();">Criar conta</button>
          <script>
            function showbutton() {
              setTimeout(() => {
                document.getElementById("button").innerHTML = '<button class="btn btn-dark btn-lg btn-block btn_reg" onclick="registo();" type="button" style="margin:5px;width:115px;position:relative;left:415px;top:15px;">Criar</button>';
              }, 750);
            }

            function closebutton() {
              setTimeout(() => {
                document.getElementById("button").innerHTML = '';
              }, 850);
            }
          </script>
        </div>
        <img src="" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content" id="content_reg">
          <h3>Já têm uma conta?</h3>
          <p>Entre agora na sua conta para ter acesso ao nosso mundo!</p>
          <button class="btn transparent" id="sign-in-btn" onclick="closebutton();">Entrar</button>
        </div>
        <img src="" class="image" alt="">
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