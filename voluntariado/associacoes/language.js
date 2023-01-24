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
        '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
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
        '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
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
        '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
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
          '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
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
          '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
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
          '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
        );
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
        '<img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
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
        '<img id="flags" src="images/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
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
        '<img id="flags" src="images/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
    });
  }
  