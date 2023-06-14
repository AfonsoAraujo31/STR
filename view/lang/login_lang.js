/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    //login
    $("#title_login").text("Iniciar sessão em STR");
    $(".btn_login").text("Entrar");
    $("#input_email").attr("placeholder", "Endereço de email");
    $("#input_password").attr("placeholder", "Palavra chave");
    //register
    $("#title_register").text("Criar conta STR");
    $("#input_nome_reg").attr("placeholder", "Nome");
    $("#input_sobrenome_reg").attr("placeholder", "Sobrenome");
    $("#input_email_reg").attr("placeholder", "Edereço de email");
    $("#input_telemovel_reg").attr("placeholder", "Telemóvel");
    $("#label_pais_reg").text("Nacionalidade");
    $("#password").attr("placeholder", "Palavra chave");
    $("#label_1").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Maiúsculas e Minúsculas</li>'
    );
    $("#label_2").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Números (0-9)</li>'
    );
    $("#label_3").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Character especial</li>'
    );
    $("#label_4").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Pelo menos 8 character</li>'
    );
    $("#content_login").children().eq(0).text("Ainda não têm uma conta?");
    $("#content_login")
      .children()
      .eq(1)
      .text("Crie a sua agora e comece a ajudar e explorar o nosso mundo!");
    $("#sign-up-btn").text("Criar conta");
    $("#content_reg").children().eq(0).text("Já têm uma conta?");
    $("#content_reg")
      .children()
      .eq(1)
      .text("Entre agora na sua conta para ter acesso ao nosso mundo!");
    $("#sign-in-btn").text("Entrar");
    $(".btn_reg").text("Criar");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    //login
    $("#title_login").text("Sing in into STR");
    $(".btn_login").text("Login");
    $("#input_email").attr("placeholder", "Email");
    $("#input_password").attr("placeholder", "Password");
    //register
    $("#title_register").text("Create an account STR");
    $("#input_nome_reg").attr("placeholder", "Name");
    $("#input_sobrenome_reg").attr("placeholder", "Second Name");
    $("#input_email_reg").attr("placeholder", "Email");
    $("#input_telemovel_reg").attr("placeholder", "Phone number");
    $("#label_pais_reg").text("Nationality");
    $("#password").attr("placeholder", "Password");
    $("#label_1").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Upper and lowercase</li>'
    );
    $("#label_2").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Numbers (0-9)</li>'
    );
    $("#label_3").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Special character</li>'
    );
    $("#label_4").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; At least 8 characters</li>'
    );
    $("#content_login").children().eq(0).text("Haven't an account yet?");
    $("#content_login")
      .children()
      .eq(1)
      .text("Create yours now and start helping and exploring our world!");
    $("#sign-up-btn").text("Sing up");
    $("#content_reg").children().eq(0).text("Already have an account?");
    $("#content_reg")
      .children()
      .eq(1)
      .text("Login now to your account to access our world!");
    $("#sign-in-btn").text("Login");
    $(".btn_reg").text("Create");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    //login
    $("#title_login").text("Connexion un STR");
    $(".input_email").attr("placeholder", "Email");
    $("#input_password").attr("placeholder", "Mot de passe");
    $("#btn_login").text("Connexion");
    //register
    $("#title_register").text("Créer un compte STR");
    $("#input_nome_reg").attr("placeholder", "Nom");
    $("#input_sobrenome_reg").attr("placeholder", "Nom de famille");
    $("#input_email_reg").attr("placeholder", "Email");
    $("#input_telemovel_reg").attr("placeholder", "Numéro de téléphone");
    $("#label_pais_reg").text("Nationalité");
    $("#password").attr("placeholder", "Mot de passe");
    $("#label_1").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Majuscule et minuscule</li>'
    );
    $("#label_2").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Nombres (0-9)</li>'
    );
    $("#label_3").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Caractère spécial</li>'
    );
    $("#label_4").html(
      '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Au moins 8 caractères</li>'
    );
    $("#content_login").children().eq(0).text("Pas encore de compte?");
    $("#content_login")
      .children()
      .eq(1)
      .text(
        "Créez le vôtre maintenant et commencez à aider et à explorer notre monde!"
      );
    $("#sign-up-btn").text("Créer un compte");
    $("#content_reg").children().eq(0).text("Vous avez déjà un compte?");
    $("#content_reg")
      .children()
      .eq(1)
      .text(
        "Connectez-vous maintenant à votre compte pour accéder à notre monde!"
      );
    $("#sign-in-btn").text("Entrer");
    $(".btn_reg").text("Créer");
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      //login
      $("#title_login").text("Iniciar sessão em STR");
      $(".btn_login").text("Entrar");
      $("#input_email").attr("placeholder", "Endereço de email");
      $("#input_password").attr("placeholder", "Palavra chave");
      //register
      $("#title_register").text("Criar conta STR");
      $("#input_nome_reg").attr("placeholder", "Nome");
      $("#input_sobrenome_reg").attr("placeholder", "Sobrenome");
      $("#input_email_reg").attr("placeholder", "Edereço de email");
      $("#input_telemovel_reg").attr("placeholder", "Telemóvel");
      $("#label_pais_reg").text("Nacionalidade");
      $("#password").attr("placeholder", "Palavra chave");
      $("#label_1").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Maiúsculas e Minúsculas</li>'
      );
      $("#label_2").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Números (0-9)</li>'
      );
      $("#label_3").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Character especial</li>'
      );
      $("#label_4").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Pelo menos 8 character</li>'
      );
      $("#content_login").children().eq(0).text("Ainda não têm uma conta?");
      $("#content_login")
        .children()
        .eq(1)
        .text("Crie a sua agora e comece a ajudar e explorar o nosso mundo!");
      $("#sign-up-btn").text("Criar conta");
      $("#content_reg").children().eq(0).text("Já têm uma conta?");
      $("#content_reg")
        .children()
        .eq(1)
        .text("Entre agora na sua conta para ter acesso ao nosso mundo!");
      $("#sign-in-btn").text("Entrar");
      $(".btn_reg").text("Criar");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $("#title_login").text("Sing in into STR");
      $(".input_email").attr("placeholder", "Email");
      $("#input_password").attr("placeholder", "Password");
      $("#btn_login").text("Login");
      //register
      $("#title_register").text("Create an account STR");
      $("#input_nome_reg").attr("placeholder", "Name");
      $("#input_sobrenome_reg").attr("placeholder", "Second Name");
      $("#input_email_reg").attr("placeholder", "Email");
      $("#input_telemovel_reg").attr("placeholder", "Phone number");
      $("#label_pais_reg").text("Nationality");
      $("#password").attr("placeholder", "Password");
      $("#label_1").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Upper and lowercase</li>'
      );
      $("#label_2").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Numbers (0-9)</li>'
      );
      $("#label_3").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Special character</li>'
      );
      $("#label_4").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; At least 8 characters</li>'
      );
      $("#content_login").children().eq(0).text("Haven't an account yet?");
      $("#content_login")
        .children()
        .eq(1)
        .text("Create yours now and start helping and exploring our world!");
      $("#sign-up-btn").text("Sing up");
      $("#content_reg").children().eq(0).text("Already have an account?");
      $("#content_reg")
        .children()
        .eq(1)
        .text("Login now to your account to access our world!");
      $("#sign-in-btn").text("Login");
      $(".btn_reg").text("Create");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $("#title_login").text("Connexion un STR");
      $(".input_email").attr("placeholder", "Email");
      $("#input_password").attr("placeholder", "Mot de passe");
      $("#btn_login").text("Connexion");
      //register
      $("#title_register").text("Créer un compte STR");
      $("#input_nome_reg").attr("placeholder", "Nom");
      $("#input_sobrenome_reg").attr("placeholder", "Nom de famille");
      $("#input_email_reg").attr("placeholder", "Email");
      $("#input_telemovel_reg").attr("placeholder", "Numéro de téléphone");
      $("#label_pais_reg").text("Nationalité");
      $("#password").attr("placeholder", "Mot de passe");
      $("#label_1").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Majuscule et minuscule</li>'
      );
      $("#label_2").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Nombres (0-9)</li>'
      );
      $("#label_3").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Caractère spécial</li>'
      );
      $("#label_4").html(
        '<i class="fa fa-file-text" aria-hidden="true"></i></span>&nbsp; Au moins 8 caractères</li>'
      );
      $("#content_login").children().eq(0).text("Pas encore de compte?");
      $("#content_login")
        .children()
        .eq(1)
        .text(
          "Créez le vôtre maintenant et commencez à aider et à explorer notre monde!"
        );
      $("#sign-up-btn").text("Créer un compte");
      $("#content_reg").children().eq(0).text("Vous avez déjà un compte?");
      $("#content_reg")
        .children()
        .eq(1)
        .text(
          "Connectez-vous maintenant à votre compte pour accéder à notre monde!"
        );
      $("#sign-in-btn").text("Entrer");
      $(".btn_reg").text("Créer");
    });
  }
});
