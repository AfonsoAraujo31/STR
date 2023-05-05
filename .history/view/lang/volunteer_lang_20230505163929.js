function associacoes_pt() {
  $(".placeholder").attr("placeholder", "Procure uma associação");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_pt.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
                <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">Ver mais</a></button>
        </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}
function associacoes_en() {
  $(".placeholder").attr("placeholder", "Search for an association");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_en.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
              <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">See More</a></button>
        </div>
      </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}
function associacoes_fr() {
  $(".placeholder").attr("placeholder", "Procure uma associação");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_fr.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
              <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">Voir plus</a></button>
        </div>
      </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}

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
    //Footer
    $(".footer_info").children().eq(0).text("Início");
    $(".footer_info").children().eq(1).text("Voluntariado");
    $(".footer_info").children().eq(2).text("Doação Especial");
    $(".footer_info").children().eq(3).text("Iniciar sessão");
    $(".cta-text").children().eq(0).text("Encontra-nos");
    $(".cta-text").children().eq(3).text("Contacta-nos");
    $(".cta-text").children().eq(5).text("Escreve-nos");
    $(".footer-social-icon").children().eq(0).text("Segue-nos");
    $(".footer-widget-heading").children().eq(1).text("Subscreve");
    $(".footer-text")
      .children()
      .eq(1)
      .text("Não te esqueças de subscrever para não perder nenhuma novidade.");
    $(".footer-menu-li").children().eq(0).text("Início");
    $(".footer-menu-li").children().eq(1).text("Termos");
    $(".footer-menu-li").children().eq(2).text("Privacidade");
    $(".footer-menu-li").children().eq(3).text("Politica");
    $(".footer-menu-li").children().eq(4).text("Contactos");
    //Flag
    $(".language-selected").text("Português");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
    associacoes_pt();
    $(".big-text").text("OS NOSSOS ASSOCIADOS");
    $(".content-text").text("Nossos associados são fundamentais para o sucesso do nosso programa de voluntariado. Através de sua dedicação e comprometimento, temos conseguido ajudar cada vez mais pessoas e causas importantes em nossa comunidade. Cada associado traz consigo habilidades e experiências únicas que são valiosas para nossos projetos.");
    $(".number-text").eq(0).text("ASSOCIAÇÕES");
    $(".number-text").eq(1).text("VOLUNTÁRIOS");
    $(".number-text").eq(2).text("PAÍSES");
    $(".number-text").eq(3).text("COLABORADORES");
    $(".number-text").eq(4).text("MEMBROS");
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
    //Footer
    $(".footer_info").children().eq(0).text("Home");
    $(".footer_info").children().eq(1).text("Volunteer");
    $(".footer_info").children().eq(2).text("Special Donate");
    $(".footer_info").children().eq(3).text("Sing Up/Sing In");
    $(".cta-text").children().eq(0).text("Find us");
    $(".cta-text").children().eq(2).text("Call us");
    $(".cta-text").children().eq(4).text("Mail us");
    $(".footer-social-icon").children().eq(0).text("Follow us");
    $(".footer-widget-heading").children().eq(1).text("Subscribe");
    $(".footer-text")
      .children()
      .eq(1)
      .text("Don't forget to subscribe so you don't miss any news.");
    $(".footer-menu-li").children().eq(0).text("Home");
    $(".footer-menu-li").children().eq(1).text("Terms");
    $(".footer-menu-li").children().eq(2).text("Privacy");
    $(".footer-menu-li").children().eq(3).text("Policy");
    $(".footer-menu-li").children().eq(4).text("Contact");
    //Flag
    $(".language-selected").text("English");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
    associacoes_en();
    $(".big-text").text("OUR ASSOCIATES");
    $(".content-text").text("Our associates are critical to the success of our volunteer program. Through their dedication and commitment, we have been able to help more and more important people and causes in our community. Each associate brings with them unique skills and experiences that are valuable to our projects.");
    $(".number-text").eq(0).text("ASSOCIATIONS");
    $(".number-text").eq(1).text("VOLUNTEERS");
    $(".number-text").eq(2).text("COUNTRIES");
    $(".number-text").eq(3).text("COLLABORATORS");
    $(".number-text").eq(4).text("MEMBERS");
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
    //Footer
    $(".footer_info").children().eq(0).text("Commencer");
    $(".footer_info").children().eq(1).text("Faire du Bénévolat");
    $(".footer_info").children().eq(2).text("Don spécial");
    $(".footer_info").children().eq(3).text("Commencer la session");
    $(".cta-text").children().eq(0).text("Trouve nous");
    $(".cta-text").children().eq(2).text("Appelez-nous");
    $(".cta-text").children().eq(4).text("Écrivez-nous");
    $(".footer-social-icon").children().eq(0).text("Suivez-nous");
    $(".footer-widget-heading").children().eq(0).text("Liens");
    $(".footer-widget-heading").children().eq(1).text("S'abonner");
    $(".footer-text")
      .children()
      .eq(1)
      .text("N'oubliez pas de vous abonner pour ne rien rater de l'actualité.");
    $(".footer-menu-li").children().eq(0).text("Commencer");
    $(".footer-menu-li").children().eq(1).text("Conditions");
    $(".footer-menu-li").children().eq(2).text("Intimité");
    $(".footer-menu-li").children().eq(3).text("Politique");
    $(".footer-menu-li").children().eq(4).text("Contacts");
    //Flag
    $(".language-selected").text("Français");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
    associacoes_fr();
    $(".big-text").text("NOS ASSOCIÉS");
    $(".content-text").text("Nos associés sont essentiels au succès de notre programme de bénévolat. Grâce à leur dévouement et à leur engagement, nous avons pu aider de plus en plus de personnes et de causes importantes dans notre communauté. Chaque associé apporte avec lui des compétences et des expériences uniques qui sont précieuses pour nos projets.");
    $(".number-text").eq(0).text("ASSOCIATIONS");
    $(".number-text").eq(1).text("VOLUNTEERS");
    $(".number-text").eq(2).text("COUNTRIES");
    $(".number-text").eq(3).text("COLLABORATORS");
    $(".number-text").eq(4).text("MEMBERS");
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
      //Footer
      $(".footer_info").children().eq(0).text("Início");
      $(".footer_info").children().eq(1).text("Voluntariado");
      $(".footer_info").children().eq(2).text("Doação Especial");
      $(".footer_info").children().eq(3).text("Iniciar sessão");
      $(".cta-text").children().eq(0).text("Encontra-nos");
      $(".cta-text").children().eq(3).text("Contacta-nos");
      $(".cta-text").children().eq(5).text("Escreve-nos");
      $(".footer-social-icon").children().eq(0).text("Segue-nos");
      $(".footer-widget-heading").children().eq(1).text("Subscreve");
      $(".footer-text")
        .children()
        .eq(1)
        .text(
          "Não te esqueças de subscrever para não perder nenhuma novidade."
        );
      $(".footer-menu-li").children().eq(0).text("Início");
      $(".footer-menu-li").children().eq(1).text("Termos");
      $(".footer-menu-li").children().eq(2).text("Privacidade");
      $(".footer-menu-li").children().eq(3).text("Politica");
      $(".footer-menu-li").children().eq(4).text("Contactos");
      //Flag
      $(".language-selected").text("Português");
      $(".language-selected").html(
        '<img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
      associacoes_pt();
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
      //Footer
      $(".footer_info").children().eq(0).text("Home");
      $(".footer_info").children().eq(1).text("Volunteer");
      $(".footer_info").children().eq(2).text("Special Donate");
      $(".footer_info").children().eq(3).text("Sing Up/Sing In");
      $(".cta-text").children().eq(0).text("Find us");
      $(".cta-text").children().eq(2).text("Call us");
      $(".cta-text").children().eq(4).text("Mail us");
      $(".footer-social-icon").children().eq(0).text("Follow us");
      $(".footer-widget-heading").children().eq(1).text("Subscribe");
      $(".footer-text")
        .children()
        .eq(1)
        .text("Don't forget to subscribe so you don't miss any news.");
      $(".footer-menu-li").children().eq(0).text("Home");
      $(".footer-menu-li").children().eq(1).text("Terms");
      $(".footer-menu-li").children().eq(2).text("Privacy");
      $(".footer-menu-li").children().eq(3).text("Policy");
      $(".footer-menu-li").children().eq(4).text("Contact");
      //Flag
      $(".language-selected").text("English");
      $(".language-selected").html(
        '<img id="flags" src="./assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
      associacoes_en();
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
      //Footer
      $(".footer_info").children().eq(0).text("Commencer");
      $(".footer_info").children().eq(1).text("Faire du Bénévolat");
      $(".footer_info").children().eq(2).text("Don spécial");
      $(".footer_info").children().eq(3).text("Commencer la session");
      $(".cta-text").children().eq(0).text("Trouve nous");
      $(".cta-text").children().eq(2).text("Appelez-nous");
      $(".cta-text").children().eq(4).text("Écrivez-nous");
      $(".footer-social-icon").children().eq(0).text("Suivez-nous");
      $(".footer-widget-heading").children().eq(0).text("Liens");
      $(".footer-widget-heading").children().eq(1).text("S'abonner");
      $(".footer-text")
        .children()
        .eq(1)
        .text(
          "N'oubliez pas de vous abonner pour ne rien rater de l'actualité."
        );
      $(".footer-menu-li").children().eq(0).text("Commencer");
      $(".footer-menu-li").children().eq(1).text("Conditions");
      $(".footer-menu-li").children().eq(2).text("Intimité");
      $(".footer-menu-li").children().eq(3).text("Politique");
      $(".footer-menu-li").children().eq(4).text("Contacts");
      //Flag
      $(".language-selected").text("Français");
      $(".language-selected").html(
        '<img id="flags" src="./assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
      associacoes_fr();
    });
  }
});

if (localStorage.getItem("language") == 1) {
  $(function () {
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
    //Footer
    $(".footer_info").children().eq(0).text("Início");
    $(".footer_info").children().eq(1).text("Voluntariado");
    $(".footer_info").children().eq(2).text("Doação Especial");
    $(".footer_info").children().eq(3).text("Iniciar sessão");
    $(".cta-text").children().eq(0).text("Encontra-nos");
    $(".cta-text").children().eq(3).text("Contacta-nos");
    $(".cta-text").children().eq(5).text("Escreve-nos");
    $(".footer-social-icon").children().eq(0).text("Segue-nos");
    $(".footer-widget-heading").children().eq(1).text("Subscreve");
    $(".footer-text")
      .children()
      .eq(1)
      .text("Não te esqueças de subscrever para não perder nenhuma novidade.");
    $(".footer-menu-li").children().eq(0).text("Início");
    $(".footer-menu-li").children().eq(1).text("Termos");
    $(".footer-menu-li").children().eq(2).text("Privacidade");
    $(".footer-menu-li").children().eq(3).text("Politica");
    $(".footer-menu-li").children().eq(4).text("Contactos");
    //Flag
    $(".language-selected").text("Português");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
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
      .html('<i class="fa-solid fa-circle-dollar-to-slot"></i> Special Donate');
    $(".li")
      .children()
      .eq(3)
      .html('<i class="fa-solid fa-newspaper"></i> News');
    //language
    $(".lang").children().eq(0).text("Portuguese");
    $(".lang").children().eq(1).text("English");
    $(".lang").children().eq(2).text("French");
    //Footer
    $(".footer_info").children().eq(0).text("Home");
    $(".footer_info").children().eq(1).text("Volunteer");
    $(".footer_info").children().eq(2).text("Special Donate");
    $(".footer_info").children().eq(3).text("Sing Up/Sing In");
    $(".cta-text").children().eq(0).text("Find us");
    $(".cta-text").children().eq(2).text("Call us");
    $(".cta-text").children().eq(4).text("Mail us");
    $(".footer-social-icon").children().eq(0).text("Follow us");
    $(".footer-widget-heading").children().eq(1).text("Subscribe");
    $(".footer-text")
      .children()
      .eq(1)
      .text("Don't forget to subscribe so you don't miss any news.");
    $(".footer-menu-li").children().eq(0).text("Home");
    $(".footer-menu-li").children().eq(1).text("Terms");
    $(".footer-menu-li").children().eq(2).text("Privacy");
    $(".footer-menu-li").children().eq(3).text("Policy");
    $(".footer-menu-li").children().eq(4).text("Contact");
    //Flag
    $(".language-selected").text("English");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
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
    //Footer
    $(".footer_info").children().eq(0).text("Commencer");
    $(".footer_info").children().eq(1).text("Faire du Bénévolat");
    $(".footer_info").children().eq(2).text("Don spécial");
    $(".footer_info").children().eq(3).text("Commencer la session");
    $(".cta-text").children().eq(0).text("Trouve nous");
    $(".cta-text").children().eq(2).text("Appelez-nous");
    $(".cta-text").children().eq(4).text("Écrivez-nous");
    $(".footer-social-icon").children().eq(0).text("Suivez-nous");
    $(".footer-widget-heading").children().eq(0).text("Liens");
    $(".footer-widget-heading").children().eq(1).text("S'abonner");
    $(".footer-text")
      .children()
      .eq(1)
      .text("N'oubliez pas de vous abonner pour ne rien rater de l'actualité.");
    $(".footer-menu-li").children().eq(0).text("Commencer");
    $(".footer-menu-li").children().eq(1).text("Conditions");
    $(".footer-menu-li").children().eq(2).text("Intimité");
    $(".footer-menu-li").children().eq(3).text("Politique");
    $(".footer-menu-li").children().eq(4).text("Contacts");
    //Flag
    $(".language-selected").text("Français");
    $(".language-selected").html(
      '<img id="flags" src="./assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
  });
}
