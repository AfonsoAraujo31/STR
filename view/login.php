<?php
ini_set('display_errors', 0);
require_once '../configurations/dbconnection.php';
$sql = "SELECT dados_login FROM preferencias WHERE email = '" . $_COOKIE['current_user'] . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["dados_login"] == "Sim") {
      echo "<script>location.href='http://localhost/STR/view/user_page.php?email=" . $_COOKIE['current_user'] . "';</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STR</title>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="./css/login.scss">
  <link rel="stylesheet" href="./css/common/header.css" />
  <link rel="stylesheet" href="./css/common/language.css" />
  <link rel="stylesheet" href="./css/common/scrollbar.css" />
  <link rel="stylesheet" href="../dist/output.css" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <style>
    a.pt:before {
      background-image: url(../view/assets/flags/pt.png);
    }

    a.en:before {
      background-image: url(../view/assets/flags/gb-eng.png);
    }

    a.fr:before {
      background-image: url(../view/assets/flags/fr.png);
    }
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
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/home   .php" id="homeLink"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
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
  <!-- LOGIN/REGISTO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
  <style>
    .form-rounded {
      border-radius: 5px;
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

    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
  <div id="container" class="cont">
    <div class="signin-signup">
      <!-- LOGIN -->
      <form action="" class="sign-in-form">
        <div id="errorAlertlogin" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
        <div id="errorAlertlogin2" class="alert alert-danger hide-item errorAlertlogin2" role="alert">Endereço de email ou palavra chave incorretos.</div>
        <div class="container">
          <h2 id="title_login">Iniciar sessão em STR</h2><br>
          <div class="row">
            <div class="col-md-12 mb-4">
              <input type="text" id="input_email" placeholder="Endereço de email" class="form-control form-control-lg form-rounded" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-4">
              <input type="password" id="input_password" placeholder="Palavra chave" class="form-control form-control-lg form-rounded" />
            </div>
          </div>
          <button class="btn btn-dark btn-lg btn-block btn_login" onclick="login();" type="button">Entrar</button>
        </div>
      </form>
      <!-- REGISTO -->
      <form action="" class="sign-up-form">
        <div id="errorAlertlogin1" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
        <div id="errorAlertlogin3" class="alert alert-danger hide-item errorAlertlogin2" role="alert">Endereço de email ou palavra chave incorretos.</div>
        <div class="container">
          <h2 id="title_register">Criar conta no STR</h2><br>
          <div class="row">
            <!-- NOME/SOBRENOME -->
            <div class="col-md-6 mb-4">
              <input type="text" id="input_nome_reg" placeholder="Nome" class="form-control form-control-lg form-rounded" />
            </div>
            <div class="col-md-6 mb-4">
              <input type="text" id="input_sobrenome_reg" placeholder="Sobrenome" class="form-control form-control-lg form-rounded" />
            </div>
          </div>
          <div class="row">
            <!-- EMAIL -->
            <div class="col-md-12 mb-4">
              <input type="email" id="input_email_reg" placeholder="Endereço de email" class="form-control form-control-lg form-rounded" />
            </div>
          </div>
          <div class="row">
            <!-- TELEMÓVEL/DATA NASCIMENTO -->
            <div class="col-md-6 mb-4">
              <input type="number" id="input_telemovel_reg" placeholder="Telemóvel" class="form-control form-control-lg form-rounded" pattern="[0-9]{9}" />
            </div>
            <div class="col-md-6 mb-4">
              <select class="custom-select form-rounded" id="input_pais_reg" style="height:50px;">
                <option selected id="label_pais_reg">Nacionalidade</option>
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
          <div class="row">
            <!-- PALAVRA CHAVE -->
            <div class="col-md-12 mb-4">
              <input id="password" name="password" type="password" placeholder="Palavra chave" class="form-control form-control-lg form-rounded" />
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
          <div class="pt-1 mb-4" id="button"></div>
        </div>
      </form>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content" id="content_login">
          <h3>Ainda não têm uma conta?</h3>
          <p>Crie a sua agora e comece a ajudar e explorar o nosso mundo!</p>
          <button class="btn transparent form-control" id="sign-up-btn" onclick="showbutton();">Criar conta</button>
        </div>
      </div>

      <div class="panel right-panel">
        <div class="content" id="content_reg">
          <h3>Já têm uma conta?</h3>
          <p>Entre agora na sua conta para ter acesso ao nosso mundo!</p>
          <button class="btn transparent form-control" id="sign-in-btn" onclick="closebutton();">Entrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaSricpt -->
  <script>
    function login() {
      if (document.getElementById("input_email").value.length == 0 || document.getElementById("input_password").value.length == 0) {
        $("#errorAlertlogin").show("medium");
        setTimeout(function() {
          $("#errorAlertlogin").hide("medium");
        }, 4000);
      } else {
        localStorage.setItem("sing_in", 1);
        localStorage.setItem("temp_user", document.getElementById("input_email").value);
        document.cookie = "current_user=" + document.getElementById("input_email").value;
        document.cookie = "temp_user=" + document.getElementById("input_email").value;
        const variavel1 = document.getElementById("input_email").value;
        const variavel2 = document.getElementById("input_password").value;
        window.location.href = "http://localhost/STR/model/login/login.php?email=" + variavel1 + "&pass=" + variavel2;
      }
    }

    function registo() {
      if (document.getElementById("input_nome_reg").value.length == 0 || document.getElementById("input_sobrenome_reg").value.length == 0 || document.getElementById("input_email_reg").value.length == 0 || document.getElementById("input_telemovel_reg").value.length == 0 || document.getElementById("input_pais_reg").value.length == 0 || document.getElementById("password").value.length == 0) {
        $("#errorAlertlogin1").show("medium");
        setTimeout(function() {
          $("#errorAlertlogin1").hide("medium");
        }, 4000);
      } else {
        localStorage.setItem("sing_in", 1);
        localStorage.setItem("temp_user", document.getElementById("input_email").value);
        document.cookie = "current_user=" + document.getElementById("input_email").value;
        const variavel1 = document.getElementById("input_nome_reg").value;
        const variavel2 = document.getElementById("input_sobrenome_reg").value;
        const variavel3 = document.getElementById("input_email_reg").value;
        const variavel4 = document.getElementById("input_telemovel_reg").value;
        const variavel5 = document.getElementById("input_pais_reg").value;
        const variavel6 = document.getElementById("password").value;
        window.location.href = "http://localhost/STR/model/login/register.php?nome=" + variavel1 + "&sobrenome=" + variavel2 + "&email=" + variavel3 + "&telemovel=" + variavel4 + "&pais=" + variavel5 + "&pass=" + variavel6;
      }
    }

    function showbutton() {
      setTimeout(() => {
        document.getElementById("button").innerHTML = '<button class="btn btn-dark btn-lg btn-block btn_reg" onclick="registo();" type="button">Criar</button>';
      }, 750);
    }

    function closebutton() {
      setTimeout(() => {
        document.getElementById("button").innerHTML = '';
      }, 850);
    }

    addEventListener("DOMContentLoaded", (event) => {
      if (window.location == "http://localhost/STR/view/login.php?error=login") {
        $('#errorAlertlogin2').show('medium');
        setTimeout(function() {
          $('#errorAlertlogin2').hide('medium');
        }, 4000);
      }
      if (window.location == "http://localhost/STR/view/login.php?error=register") {
        $('#errorAlertlogin3').show('medium');
        setTimeout(function() {
          $('#errorAlertlogin3').hide('medium');
        }, 4000);
        container.classList.add("sign-up-mode");
      }
    });
  </script>
  <script type="module" src="../controller/login.js"></script>
  <script type="module" src="../controller/login/script.js"></script>
  <script type="module" src="./lang/login_lang.js"></script>
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>