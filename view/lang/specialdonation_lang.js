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
    $(".footer-text").children().eq(1).text("Não te esqueças de subscrever para não perder nenhuma novidade.");
    $(".footer-menu-li").children().eq(0).text("Início");
    $(".footer-menu-li").children().eq(1).text("Termos");
    $(".footer-menu-li").children().eq(2).text("Privacidade");
    $(".footer-menu-li").children().eq(3).text("Politica");
    $(".footer-menu-li").children().eq(4).text("Contactos");
    //Flag
    $(".language-selected").html("Português");
    $(".language-selected").html('<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português');
    $(".title").html("O QUE É A DOAÇÃO ESPECIAL ?");
    $(".content-text").children().eq(0).html("Este novo conceito permite ao utilizador, caso se identifique com alguma família refugiada, proceder à doação, apenas a essa família, desde uma habitação, bens alimentares ou até mesmo algumas despesas mensais enquanto se reintegram na sociedade. Ao longo desta Ação promovemos a <b>transparência e a prestação</b> de contas perante todos os nossos doadores para as quais desejamos trabalhar.");
    $(".content-text").children().eq(1).html("A transparência é o princípio básico que rege a nossa gestão interna,<b> assegurando boas práticas e fomentando a eficiência e eficácia para alcançar os nossos objetivos.</b> Para isso, utilizamos diferentes instrumentos de acompanhamento e <b> avaliação, externos e internos,</b> com o objetivo de reforçar o compromisso com os nossos grupos de interesse e identificar áreas que necessitam de ser melhoradas,<b> ao nível da nossa gestão interna</b>, como parte de um processo de melhoria contínua.");
    $(".content-text").children().eq(2).html("A privacidade dos utilizadores e das famílias aqui reigstadas é uma questão de <b>extrema importância na nossa comunidade</b>. As informações fornecidas pelos utilizadores podem incluir dados de identificação pessoal, informações de contato, dados de localização e outras informações sensíveis. Portanto, é essencial que o website em questão tenha <b>medidas adequadas em vigor para proteger a privacidade dos seus utilizadores</b>.");
    $(".title_widget").text("Oops, parece que aconteceu algo de inesperado!");
    $(".content-text_widget").text("De forma a ter acesso à página Doação Especial crie uma conta ou se já tem conta criada, faça login acedendo ao ícon no canto superior direito.");
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
      '<img id="flags" src="../view/assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
    $(".title").html("WHAT IS THE SPECIAL DONATION?");
    $(".content-text").children().eq(0).html("This new concept allows users, if they identify with a refugee family, to donate housing, food or even some monthly expenses to that family while they reintegrate into society. Throughout this Action we promote the <b>transparency and the provision </b>of accounts before all our donors that we want to work for.");
    $(".content-text").children().eq(1).html("Transparency is the basic principle that governs our internal management,<b> ensuring good practices and fostering efficiency and effectiveness to achieve our objectives.</b> For this, we use different external monitoring and <b>evaluation instruments and internal,</b> with the aim of reinforcing the commitment to our stakeholders and identifying areas that need to be improved,<b> in terms of our internal management</b>, as part of an improvement process to be continued.");
    $(".content-text").children().eq(2).html("The privacy of users and families represented here is an issue of <b>extreme importance in our community</b>. Information provided by users may include personally identifiable information, contact information, location data and other sensitive information. It is therefore essential that the website in question has <b>appropriate measures in place to protect the privacy of its users</b>.");
    $(".title_widget").text("Oops, something unexpected happened!");
    $(".content-text_widget").text("In order to access the Special Donation page, create an account or if you already have an account, log in by accessing the icon in the upper right corner.");
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
      '<img id="flags" src="../view/assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
    $(".title").html("QU'EST-CE QUE LE DON SPÉCIAL ?");
    $(".content-text").children().eq(0).html("Ce nouveau concept permet aux usagers, s'ils s'identifient à une famille de réfugiés, de donner un logement, de la nourriture ou même certaines dépenses mensuelles à cette famille pendant leur réinsertion dans la société. Tout au long de cette Action, nous favorisons la <b>transparence et la mise à disposition</b> des comptes devant tous nos donateurs pour lesquels nous souhaitons travailler.");
    $(".content-text").children().eq(1).html("La transparence est le principe de base qui régit notre gestion interne,<b>garantissant les bonnes pratiques et favorisant l'efficience et l'efficacité pour atteindre nos objectifs.</b>Pour cela, nous utilisons différents instruments de suivi et <b>d'évaluation externes et internes,</ b> b> dans le but de renforcer l'engagement envers nos parties prenantes et d'identifier les points à améliorer,<b> au niveau de notre gestion interne</b>, dans le cadre d'un processus d'amélioration à poursuivre.");
    $(".content-text").children().eq(2).html("La vie privée des utilisateurs et des familles représentées ici est une question d'<b>extrême importance dans notre communauté</b>. Les informations fournies par les utilisateurs peuvent inclure des informations personnellement identifiables, des informations de contact, des données de localisation et d'autres informations sensibles. Il est donc essentiel que le site Web en question dispose de <b>mesures appropriées pour protéger la vie privée de ses utilisateurs</b>.");
    $(".title_widget").text("Oops, quelque chose d'inattendu s'est produit!");
    $(".content-text_widget").text("Pour accéder à la page de don spécial, créez un compte ou si vous avez déjà un compte, connectez-vous en accédant à l'icône dans le coin supérieur droit.");
    $(".title_widget").text("Oops, quelque chose d'inattendu s'est produit!");
    $(".content-text_widget").text("Pour accéder à la page de don spécial, créez un compte ou si vous avez déjà un compte, connectez-vous en accédant à l'icône dans le coin supérieur droit.");  
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
      $(".language-selected").html("Português");
      $(".language-selected").html(
        '<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
      $(".title").html("O QUE É A DOAÇÃO ESPECIAL ?");
      $(".content-text").children().eq(0).html("Este novo conceito permite ao utilizador, caso se identifique com alguma família refugiada, proceder à doação, apenas a essa família, desde uma habitação, bens alimentares ou até mesmo algumas despesas mensais enquanto se reintegram na sociedade. Ao longo desta Ação promovemos a <b>transparência e a prestação</b> de contas perante todos os nossos doadores para as quais desejamos trabalhar.");
      $(".content-text").children().eq(1).html("A transparência é o princípio básico que rege a nossa gestão interna,<b> assegurando boas práticas e fomentando a eficiência e eficácia para alcançar os nossos objetivos.</b> Para isso, utilizamos diferentes instrumentos de acompanhamento e <b> avaliação, externos e internos,</b> com o objetivo de reforçar o compromisso com os nossos grupos de interesse e identificar áreas que necessitam de ser melhoradas,<b> ao nível da nossa gestão interna</b>, como parte de um processo de melhoria contínua.");
      $(".content-text").children().eq(2).html("A privacidade dos utilizadores e das famílias aqui reigstadas é uma questão de <b>extrema importância na nossa comunidade</b>. As informações fornecidas pelos utilizadores podem incluir dados de identificação pessoal, informações de contato, dados de localização e outras informações sensíveis. Portanto, é essencial que o website em questão tenha <b>medidas adequadas em vigor para proteger a privacidade dos seus utilizadores</b>.");
      $(".title_widget").text("Oops, parece que aconteceu algo de inesperado!");
      $(".content-text_widget").text("De forma a ter acesso à página Doação Especial crie uma conta ou se já tem conta criada, faça login acedendo ao ícon no canto superior direito.");  
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
        '<img id="flags" src="../view/assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
      $(".title").html("WHAT IS THE SPECIAL DONATION?");
      $(".content-text").children().eq(0).html("This new concept allows users, if they identify with a refugee family, to donate housing, food or even some monthly expenses to that family while they reintegrate into society. Throughout this Action we promote the <b>transparency and the provision </b>of accounts before all our donors that we want to work for.");
    $(".content-text").children().eq(1).html("Transparency is the basic principle that governs our internal management,<b> ensuring good practices and fostering efficiency and effectiveness to achieve our objectives.</b> For this, we use different external monitoring and <b>evaluation instruments and internal,</b> with the aim of reinforcing the commitment to our stakeholders and identifying areas that need to be improved,<b> in terms of our internal management</b>, as part of an improvement process to be continued.");
    $(".content-text").children().eq(2).html("The privacy of users and families represented here is an issue of <b>extreme importance in our community</b>. Information provided by users may include personally identifiable information, contact information, location data and other sensitive information. It is therefore essential that the website in question has <b>appropriate measures in place to protect the privacy of its users</b>.");
    $(".title_widget").text("Oops, something unexpected happened!");
    $(".content-text_widget").text("In order to access the Special Donation page, create an account or if you already have an account, log in by accessing the icon in the upper right corner.");
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
        '<img id="flags" src="../view/assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
      $(".title").html("QU'EST-CE QUE LE DON SPÉCIAL ?");
      $(".content-text").children().eq(0).html("Ce nouveau concept permet aux usagers, s'ils s'identifient à une famille de réfugiés, de donner un logement, de la nourriture ou même certaines dépenses mensuelles à cette famille pendant leur réinsertion dans la société. Tout au long de cette Action, nous favorisons la <b>transparence et la mise à disposition</b> des comptes devant tous nos donateurs pour lesquels nous souhaitons travailler.");
    $(".content-text").children().eq(1).html("La transparence est le principe de base qui régit notre gestion interne,<b>garantissant les bonnes pratiques et favorisant l'efficience et l'efficacité pour atteindre nos objectifs.</b>Pour cela, nous utilisons différents instruments de suivi et <b>d'évaluation externes et internes,</ b> b> dans le but de renforcer l'engagement envers nos parties prenantes et d'identifier les points à améliorer,<b> au niveau de notre gestion interne</b>, dans le cadre d'un processus d'amélioration à poursuivre.");
    $(".content-text").children().eq(2).html("La vie privée des utilisateurs et des familles représentées ici est une question d'<b>extrême importance dans notre communauté</b>. Les informations fournies par les utilisateurs peuvent inclure des informations personnellement identifiables, des informations de contact, des données de localisation et d'autres informations sensibles. Il est donc essentiel que le site Web en question dispose de <b>mesures appropriées pour protéger la vie privée de ses utilisateurs</b>.");
    $(".title_widget").text("Oops, quelque chose d'inattendu s'est produit!");
    $(".content-text_widget").text("Pour accéder à la page de don spécial, créez un compte ou si vous avez déjà un compte, connectez-vous en accédant à l'icône dans le coin supérieur droit.");  
  });
  }
});