/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
function familyCardpt() {
  const descriptionIds = [
    "descricao1",
    "descricao2",
    "descricao3",
    "descricao4",
    "descricao5",
    "descricao6",
  ];
  var lang = localStorage.getItem("language");
  if (lang === "1") {
    lang = "fr";
  } else if (lang === "2") {
    lang = "en";
  } else if (lang === "3") {
    lang = "fr";
  }

  descriptionIds.forEach((descriptionId) => {
    const textareaFrom = document.getElementById(descriptionId).textContent;
    fetch(
      `https://api.mymemory.translated.net/get?q=${textareaFrom}&langpair=${lang}|pt&key=38428e54204d341351e0&de=afonso16araujo@gmail.com`
    )
      .then((res) => res.json())
      .then((data) => {
        if (data && data.responseData && data.responseData.translatedText) {
          document.getElementById(descriptionId).textContent =
            data.responseData.translatedText;
        } else {
          console.error("Failed to get translated text.");
        }
      })
      .catch((error) => {
        console.error("Error occurred while fetching translation:", error);
      });
  });
}

function familyCarden() {
  const descriptionIds = [
    "descricao1",
    "descricao2",
    "descricao3",
    "descricao4",
    "descricao5",
    "descricao6",
  ];
  var lang = localStorage.getItem("language");
  if (lang === "1") {
    lang = "pt";
  } else if (lang === "2") {
    lang = "pt";
  } else if (lang === "3") {
    lang = "fr";
  }

  descriptionIds.forEach((descriptionId) => {
    const textareaFrom = document.getElementById(descriptionId).textContent;
    fetch(
      `https://api.mymemory.translated.net/get?q=${textareaFrom}&langpair=${lang}|en&key=38428e54204d341351e0&de=afonso16araujo@gmail.com`
    )
      .then((res) => res.json())
      .then((data) => {
        if (data && data.responseData && data.responseData.translatedText) {
          document.getElementById(descriptionId).textContent =
            data.responseData.translatedText;
        } else {
          console.error("Failed to get translated text.");
        }
      })
      .catch((error) => {
        console.error("Error occurred while fetching translation:", error);
      });
  });
}

function familyCardfr() {
  const descriptionIds = [
    "descricao1",
    "descricao2",
    "descricao3",
    "descricao4",
    "descricao5",
    "descricao6",
  ];
  var lang = localStorage.getItem("language");
  if (lang === "1") {
    lang = "pt";
  } else if (lang === "2") {
    lang = "en";
  } else if (lang === "3") {
    lang = "pt";
  }

  descriptionIds.forEach((descriptionId) => {
    const textareaFrom = document.getElementById(descriptionId).textContent;
    fetch(
      `https://api.mymemory.translated.net/get?q=${textareaFrom}&langpair=${lang}|fr&key=38428e54204d341351e0&de=afonso16araujo@gmail.com`
    )
      .then((res) => res.json())
      .then((data) => {
        if (data && data.responseData && data.responseData.translatedText) {
          document.getElementById(descriptionId).textContent =
            data.responseData.translatedText;
        } else {
          console.error("Failed to get translated text.");
        }
      })
      .catch((error) => {
        console.error("Error occurred while fetching translation:", error);
      });
  });
}

$(function () {
  $(".pt").click(function () {
    familyCardpt();
    localStorage.setItem("language", 1);
    //sidebar
    $(".nav-text").eq(0).text("Perfil");
    $(".nav-text").eq(1).text("Doador Especial");
    $(".nav-text").eq(2).text("Candidaturas");
    $(".nav-text").eq(3).text("Admin");
    $(".nav-text").eq(4).text("Sair");
    //definicoes de perfil
    $(".title").eq(0).text("Definições de perfil");
    $(".title").eq(1).text("Preferências/Opções");
    $(".title").eq(2).text("Foto de perfil");
    $(".title").eq(3).text("Sobre ti");
    $(".details").eq(0).text("Nome");
    $(".details").eq(1).text("Sobrenome");
    $(".details").eq(2).text("Endereço de email");
    $(".details").eq(3).text("Número de telemóvel");
    $(".details").eq(4).text("Morada");
    $(".details").eq(5).text("Data de nascimento");
    $(".details").eq(6).text("Nacionalidade");
    $(".details").eq(7).text("Palavra chave");
    //preferencias/opcoes
    $(".preferencias").eq(0).text("Linguagem pré-definida ao iniciar sessão");
    $(".preferencias").eq(1).text("Em caso de contacto, forma preferida");
    $(".preferencias").eq(2).text("Preferência do estado dos cookies");
    $(".preferencias").eq(3).text("Exibir definições após iniciar sessão");
    /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Português");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Inglês");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Françes");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Sem preferência");
    }*/
    $(".linguagem").eq(0).text("Sem preferência");
    $(".linguagem").eq(1).text("Português");
    $(".linguagem").eq(2).text("Inglês");
    $(".linguagem").eq(3).text("Françes");
    /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Telemóvel");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Sem preferência");
    }*/
    $(".contacto").eq(0).text("Sem preferência");
    $(".contacto").eq(1).text("Telemóvel");
    $(".contacto").eq(2).text("Email");
    /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Ativado");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Desativado");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Sem preferência");
    }*/
    $(".coockies").eq(0).text("Sem preferência");
    $(".coockies").eq(1).text("Ativado");
    $(".coockies").eq(2).text("Desativado");
    /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Sim");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Não");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Sem preferência");
    }*/
    $(".dados_login").eq(0).text("Sem preferência");
    $(".dados_login").eq(1).text("Sim");
    $(".dados_login").eq(2).text("Não");
    //butoes atualizar
    $(".button").children().val("Atualizar");
    $("#btn_atualizar").text("Atualizar");
    //pagina doador especial
    $(".contant_box_404")
      .children()
      .eq(0)
      .text("Oops... Aguarde mais um pouco!");
    $(".contant_box_404")
      .children()
      .eq(1)
      .text("A sua candidatura está a ser processada.");
    $("#label_appliance_nome").text("Nome");
    $("#label_appliance_sobrenome").text("Sobrenome");
    $("#label_appliance_identificação").text("Número de identificação");
    $("#label_appliance_civil").text("Estado civil");
    $("#label_appliance_contacto").text("Forma de contacto");
    $("#label_appliance_tel").text("Número de telemóvel");
    $("#label_appliance_email").text("Endereço de email");
    $("#label_appliance_motivacao").text("Motivação");
    //pagina candidaturas
    $(".card-title-inside").text("Família");
    $(".title_informacoes").text("1");

  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    familyCarden();
    localStorage.setItem("language", 2);
    //sidebar
    $(".nav-text").eq(0).text("Profile");
    $(".nav-text").eq(1).text("Special donation");
    $(".nav-text").eq(2).text("Applications");
    $(".nav-text").eq(3).text("Admin");
    $(".nav-text").eq(4).text("Logout");
    //perfil
    $(".title").eq(0).text("Profile settings");
    $(".title").eq(1).text("Preferences/Options");
    $(".title").eq(2).text("Profile photo");
    $(".title").eq(3).text("About you");
    $(".details").eq(0).text("Name");
    $(".details").eq(1).text("Second name");
    $(".details").eq(2).text("Email");
    $(".details").eq(3).text("Phone number");
    $(".details").eq(4).text("Address");
    $(".details").eq(5).text("Birthday");
    $(".details").eq(6).text("Nationality");
    $(".details").eq(7).text("Password");
    //preferencias/opcoes
    $(".preferencias").eq(0).text("Predefined language when logging in");
    $(".preferencias").eq(1).text("In case of contact, preferred method");
    $(".preferencias").eq(2).text("Cookie state preference");
    $(".preferencias").eq(3).text("Show settings after login");
    /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portuguese");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("English");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("French");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("No preference");
    }*/
    $(".linguagem").eq(0).text("No preference");
    $(".linguagem").eq(1).text("Portuguese");
    $(".linguagem").eq(2).text("English");
    $(".linguagem").eq(3).text("French");
    /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Phone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("No preference");
    }*/
    $(".contacto").eq(0).text("No preference");
    $(".contacto").eq(1).text("Phone");
    $(".contacto").eq(2).text("Email");
    /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activated");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Disabled");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("No preference");
    }*/
    $(".coockies").eq(0).text("No preference");
    $(".coockies").eq(1).text("Activated");
    $(".coockies").eq(2).text("Disabled");
    /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Yes");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("No");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("No preference");
    }*/
    $(".dados_login").eq(0).text("No preference");
    $(".dados_login").eq(1).text("Yes");
    $(".dados_login").eq(2).text("No");
    //butoes atualizar
    $(".button").children().val("Update");
    $("#btn_atualizar").text("Update");
    //pagina doador especial
    $(".contant_box_404").children().eq(0).text("Oops... wait a moment!");
    $(".contant_box_404")
      .children()
      .eq(1)
      .text("Your application is being processed.");
    $("#label_appliance_nome").text("Name");
    $("#label_appliance_sobrenome").text("Lastname");
    $("#label_appliance_identificacao").text("Identification number");
    $("#label_appliance_civil").text("Marital status");
    $("#label_appliance_contacto").text("Contact form");
    $("#label_appliance_tel").text("Phone number");
    $("#label_appliance_email").text("Email");
    $("#label_appliance_motivacao").text("Motivation");
    //pagina candidaturas
    $(".card-title-inside").text("Family");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    familyCardfr();
    localStorage.setItem("language", 3);
    //sidebar
    $(".nav-text").eq(0).text("Profil");
    $(".nav-text").eq(1).text("Don spécial");
    $(".nav-text").eq(2).text("Applications");
    $(".nav-text").eq(3).text("Admin");
    $(".nav-text").eq(4).text("Se déconnecter");
    //definicoes de perfil
    $(".title").eq(0).text("Paramètres de profil");
    $(".title").eq(1).text("Préférences/Options");
    $(".title").eq(2).text("Photo de profil");
    $(".title").eq(3).text("Au propos de vous");
    $(".details").eq(0).text("Nom");
    $(".details").eq(1).text("Nom de famille");
    $(".details").eq(2).text("Email");
    $(".details").eq(3).text("Numéro de téléphone");
    $(".details").eq(4).text("Adresse");
    $(".details").eq(5).text("Anniversaire");
    $(".details").eq(6).text("Nationalité");
    $(".details").eq(7).text("Mot de passe");
    //preferencias/opcoes
    $(".preferencias").eq(0).text("Langue prédéfinie lors de la connexion");
    $(".preferencias").eq(1).text("En cas de contact, méthode privilégiée");
    $(".preferencias").eq(2).text("Préférence d'état des cookies");
    $(".preferencias").eq(3).text("Afficher les paramètres après la connexion");
    /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portugais");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Anglaise");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Français");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Pas de préférence");
    }*/
    $(".linguagem").eq(0).text("Pas de préférence");
    $(".linguagem").eq(1).text("Portugais");
    $(".linguagem").eq(2).text("Anglaise");
    $(".linguagem").eq(3).text("Français");
    /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Téléphone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Pas de préférence");
    }*/
    $(".contacto").eq(0).text("Pas de préférence");
    $(".contacto").eq(1).text("Téléphone");
    $(".contacto").eq(2).text("Email");
    /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activé");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Désactivé");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Pas de préférence");
    }*/
    $(".coockies").eq(0).text("Pas de préférence");
    $(".coockies").eq(1).text("Activé");
    $(".coockies").eq(2).text("Désactivé");
    /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Oui");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Au");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Pas de préférence");
    }*/
    $(".dados_login").eq(0).text("Pas de préférence");
    $(".dados_login").eq(1).text("Oui");
    $(".dados_login").eq(2).text("Au");
    //butoes atualizar
    $(".button").children().val("Mettre à jour");
    $("#btn_atualizar").text("Mettre à jour");
    //pagina doador especial
    $(".contant_box_404").children().eq(0).text("Oops... attendez un moment!");
    $(".contant_box_404")
      .children()
      .eq(1)
      .text("Votre candidature est en cours de traitement.");
    $("#label_appliance_nome").text("Nom");
    $("#label_appliance_sobrenome").text("Lastname");
    $("#label_appliance_identificacao").text("Numéro d'identification");
    $("#label_appliance_civil").text("état matrimonial");
    $("#label_appliance_contacto").text("Formulaire de contact");
    $("#label_appliance_tel").text("Numéro de portable");
    $("#label_appliance_email").text("Adresse e-mail");
    $("#label_appliance_motivacao").text("Motivation");
    //pagina candidaturas
    $(".card-title-inside").text("Famille");
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      familyCardpt();
      localStorage.setItem("language", 1);
      //sidebar
      $(".nav-text").eq(0).text("Perfil");
      $(".nav-text").eq(1).text("Doador Especial");
      $(".nav-text").eq(2).text("Candidaturas");
      $(".nav-text").eq(3).text("Admin");
      $(".nav-text").eq(4).text("Sair");
      //definicoes de perfil
      $(".title").eq(0).text("Definições de perfil");
      $(".title").eq(1).text("Preferências/Opções");
      $(".title").eq(2).text("Foto de perfil");
      $(".title").eq(3).text("Sobre ti");
      $(".details").eq(0).text("Nome");
      $(".details").eq(1).text("Sobrenome");
      $(".details").eq(2).text("Endereço de email");
      $(".details").eq(3).text("Número de telemóvel");
      $(".details").eq(4).text("Morada");
      $(".details").eq(5).text("Data de nascimento");
      $(".details").eq(6).text("Nacionalidade");
      $(".details").eq(7).text("Palavra chave");
      //preferencias/opcoes
      $(".preferencias").eq(0).text("Linguagem pré-definida ao iniciar sessão");
      $(".preferencias").eq(1).text("Em caso de contacto, forma preferida");
      $(".preferencias").eq(2).text("Preferência do estado dos cookies");
      $(".preferencias").eq(3).text("Exibir definições após iniciar sessão");
      /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Português");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Inglês");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Françes");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Sem preferência");
    }*/
      $(".linguagem").eq(0).text("Sem preferência");
      $(".linguagem").eq(1).text("Português");
      $(".linguagem").eq(2).text("Inglês");
      $(".linguagem").eq(3).text("Françes");
      /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Telemóvel");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Sem preferência");
    }*/
      $(".contacto").eq(0).text("Sem preferência");
      $(".contacto").eq(1).text("Telemóvel");
      $(".contacto").eq(2).text("Email");
      /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Ativado");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Desativado");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Sem preferência");
    }*/
      $(".coockies").eq(0).text("Sem preferência");
      $(".coockies").eq(1).text("Ativado");
      $(".coockies").eq(2).text("Desativado");
      /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Sim");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Não");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Sem preferência");
    }*/
      $(".dados_login").eq(0).text("Sem preferência");
      $(".dados_login").eq(1).text("Sim");
      $(".dados_login").eq(2).text("Não");
      //butoes atualizar
      $(".button").children().val("Atualizar");
      $("#btn_atualizar").text("Atualizar");
      //pagina doador especial
      $(".contant_box_404")
        .children()
        .eq(0)
        .text("Oops... Aguarde mais um pouco!");
      $(".contant_box_404")
        .children()
        .eq(1)
        .text("A sua candidatura está a ser processada.");
      $("#label_appliance_nome").text("Nome");
      $("#label_appliance_sobrenome").text("Sobrenome");
      $("#label_appliance_identificação").text("Número de identificação");
      $("#label_appliance_civil").text("Estado civil");
      $("#label_appliance_contacto").text("Forma de contacto");
      $("#label_appliance_tel").text("Número de telemóvel");
      $("#label_appliance_email").text("Endereço de email");
      $("#label_appliance_motivacao").text("Motivação");
      //pagina candidaturas
      $(".card-title-inside").text("Família");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      familyCarden();
      localStorage.setItem("language", 2);
      //sidebar
      $(".nav-text").eq(0).text("Profile");
      $(".nav-text").eq(1).text("Special donation");
      $(".nav-text").eq(2).text("Applications");
      $(".nav-text").eq(3).text("Admin");
      $(".nav-text").eq(4).text("Logout");
      //perfil
      $(".title").eq(0).text("Profile settings");
      $(".title").eq(1).text("Preferences/Options");
      $(".title").eq(2).text("Profile photo");
      $(".title").eq(3).text("About you");
      $(".details").eq(0).text("Name");
      $(".details").eq(1).text("Second name");
      $(".details").eq(2).text("Email");
      $(".details").eq(3).text("Phone number");
      $(".details").eq(4).text("Address");
      $(".details").eq(5).text("Birthday");
      $(".details").eq(6).text("Nationality");
      $(".details").eq(7).text("Password");
      //preferencias/opcoes
      $(".preferencias").eq(0).text("Predefined language when logging in");
      $(".preferencias").eq(1).text("In case of contact, preferred method");
      $(".preferencias").eq(2).text("Cookie state preference");
      $(".preferencias").eq(3).text("Show settings after login");
      /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portuguese");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("English");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("French");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("No preference");
    }*/
      $(".linguagem").eq(0).text("No preference");
      $(".linguagem").eq(1).text("Portuguese");
      $(".linguagem").eq(2).text("English");
      $(".linguagem").eq(3).text("French");
      /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Phone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("No preference");
    }*/
      $(".contacto").eq(0).text("No preference");
      $(".contacto").eq(1).text("Phone");
      $(".contacto").eq(2).text("Email");
      /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activated");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Disabled");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("No preference");
    }*/
      $(".coockies").eq(0).text("No preference");
      $(".coockies").eq(1).text("Activated");
      $(".coockies").eq(2).text("Disabled");
      /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Yes");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("No");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("No preference");
    }*/
      $(".dados_login").eq(0).text("No preference");
      $(".dados_login").eq(1).text("Yes");
      $(".dados_login").eq(2).text("No");
      //butoes atualizar
      $(".button").children().val("Update");
      $("#btn_atualizar").text("Update");
      //pagina doador especial
      $(".contant_box_404").children().eq(0).text("Oops... wait a moment!");
      $(".contant_box_404")
        .children()
        .eq(1)
        .text("Your application is being processed.");
      $("#label_appliance_nome").text("Name");
      $("#label_appliance_sobrenome").text("Lastname");
      $("#label_appliance_identificacao").text("Identification number");
      $("#label_appliance_civil").text("Marital status");
      $("#label_appliance_contacto").text("Contact form");
      $("#label_appliance_tel").text("Phone number");
      $("#label_appliance_email").text("Email");
      $("#label_appliance_motivacao").text("Motivation");
      //pagina candidaturas
      $(".card-title-inside").text("Family");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      familyCardefr();
      localStorage.setItem("language", 3);
      //sidebar
      $(".nav-text").eq(0).text("Profil");
      $(".nav-text").eq(1).text("Don spécial");
      $(".nav-text").eq(2).text("Applications");
      $(".nav-text").eq(3).text("Admin");
      $(".nav-text").eq(4).text("Se déconnecter");
      //definicoes de perfil
      $(".title").eq(0).text("Paramètres de profil");
      $(".title").eq(1).text("Préférences/Options");
      $(".title").eq(2).text("Photo de profil");
      $(".title").eq(3).text("Au propos de vous");
      $(".details").eq(0).text("Nom");
      $(".details").eq(1).text("Nom de famille");
      $(".details").eq(2).text("Email");
      $(".details").eq(3).text("Numéro de téléphone");
      $(".details").eq(4).text("Adresse");
      $(".details").eq(5).text("Anniversaire");
      $(".details").eq(6).text("Nationalité");
      $(".details").eq(7).text("Mot de passe");
      //preferencias/opcoes
      $(".preferencias").eq(0).text("Langue prédéfinie lors de la connexion");
      $(".preferencias").eq(1).text("En cas de contact, méthode privilégiée");
      $(".preferencias").eq(2).text("Préférence d'état des cookies");
      $(".preferencias")
        .eq(3)
        .text("Afficher les paramètres après la connexion");
      /*
    if ($(".selected_linguagem").text() == "Português") {
      $(".selected_linguagem").text("Portugais");
    } else if ($(".selected_linguagem").text() == "Inglês") {
      $(".selected_linguagem").text("Anglaise");
    } else if ($(".selected_linguagem").text() == "Françes") {
      $(".selected_linguagem").text("Français");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_linguagem").text("Pas de préférence");
    }*/
      $(".linguagem").eq(0).text("Pas de préférence");
      $(".linguagem").eq(1).text("Portugais");
      $(".linguagem").eq(2).text("Anglaise");
      $(".linguagem").eq(3).text("Français");
      /*
    if ($(".selected_contacto").text() == "Telemóvel") {
      $(".selected_contacto").text("Téléphone");
    } else if ($(".selected_contacto").text() == "Email") {
      $(".selected_contacto").text("Email");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_contacto").text("Pas de préférence");
    }*/
      $(".contacto").eq(0).text("Pas de préférence");
      $(".contacto").eq(1).text("Téléphone");
      $(".contacto").eq(2).text("Email");
      /*
    if ($(".selected_coockies").text() == "Ativado") {
      $(".selected_coockies").text("Activé");
    } else if ($(".selected_coockies").text() == "Desativado") {
      $(".selected_coockies").text("Désactivé");
    } else if ($(".selected_linguagem").text() == "Sem preferência") {
      $(".selected_coockies").text("Pas de préférence");
    }*/
      $(".coockies").eq(0).text("Pas de préférence");
      $(".coockies").eq(1).text("Activé");
      $(".coockies").eq(2).text("Désactivé");
      /*
    if ($(".selected_dados_login").text() == "Sim") {
      $(".selected_dados_login").text("Oui");
    } else if ($(".selected_dados_login").text() == "Não") {
      $(".selected_dados_login").text("Au");
    } else if ($(".selected_dados_login").text() == "Sem preferência") {
      $(".selected_dados_login").text("Pas de préférence");
    }*/
      $(".dados_login").eq(0).text("Pas de préférence");
      $(".dados_login").eq(1).text("Oui");
      $(".dados_login").eq(2).text("Au");
      //butoes atualizar
      $(".button").children().val("Mettre à jour");
      $("#btn_atualizar").text("Mettre à jour");
      //pagina doador especial
      $(".contant_box_404")
        .children()
        .eq(0)
        .text("Oops... attendez un moment!");
      $(".contant_box_404")
        .children()
        .eq(1)
        .text("Votre candidature est en cours de traitement.");
      $("#label_appliance_nome").text("Nom");
      $("#label_appliance_sobrenome").text("Lastname");
      $("#label_appliance_identificacao").text("Numéro d'identification");
      $("#label_appliance_civil").text("état matrimonial");
      $("#label_appliance_contacto").text("Formulaire de contact");
      $("#label_appliance_tel").text("Numéro de portable");
      $("#label_appliance_email").text("Adresse e-mail");
      $("#label_appliance_motivacao").text("Motivation");
      //pagina candidaturas
      $(".card-title-inside").text("Famille");
    });
  }
});
