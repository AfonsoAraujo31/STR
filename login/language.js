/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    //Header
    $(".li").children().eq(0).html('<i class="fa-solid fa-house"></i> Início');
    $(".li")
      .children()
      .eq(1)
      .html('<i class="fa-solid fa-handshake-angle"></i> Voluntariado');
    $(".li")
      .children()
      .eq(2)
      .html(
        '<i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial'
      );
    $(".li")
      .children()
      .eq(3)
      .html('<i class="fa-solid fa-newspaper"></i> Notícias');
    //language
    $(".lang").children().eq(0).text("Português");
    $(".lang").children().eq(1).text("Inglês");
    $(".lang").children().eq(2).text("Françês");
    //Flag
    $(".language-selected").html("Português");
    $(".language-selected").html(
      '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
    //login
    $("#title_login").text("Iniciar sessão");
    $("#label_email").text("Endereço de email");
    $("#label_pass").text("Palavra chave");
    $(".btn_login").text("Entrar");
    //register
    $("#title_register").text("Criar conta");
    $("#label_nome_reg").text("Nome");
    $("#label_sobrenome_reg").text("Sobrenome");
    $("#label_email_reg").text("Endereço de email");
    $("#label_tel_reg").text("Número de telemóvel");
    $("#label_pais_reg").text("Escolha...");
    $("#label_pass_reg").text("Palavra chave");
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
    $("#content_login").children().eq(1).text("Crie a sua agora e comece a ajudar e explorar o nosso mundo!");
    $("#sign-up-btn").text("Criar conta");
    $("#content_reg").children().eq(0).text("Já têm uma conta?");
    $("#content_reg").children().eq(1).text("Entre agora na sua conta para ter acesso ao nosso mundo!");
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
    //Header
    $(".li").children().eq(0).html('<i class="fa-solid fa-house"></i> Home');
    $(".li")
      .children()
      .eq(1)
      .html('<i class="fa-solid fa-handshake-angle"></i> Volunteer');
    $(".li")
      .children()
      .eq(2)
      .html('<i class="fa-solid fa-circle-dollar-to-slot"></i> Special Donate');
    $(".li")
      .children()
      .eq(3)
      .html('<i class="fa-solid fa-newspaper"></i> News');
    //language
    $(".lang").children().eq(0).text("Portuguese");
    $(".lang").children().eq(1).text("English");
    $(".lang").children().eq(2).text("French");
    //Flag
    $(".language-selected").text("English");
    $(".language-selected").html(
      '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
    //login
    $("#title_login").text("Login");
    $("#label_email").text("Email");
    $("#label_pass").text("Password");
    $(".btn_login").text("Login");
    //register
    $("#title_register").text("Create an account");
    $("#label_nome_reg").text("Name");
    $("#label_sobrenome_reg").text("Second name");
    $("#label_email_reg").text("Email");
    $("#label_tel_reg").text("Phone number");
    $("#label_pais_reg").text("Choose...");
    $("#label_pass_reg").text("Password");
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
    $("#content_login").children().eq(1).text("Create yours now and start helping and exploring our world!");
    $("#sign-up-btn").text("Create an account");
    $("#content_reg").children().eq(0).text("Already have an account?");
    $("#content_reg").children().eq(1).text("Login now to your account to access our world!");
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
    //Header
    $(".li")
      .children()
      .eq(0)
      .html('<i class="fa-solid fa-house"></i> Commencer');
    $(".li")
      .children()
      .eq(1)
      .html('<i class="fa-solid fa-handshake-angle"></i> Faire du Bénévolat');
    $(".li")
      .children()
      .eq(2)
      .html('<i class="fa-solid fa-circle-dollar-to-slot"></i> Don spécial');
    $(".li")
      .children()
      .eq(3)
      .html('<i class="fa-solid fa-newspaper"></i> Des nouvelles');
    //Language
    $(".lang").children().eq(0).text("Portugais");
    $(".lang").children().eq(1).text("Anglais");
    $(".lang").children().eq(2).text("Français");
    //Flag
    $(".language-selected").text("Français");
    $(".language-selected").html(
      '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
    //login
    $("#title_login").text("Connexion");
    $("#label_email").text("Email");
    $("#label_pass").text("Mot de passe");
    $(".btn_login").text("Connexion");
    //register
    $("#title_register").text("Créer un compte");
    $("#label_nome_reg").text("Nom");
    $("#label_sobrenome_reg").text("Nom de famille");
    $("#label_email_reg").text("Email");
    $("#label_tel_reg").text("Numéro de téléphone");
    $("#label_pais_reg").text("Choisir...");
    $("#label_pass_reg").text("Mot de passe");
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
    $("#content_login").children().eq(1).text("Créez le vôtre maintenant et commencez à aider et à explorer notre monde!");
    $("#sign-up-btn").text("Créer un compte");
    $("#content_reg").children().eq(0).text("Vous avez déjà un compte?");
    $("#content_reg").children().eq(1).text("Connectez-vous maintenant à votre compte pour accéder à notre monde!");
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
      //Header
      $(".li")
        .children()
        .eq(0)
        .html('<i class="fa-solid fa-house"></i> Início');
      $(".li")
        .children()
        .eq(1)
        .html('<i class="fa-solid fa-handshake-angle"></i> Voluntariado');
      $(".li")
        .children()
        .eq(2)
        .html(
          '<i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial'
        );
      $(".li")
        .children()
        .eq(3)
        .html('<i class="fa-solid fa-newspaper"></i> Notícias');
      //language
      $(".lang").children().eq(0).text("Português");
      $(".lang").children().eq(1).text("Inglês");
      $(".lang").children().eq(2).text("Françês");
      //Flag
      $(".language-selected").html("Português");
      $(".language-selected").html(
        '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
      //login
      $("#title_login").text("Iniciar sessão");
      $("#label_email").text("Endereço de email");
      $("#label_pass").text("Palavra chave");
      $(".btn_login").text("Entrar");
      //register
      $("#title_register").text("Criar conta");
      $("#label_nome_reg").text("Nome");
      $("#label_sobrenome_reg").text("Sobrenome");
      $("#label_email_reg").text("Endereço de email");
      $("#label_tel_reg").text("Número de telemóvel");
      $("#label_pais_reg").text("Escolha...");
      $("#label_pass_reg").text("Palavra chave");
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
    $("#content_login").children().eq(1).text("Crie a sua agora e comece a ajudar e explorar o nosso mundo!");
    $("#sign-up-btn").text("Criar conta");
    $("#content_reg").children().eq(0).text("Já têm uma conta?");
    $("#content_reg").children().eq(1).text("Entre agora na sua conta para ter acesso ao nosso mundo!");
    $("#sign-in-btn").text("Entrar");
    $(".btn_reg").text("Criar");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      //Header
      $(".li").children().eq(0).html('<i class="fa-solid fa-house"></i> Home');
      $(".li")
        .children()
        .eq(1)
        .html('<i class="fa-solid fa-handshake-angle"></i> Volunteer');
      $(".li")
        .children()
        .eq(2)
        .html(
          '<i class="fa-solid fa-circle-dollar-to-slot"></i> Special Donate'
        );
      $(".li")
        .children()
        .eq(3)
        .html('<i class="fa-solid fa-newspaper"></i> News');
      //language
      $(".lang").children().eq(0).text("Portuguese");
      $(".lang").children().eq(1).text("English");
      $(".lang").children().eq(2).text("French");
      //Flag
      $(".language-selected").text("English");
      $(".language-selected").html(
        '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
      $("#title_login").text("Login");
      $("#label_email").text("Email");
      $("#label_pass").text("Password");
      $(".btn_login").text("Login");
      //register
      $("#title_register").text("Create an account");
      $("#label_nome_reg").text("Name");
      $("#label_sobrenome_reg").text("Second name");
      $("#label_email_reg").text("Email");
      $("#label_tel_reg").text("Phone number");
      $("#label_pais_reg").text("Choose...");
      $("#label_pass_reg").text("Password");
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
    $("#content_login").children().eq(1).text("Create yours now and start helping and exploring our world!");
    $("#sign-up-btn").text("Create an account");
    $("#content_reg").children().eq(0).text("Already have an account?");
    $("#content_reg").children().eq(1).text("Login now to your account to access our world!");
    $("#sign-in-btn").text("Login");
    $(".btn_reg").text("Create");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      //Header
      $(".li")
        .children()
        .eq(0)
        .html('<i class="fa-solid fa-house"></i> Commencer');
      $(".li")
        .children()
        .eq(1)
        .html('<i class="fa-solid fa-handshake-angle"></i> Faire du Bénévolat');
      $(".li")
        .children()
        .eq(2)
        .html('<i class="fa-solid fa-circle-dollar-to-slot"></i> Don spécial');
      $(".li")
        .children()
        .eq(3)
        .html('<i class="fa-solid fa-newspaper"></i> Des nouvelles');
      //Language
      $(".lang").children().eq(0).text("Portugais");
      $(".lang").children().eq(1).text("Anglais");
      $(".lang").children().eq(2).text("Français");
      //Flag
      $(".language-selected").text("Français");
      $(".language-selected").html(
        '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
      $("#title_login").text("Connexion");
      $("#label_email").text("Email");
      $("#label_pass").text("Mot de passe");
      $(".btn_login").text("Connexion");
      //register
      $("#title_register").text("Créer un compte");
      $("#label_nome_reg").text("Nom");
      $("#label_sobrenome_reg").text("Nom de famille");
      $("#label_email_reg").text("Email");
      $("#label_tel_reg").text("Numéro de téléphone");
      $("#label_pais_reg").text("Choisir...");
      $("#label_pass_reg").text("Mot de passe");
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
    $("#content_login").children().eq(1).text("Créez le vôtre maintenant et commencez à aider et à explorer notre monde!");
    $("#sign-up-btn").text("Créer un compte");
    $("#content_reg").children().eq(0).text("Vous avez déjà un compte?");
    $("#content_reg").children().eq(1).text("Connectez-vous maintenant à votre compte pour accéder à notre monde!");
    $("#sign-in-btn").text("Entrer");
    $(".btn_reg").text("Créer");
    });
  }
});
