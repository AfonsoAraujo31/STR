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
    $(".language-selected_linguagem").html("Português");
    $(".language-selected_linguagem").html(
      '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
    //login
    $("#title_login").text("Iniciar sessão em STR");
    $(".btn_login").text("Entrar");
    $("#input_email").attr('placeholder','Endereço de email');
    $("#input_password").attr('placeholder','Palavra chave');
    //register
    $("#title_register").text("Criar conta STR");
    $("#input_nome_reg").attr('placeholder','Nome');
    $("#input_sobrenome_reg").attr('placeholder','Sobrenome');
    $("#input_email_reg").attr('placeholder','Edereço de email');
    $("#input_telemovel_reg").attr('placeholder','Telemóvel');
    $("#label_pais_reg").text("Nacionalidade");
    $("#password").attr('placeholder','Palavra chave');
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
    $(".nav-text").eq(0).text("Perfil");
    $(".nav-text").eq(1).text("Candidaturas");
    $(".nav-text").eq(2).text("Observações");
    $(".nav-text").eq(3).text("Sair");
    $(".title").eq(0).text("Definições de perfil");
    $(".title").eq(1).text("Preferências/Opcões");
    $(".title").eq(2).text("Foto de perfil");
    $(".details").eq(0).text("Nome");
    $(".details").eq(1).text("Sobrenome");
    $(".details").eq(2).text("Endereço de email");
    $(".details").eq(3).text("Número de telemóvel");
    $(".details").eq(4).text("Morada");
    $(".details").eq(5).text("Data de nascimento");
    $(".details").eq(6).text("Nacionalidade");
    $(".details").eq(7).text("Palavra chave");
    $(".details").eq(8).text("Descrição");
    $(".preferencias").eq(0).text("Linguagem pré definida ao iniciar sessão");
    $(".preferencias").eq(1).text("Em caso de contacto, forma preferida");
    $(".preferencias").eq(2).text("Preferência do estado dos cookies");
    $(".preferencias").eq(3).text("Memorizar dados ao iniciar sessão");
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Português");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Inglês");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Françes");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Sem preferência");
    }
    $(".linguagem").eq(0).text("Sem preferência");
    $(".linguagem").eq(1).text("Português");
    $(".linguagem").eq(2).text("Inglês");
    $(".linguagem").eq(3).text("Françes");

    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Telemóvel");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Sem preferência");
    }
    $(".contacto").eq(0).text("Sem preferência");
    $(".contacto").eq(1).text("Telemóvel");
    $(".contacto").eq(2).text("Email");

    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Ativado");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Desativado");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Sem preferência");
    }
    $(".coockies").eq(0).text("Sem preferência");
    $(".coockies").eq(1).text("Ativado");
    $(".coockies").eq(2).text("Desativado");

    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Sim");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Não");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Sem preferência");
    }
    $(".dados_login").eq(0).text("Sem preferência");
    $(".dados_login").eq(1).text("Sim");
    $(".dados_login").eq(2).text("Não");

    $(".button").children().val("Atualizar");
    $("#btn_atualizar").text("Atualizar");
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
    $(".language-selected_linguagem").text("English");
    $(".language-selected_linguagem").html(
      '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
    //login
    $("#title_login").text("Sing in into STR");
    $(".btn_login").text("Login");
    $("#input_email").attr('placeholder','Email');
    $("#input_password").attr('placeholder','Password');
    //register
    $("#title_register").text("Create an account STR");
    $("#input_nome_reg").attr('placeholder','Name');
    $("#input_sobrenome_reg").attr('placeholder','Second Name');
    $("#input_email_reg").attr('placeholder','Email');
    $("#input_telemovel_reg").attr('placeholder','Phone number');
    $("#label_pais_reg").text("Nationality");
    $("#password").attr('placeholder','Password');
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
    $("#sign-up-btn").text("Create an account");
    $("#content_reg").children().eq(0).text("Already have an account?");
    $("#content_reg")
      .children()
      .eq(1)
      .text("Login now to your account to access our world!");
    $("#sign-in-btn").text("Login");
    $(".btn_reg").text("Create");
    $(".nav-text").eq(0).text("Profile");
    $(".nav-text").eq(1).text("Applications");
    $(".nav-text").eq(2).text("Comments");
    $(".nav-text").eq(3).text("Logout");
    $(".title").eq(0).text("Profile settings");
    $(".title").eq(1).text("Preferences/Options");
    $(".title").eq(2).text("Profile photo");
    $(".details").eq(0).text("Name");
    $(".details").eq(1).text("Second name");
    $(".details").eq(2).text("Email");
    $(".details").eq(3).text("Phone number");
    $(".details").eq(4).text("Address");
    $(".details").eq(5).text("Birthday");
    $(".details").eq(6).text("Nationality");
    $(".details").eq(7).text("Password");
    $(".details").eq(8).text("Description");
    $(".preferencias").eq(0).text("Predefined language when logging in");
    $(".preferencias").eq(1).text("In case of contact, preferred method");
    $(".preferencias").eq(2).text("Cookie state preference");
    $(".preferencias").eq(3).text("Memorize data when logging in");
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portuguese");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("English");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("French");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("No preference");
    }
    $(".linguagem").eq(0).text("No preference");
    $(".linguagem").eq(1).text("Portuguese");
    $(".linguagem").eq(2).text("English");
    $(".linguagem").eq(3).text("French");

    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Phone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("No preference");
    }
    $(".contacto").eq(0).text("No preference");
    $(".contacto").eq(1).text("Phone");
    $(".contacto").eq(2).text("Email");

    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activated");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Disabled");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("No preference");
    }
    $(".coockies").eq(0).text("No preference");
    $(".coockies").eq(1).text("Activated");
    $(".coockies").eq(2).text("Disabled");

    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Yes");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("No");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("No preference");
    }
    $(".dados_login").eq(0).text("No preference");
    $(".dados_login").eq(1).text("Yes");
    $(".dados_login").eq(2).text("No");

    $(".button").children().val("Update");
    $("#btn_atualizar").text("Update");
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
    $(".language-selected_linguagem").text("Français");
    $(".language-selected_linguagem").html(
      '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
    //login
    $("#title_login").text("Connexion un STR");
    $(".input_email").attr('placeholder','Email');
    $("#input_password").attr('placeholder','Mot de passe');
    $("#btn_login").text("Connexion");
    //register
    $("#title_register").text("Créer un compte STR");
    $("#input_nome_reg").attr('placeholder','Nom');
    $("#input_sobrenome_reg").attr('placeholder','Nom de famille');
    $("#input_email_reg").attr('placeholder','Email');
    $("#input_telemovel_reg").attr('placeholder','Numéro de téléphone');
    $("#label_pais_reg").text("Nationalité");
    $("#password").attr('placeholder','Mot de passe');
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
    $(".nav-text").eq(0).text("Profil");
    $(".nav-text").eq(1).text("Applications");
    $(".nav-text").eq(2).text("Commentaires");
    $(".nav-text").eq(3).text("Se déconnecter");
    $(".title").eq(0).text("Paramètres de profil");
    $(".title").eq(1).text("Préférences/Options");
    $(".title").eq(2).text("Photo de profil");
    $(".details").eq(0).text("Nom");
    $(".details").eq(1).text("Nom de famille");
    $(".details").eq(2).text("Email");
    $(".details").eq(3).text("Numéro de téléphone");
    $(".details").eq(4).text("Adresse");
    $(".details").eq(5).text("Anniversaire");
    $(".details").eq(6).text("Nationalité");
    $(".details").eq(7).text("Mot de passe");
    $(".details").eq(8).text("Description");
    $(".preferencias").eq(0).text("Langue prédéfinie lors de la connexion");
    $(".preferencias").eq(1).text("En cas de contact, méthode privilégiée");
    $(".preferencias").eq(2).text("Préférence d'état des cookies");
    $(".preferencias").eq(3).text("Mémoriser les données lors de la connexion");
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portugais");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Anglaise");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Français");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Pas de préférence");
    }
    $(".linguagem").eq(0).text("Pas de préférence");
    $(".linguagem").eq(1).text("Portugais");
    $(".linguagem").eq(2).text("Anglaise");
    $(".linguagem").eq(3).text("Français");

    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Téléphone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Pas de préférence");
    }
    $(".contacto").eq(0).text("Pas de préférence");
    $(".contacto").eq(1).text("Téléphone");
    $(".contacto").eq(2).text("Email");

    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activé");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Désactivé");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Pas de préférence");
    }
    $(".coockies").eq(0).text("Pas de préférence");
    $(".coockies").eq(1).text("Activé");
    $(".coockies").eq(2).text("Désactivé");

    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Oui");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Au");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Pas de préférence");
    }
    $(".dados_login").eq(0).text("Pas de préférence");
    $(".dados_login").eq(1).text("Oui");
    $(".dados_login").eq(2).text("Au");

    $(".button").children().val("Mettre à jour");
    $("#btn_atualizar").text("Mettre à jour");
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
      $(".language-selected_linguagem").html("Português");
      $(".language-selected_linguagem").html(
        '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
      //login
      $("#title_login").text("Iniciar sessão em STR");
      $(".btn_login").text("Entrar");
      $("#input_email").attr('placeholder','Endereço de email');
    $("#input_password").attr('placeholder','Palavra chave');
      //register
      $("#title_register").text("Criar conta STR");
      $("#input_nome_reg").attr('placeholder','Nome');
    $("#input_sobrenome_reg").attr('placeholder','Sobrenome');
    $("#input_email_reg").attr('placeholder','Edereço de email');
    $("#input_telemovel_reg").attr('placeholder','Telemóvel');
    $("#label_pais_reg").text("Nacionalidade");
    $("#password").attr('placeholder','Palavra chave');
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
      $(".nav-text").eq(0).text("Perfil");
      $(".nav-text").eq(1).text("Candidaturas");
      $(".nav-text").eq(2).text("Observações");
      $(".nav-text").eq(3).text("Sair");
      $(".title").eq(0).text("Definições de perfil");
      $(".title").eq(1).text("Preferências/Opcões");
      $(".title").eq(2).text("Foto de perfil");
      $(".details").eq(0).text("Nome");
      $(".details").eq(1).text("Sobrenome");
      $(".details").eq(2).text("Endereço de email");
      $(".details").eq(3).text("Número de telemóvel");
      $(".details").eq(4).text("Morada");
      $(".details").eq(5).text("Data de nascimento");
      $(".details").eq(6).text("Nacionalidade");
      $(".details").eq(7).text("Palavra chave");
      $(".details").eq(8).text("Descrição");
      $(".preferencias").eq(0).text("Linguagem pré definida ao iniciar sessão");
      $(".preferencias").eq(1).text("Em caso de contacto, forma preferida");
      $(".preferencias").eq(2).text("Preferência do estado dos cookies");
      $(".preferencias").eq(3).text("Memorizar dados ao iniciar sessão");
      if ($(".selected_linguagem").text() == "Português") {
        $(".selected_linguagem").text("Português");
      } else if ($(".selected_linguagem").text() == "Inglês") {
        $(".selected_linguagem").text("Inglês");
      } else if ($(".selected_linguagem").text() == "Françes") {
        $(".selected_linguagem").text("Françes");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_linguagem").text("Sem preferência");
      }
      $(".linguagem").eq(0).text("Sem preferência");
      $(".linguagem").eq(1).text("Português");
      $(".linguagem").eq(2).text("Inglês");
      $(".linguagem").eq(3).text("Françes");

      if ($(".selected_contacto").text() == "Telemóvel") {
        $(".selected_contacto").text("Telemóvel");
      } else if ($(".selected_contacto").text() == "Email") {
        $(".selected_contacto").text("Email");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_contacto").text("Sem preferência");
      }
      $(".contacto").eq(0).text("Sem preferência");
      $(".contacto").eq(1).text("Telemóvel");
      $(".contacto").eq(2).text("Email");

      if ($(".selected_coockies").text() == "Ativado") {
        $(".selected_coockies").text("Ativado");
      } else if ($(".selected_coockies").text() == "Desativado") {
        $(".selected_coockies").text("Desativado");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_coockies").text("Sem preferência");
      }
      $(".coockies").eq(0).text("Sem preferência");
      $(".coockies").eq(1).text("Ativado");
      $(".coockies").eq(2).text("Desativado");

      if ($(".selected_dados_login").text() == "Sim") {
        $(".selected_dados_login").text("Sim");
      } else if ($(".selected_dados_login").text() == "Não") {
        $(".selected_dados_login").text("Não");
      } else if ($(".selected_dados_login").text() == "Sem preferência") {
        $(".selected_dados_login").text("Sem preferência");
      }
      $(".dados_login").eq(0).text("Sem preferência");
      $(".dados_login").eq(1).text("Sim");
      $(".dados_login").eq(2).text("Não");

      $(".button").children().val("Atualizar");
      $("#btn_atualizar").text("Atualizar");
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
      $(".language-selected_linguagem").text("English");
      $(".language-selected_linguagem").html(
        '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
      $("#title_login").text("Sing in into STR");
      $(".input_email").attr('placeholder','Email');
    $("#input_password").attr('placeholder','Password');
      $("#btn_login").text("Login");
      //register
      $("#title_register").text("Create an account STR");
      $("#input_nome_reg").attr('placeholder','Name');
    $("#input_sobrenome_reg").attr('placeholder','Second Name');
    $("#input_email_reg").attr('placeholder','Email');
    $("#input_telemovel_reg").attr('placeholder','Phone number');
    $("#label_pais_reg").text("Nationality");
    $("#password").attr('placeholder','Password');
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
      $("#sign-up-btn").text("Create an account");
      $("#content_reg").children().eq(0).text("Already have an account?");
      $("#content_reg")
        .children()
        .eq(1)
        .text("Login now to your account to access our world!");
      $("#sign-in-btn").text("Login");
      $(".btn_reg").text("Create");
      $(".nav-text").eq(0).text("Profile");
      $(".nav-text").eq(1).text("Applications");
      $(".nav-text").eq(2).text("Comments");
      $(".nav-text").eq(3).text("Logout");
      $(".title").eq(0).text("Profile settings");
      $(".title").eq(1).text("Preferences/Options");
      $(".title").eq(2).text("Profile photo");
      $(".details").eq(0).text("Name");
      $(".details").eq(1).text("Second name");
      $(".details").eq(2).text("Email");
      $(".details").eq(3).text("Phone number");
      $(".details").eq(4).text("Address");
      $(".details").eq(5).text("Birthday");
      $(".details").eq(6).text("Nationality");
      $(".details").eq(7).text("Password");
      $(".details").eq(8).text("Description");
      $(".preferencias").eq(0).text("Predefined language when logging in");
      $(".preferencias").eq(1).text("In case of contact, preferred method");
      $(".preferencias").eq(2).text("Cookie state preference");
      $(".preferencias").eq(3).text("Memorize data when logging in");
      if ($(".selected_linguagem").text() == "Português") {
        $(".selected_linguagem").text("Portuguese");
      } else if ($(".selected_linguagem").text() == "Inglês") {
        $(".selected_linguagem").text("English");
      } else if ($(".selected_linguagem").text() == "Françes") {
        $(".selected_linguagem").text("French");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_linguagem").text("No preference");
      }
      $(".linguagem").eq(0).text("No preference");
      $(".linguagem").eq(1).text("Portuguese");
      $(".linguagem").eq(2).text("English");
      $(".linguagem").eq(3).text("French");

      if ($(".selected_contacto").text() == "Telemóvel") {
        $(".selected_contacto").text("Phone");
      } else if ($(".selected_contacto").text() == "Email") {
        $(".selected_contacto").text("Email");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_contacto").text("No preference");
      }
      $(".contacto").eq(0).text("No preference");
      $(".contacto").eq(1).text("Phone");
      $(".contacto").eq(2).text("Email");

      if ($(".selected_coockies").text() == "Ativado") {
        $(".selected_coockies").text("Activated");
      } else if ($(".selected_coockies").text() == "Desativado") {
        $(".selected_coockies").text("Disabled");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_coockies").text("No preference");
      }
      $(".coockies").eq(0).text("No preference");
      $(".coockies").eq(1).text("Activated");
      $(".coockies").eq(2).text("Disabled");

      if ($(".selected_dados_login").text() == "Sim") {
        $(".selected_dados_login").text("Yes");
      } else if ($(".selected_dados_login").text() == "Não") {
        $(".selected_dados_login").text("No");
      } else if ($(".selected_dados_login").text() == "Sem preferência") {
        $(".selected_dados_login").text("No preference");
      }
      $(".dados_login").eq(0).text("No preference");
      $(".dados_login").eq(1).text("Yes");
      $(".dados_login").eq(2).text("No");

      $(".button").children().val("Update");
      $("#btn_atualizar").text("Update");
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
      $(".language-selected_linguagem").text("Français");
      $(".language-selected_linguagem").html(
        '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
      $("#title_login").text("Connexion un STR");
      $(".input_email").attr('placeholder','Email');
    $("#input_password").attr('placeholder','Mot de passe');
      $("#btn_login").text("Connexion");
      //register
      $("#title_register").text("Créer un compte STR");
      $("#input_nome_reg").attr('placeholder','Nom');
    $("#input_sobrenome_reg").attr('placeholder','Nom de famille');
    $("#input_email_reg").attr('placeholder','Email');
    $("#input_telemovel_reg").attr('placeholder','Numéro de téléphone');
    $("#label_pais_reg").text("Nationalité");
    $("#password").attr('placeholder','Mot de passe');
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
      $(".nav-text").eq(0).text("Profil");
      $(".nav-text").eq(1).text("Applications");
      $(".nav-text").eq(2).text("Commentaires");
      $(".nav-text").eq(3).text("Se déconnecter");
      $(".title").eq(0).text("Paramètres de profil");
      $(".title").eq(1).text("Préférences/Options");
      $(".title").eq(2).text("Photo de profil");
      $(".details").eq(0).text("Nom");
      $(".details").eq(1).text("Nom de famille");
      $(".details").eq(2).text("Email");
      $(".details").eq(3).text("Numéro de téléphone");
      $(".details").eq(4).text("Adresse");
      $(".details").eq(5).text("Anniversaire");
      $(".details").eq(6).text("Nationalité");
      $(".details").eq(7).text("Mot de passe");
      $(".details").eq(8).text("Description");
      $(".preferencias").eq(0).text("Langue prédéfinie lors de la connexion");
      $(".preferencias").eq(1).text("En cas de contact, méthode privilégiée");
      $(".preferencias").eq(2).text("Préférence d'état des cookies");
      $(".preferencias")
        .eq(3)
        .text("Mémoriser les données lors de la connexion");
      if ($(".selected_linguagem").text() == "Português") {
        $(".selected_linguagem").text("Portugais");
      } else if ($(".selected_linguagem").text() == "Inglês") {
        $(".selected_linguagem").text("Anglaise");
      } else if ($(".selected_linguagem").text() == "Françes") {
        $(".selected_linguagem").text("Français");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_linguagem").text("Pas de préférence");
      }
      $(".linguagem").eq(0).text("Pas de préférence");
      $(".linguagem").eq(1).text("Portugais");
      $(".linguagem").eq(2).text("Anglaise");
      $(".linguagem").eq(3).text("Français");

      if ($(".selected_contacto").text() == "Telemóvel") {
        $(".selected_contacto").text("Téléphone");
      } else if ($(".selected_contacto").text() == "Email") {
        $(".selected_contacto").text("Email");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_contacto").text("Pas de préférence");
      }
      $(".contacto").eq(0).text("Pas de préférence");
      $(".contacto").eq(1).text("Téléphone");
      $(".contacto").eq(2).text("Email");

      if ($(".selected_coockies").text() == "Ativado") {
        $(".selected_coockies").text("Activé");
      } else if ($(".selected_coockies").text() == "Desativado") {
        $(".selected_coockies").text("Désactivé");
      } else if ($(".selected_linguagem").text() == "Sem preferência") {
        $(".selected_coockies").text("Pas de préférence");
      }
      $(".coockies").eq(0).text("Pas de préférence");
      $(".coockies").eq(1).text("Activé");
      $(".coockies").eq(2).text("Désactivé");

      if ($(".selected_dados_login").text() == "Sim") {
        $(".selected_dados_login").text("Oui");
      } else if ($(".selected_dados_login").text() == "Não") {
        $(".selected_dados_login").text("Au");
      } else if ($(".selected_dados_login").text() == "Sem preferência") {
        $(".selected_dados_login").text("Pas de préférence");
      }
      $(".dados_login").eq(0).text("Pas de préférence");
      $(".dados_login").eq(1).text("Oui");
      $(".dados_login").eq(2).text("Au");

      $(".button").children().val("Mettre à jour");
      $("#btn_atualizar").text("Mettre à jour");
    });
  }
});
