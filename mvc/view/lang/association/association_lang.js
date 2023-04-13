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
    //Comentários
    $(".lang_coment").text("Comentários");
    $(".float-end").children().eq(0).text("Enviar comentário");
    $(".float-end").children().eq(1).text("Cancelar");
    $(".comentario").text("Mais comentários");
    $(".errorAlertlogin").text("É necessário preencher o(s) campo(s)!");
    $(".errorAlertlogin2").text("Endereço de email ou palavra chave incorretos.");
    $(".errorAlertcomentarios").text("Oops, algo de inesperado aconteceu. Por favor recarregue a página ou tente novamente mais tarde.");
    $(".errorAlert").text("É necessário preencher o campo!");
    //Login
    $(".fw-normal").eq(0).text("Entre na sua conta");
    $(".form-label").eq(0).text("Endereço de email");
    $(".form-label").eq(1).text("Palavra chave");
    $(".form-btn_login").text("Entrar");
    $(".text-muted").eq(0).text("Esqueceu-se da palavra chave?");
    $(".text").html('Não têm conta? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Registe-se aqui!</a>');
    $(".text-muted").eq(1).text("Termos.");
    $(".text-muted").eq(2).text("Política de privacidade");
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
    //Comentários
    $(".lang_coment").text("Comments");
    $(".float-end").children().eq(0).text("Send comment");
    $(".float-end").children().eq(1).text("Cancel");
    $(".comentario").text("More Comments");
    $(".errorAlertlogin").text("You must fill in the field(s)!");
    $(".errorAlertlogin2").text("Incorrect email address or password.");
    $(".errorAlertcomentarios").text("Oops, something unexpected happened. Please reload the page or try again later.");
    $(".errorAlert").text("You must fill in the field!");
    //Login
    $(".fw-normal").eq(0).text("Entre na sua conta");
    $(".fw-normal").eq(0).text("Login into your account");
    $(".form-label").eq(0).text("Email address");
    $(".form-label").eq(1).text("Password");
    $(".form-btn_login").text("Login");
    $(".text-muted").eq(0).text("Forgot your password?");
    $(".text").html('Dont have account? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Register here!</a>');
    $(".text-muted").eq(1).text("Terms.");
    $(".text-muted").eq(2).text("Privacy Policy");
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
    $(".li").children().eq(0).html('<i class="fa-solid fa-house"></i> Commencer');
    $(".li").children().eq(1).html('<i class="fa-solid fa-handshake-angle"></i> Faire du Bénévolat');
    $(".li").children().eq(2).html('<i class="fa-solid fa-circle-dollar-to-slot"></i> Don spécial');
    $(".li").children().eq(3).html('<i class="fa-solid fa-newspaper"></i> Des nouvelles');
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
    $(".footer-text").children().eq(1).text("N'oubliez pas de vous abonner pour ne rien rater de l'actualité.");
    $(".footer-menu-li").children().eq(0).text("Commencer");
    $(".footer-menu-li").children().eq(1).text("Conditions");
    $(".footer-menu-li").children().eq(2).text("Intimité");
    $(".footer-menu-li").children().eq(3).text("Politique");
    $(".footer-menu-li").children().eq(4).text("Contacts");
    //Flag
    $(".language-selected").text("Français");
    $(".language-selected").html( '<img id="flags" src="./assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français');
    //Comentários
    $(".lang_coment").text("Commentaires");
    $(".float-end").children().eq(0).text("Envoyer un commentaire");
    $(".float-end").children().eq(1).text("Annuler");
    $(".comentario").text("Plus de commentaires");
    $(".errorAlertlogin").text("Vous devez remplir le(s) champ(s)!");
    $(".errorAlertlogin2").text("Adresse e-mail ou mot de passe incorrect.");
    $(".errorAlertcomentarios").text("Oups, quelque chose d'inattendu s'est produit. Veuillez recharger la page ou réessayer plus tard.");
    $(".errorAlert").text("Vous devez remplir le champ!");
    //Login
    $(".fw-normal").eq(0).text("Connectez-vous à votre compte");
    $(".form-label").eq(0).text("Adresse e-mail");
    $(".form-label").eq(1).text("Mot de passe");
    $(".form-btn_login").text("Connexion");
    $(".text-muted").eq(0).text("Mot de passe oublié?");
    $(".text").html('Ne pas avoir de compte? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Inscrivez-vous ici!</a>');
    $(".text-muted").eq(1).text("Conditions.");
    $(".text-muted").eq(2).text("Politique de confidentialité");
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
      //Comentários
      $(".lang_coment").text("Comentários");
      $(".float-end").children().eq(0).text("Enviar comentário");
      $(".float-end").children().eq(1).text("Cancelar");
      $(".comentario").text("Mais comentários");
      $(".errorAlertlogin").text("É necessário preencher o(s) campo(s)!");
    $(".errorAlertlogin2").text("Endereço de email ou palavra chave incorretos.");
    $(".errorAlertcomentarios").text("Oops, algo de inesperado aconteceu. Por favor recarregue a página ou tente novamente mais tarde.");
    $(".errorAlert").text("É necessário preencher o campo!");
    //Login
    $(".form-label").eq(0).text("Endereço de email");
    $(".form-label").eq(1).text("Palavra chave");
    $(".form-btn_login").text("Entrar");
    $(".text-muted").eq(0).text("Esqueceu-se da palavra chave?");
    $(".text").html('Não têm conta? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Registe-se aqui!</a>');
    $(".text-muted").eq(1).text("Termos.");
    $(".text-muted").eq(2).text("Política de privacidade");
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
      //Comentários
      $(".lang_coment").text("Comments");
      $(".float-end").children().eq(0).text("Send comment");
      $(".float-end").children().eq(1).text("Cancel");
      $(".comentario").text("More Comments");
      $(".errorAlertlogin").text("You must fill in the field(s)!");
      $(".errorAlertlogin2").text("Incorrect email address or password.");
      $(".errorAlertcomentarios").text("Oops, something unexpected happened. Please reload the page or try again later.");
      $(".errorAlert").text("You must fill in the field!");
      //Login
      $(".fw-normal").eq(0).text("Login into your account");
    $(".form-label").eq(0).text("Email address");
    $(".form-label").eq(1).text("Password");
    $(".form-btn_login").text("Login");
    $(".text-muted").eq(0).text("Forgot your password?");
    $(".text").html('Dont have account? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Register here!</a>');
    $(".text-muted").eq(1).text("Terms.");
    $(".text-muted").eq(2).text("Privacy Policy");
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
      //Comentários
      $(".lang_coment").text("Commentaires");
      $(".float-end").children().eq(0).text("Envoyer un commentaire");
      $(".float-end").children().eq(1).text("Annuler");
      $(".comentario").text("Plus de commentaires");
      $(".errorAlertlogin").text("Vous devez remplir le(s) champ(s)!");
    $(".errorAlertlogin2").text("Adresse e-mail ou mot de passe incorrect.");
    $(".errorAlertcomentarios").text("Oups, quelque chose d'inattendu s'est produit. Veuillez recharger la page ou réessayer plus tard.");
    $(".errorAlert").text("Vous devez remplir le champ!");
     //Login
     $(".fw-normal").eq(0).text("Connectez-vous à votre compte");
     $(".form-label").eq(0).text("Adresse e-mail");
     $(".form-label").eq(1).text("Mot de passe");
     $(".form-btn_login").text("Connexion");
     $(".text-muted").eq(0).text("Mot de passe oublié?");
     $(".text").html('Ne pas avoir de compte? <a href="http://localhost/STR/login/login.php" class="link" style="color: #202020;">Inscrivez-vous ici!</a>');
     $(".text-muted").eq(1).text("Conditions.");
     $(".text-muted").eq(2).text("Politique de confidentialité");
    });
  }
});