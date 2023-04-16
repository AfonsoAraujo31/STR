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
    $(".language-selected").html("Português");
    $(".language-selected").html(
      '<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
    //Slideshow
    $(".title_slide1").text("Bem vindo!");
    $(".text_slide1").text("Descrição");
    $(".title_slide2").text("Ajuda os mais necessitados!");
    $(".text_slide2").text("Descrição");
    $(".title_slide3").text("Inscreve-te!");
    $(".text_slide3").text("Descrição");
    $(".title_slide4").text("Não sei!");
    $(".text_slide4").text("Descrição");
    $(".btn-inner_slide1").text("Ver mais");
    $(".btn-inner_slide2").text("Ver mais");
    $(".btn-inner_slide3").text("Ver mais");
    $(".btn-inner_slide4").text("Ver mais");
    //cards
    $(".tittle1_card").text("Inscreve-te!");
    $(".tittle2_card").text("Candidata-te!");
    $(".tittle3_card").text("Ajuda!");
    $(".text1_card").html(
      "É rápido e fácil de aceder. <br/> Basta clicares em Iniciar sessão no topo da página e procederes ao registo no nosso website."
    );
    $(".text2_card").text(
      "Agora que fizeste o registo está apto para te candidatares. Para isso deves ir ao teu perfil e encontrarás a secção da Doação Especial."
    );
    $(".text3_card").html(
      "Foste aceite? Perfeito! <br/> Agora podes começar a ajudar os mais necessitados. Obrigado pela tua contribuição!"
    );
    //cards about
    $(".about_tittle").text("Sobre nós");
    $(".text").text(
      "O STR é um website de Voluntariado Social abrangendo unicamente os Refugiados. Resringe-se a este tema, por ser um assunto da atualidade, e de extrema relevância. Para colmatar este problema o STR disponibliza ferramentas onde particulares e empresas podem candidatar-se no auxílio a famílias refugiadas, permitindo não ser só informativo, mas também interativo."
    );
    $(".skills").children().eq(0).text("Voluntariado");
    $(".skills").children().eq(1).text("Interativo & Informativo");
    $(".skills").children().eq(2).text("Refugiados");
    //bar chart
    $(".content-title").text("Quantos refugiados existem no mundo?");
    $(".content-text").html(
      "Pelo menos 89,3 milhões de pessoas em todo o mundo foram forçadas a deixar suas casas. Entre elas estão quase 27,1 milhões de refugiados, cerca de metade dos quais têm menos de 18 anos, pessoas a quem foi negada a nacionalidade e que não têm acesso a direitos básicos como educação, saúde, emprego e liberdade de movimento. <br><br>O gráfico ao lado mostra que 65% saíram de apenas cinco países. Os números não somam 100 por cento devido a arredondamentos, este também exclui refugiados palestinos sob mandato da UNRWA. Este é o número de refugiados venezuelanos e venezuelanos deslocados no exterior. "
    );
    $(".chart-caption").eq(0).text("Síria");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afeganistão");
    $(".chart-caption").eq(3).text("Sudão do Sul");
    $(".chart-caption").eq(4).text("Outros");
    criarCookies();
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
    //Slideshow
    $(".title_slide1").text("Welcome!");
    $(".text_slide1").text("Description");
    $(".title_slide2").text("Help the most needy!");
    $(".text_slide2").text("Description");
    $(".title_slide3").text("Sing up!");
    $(".text_slide3").text("Description");
    $(".title_slide4").text("I don't know!");
    $(".text_slide4").text("Descrição");
    $(".btn-inner_slide1").text("See more");
    $(".btn-inner_slide2").text("See more");
    $(".btn-inner_slide3").text("See more");
    $(".btn-inner_slide4").text("See more");
    //cards
    $(".tittle1_card").text("Sign up!");
    $(".tittle2_card").text("Apply!");
    $(".tittle3_card").text("Help!");
    $(".text1_card").html(
      "It's fast and easy to access. <br/> Just click Login at the top of the page and register on our website."
    );
    $(".text2_card").text(
      "Now that you have registered you are ready to apply. To do this, go to your profile and you will find the Special Donation section."
    );
    $(".text3_card").html(
      "Were you accepted? Perfect! <br/> Now you can start helping those in need. Thanks for your contribution!"
    );
    //cards about
    $(".about_tittle").text("About us");
    $(".text").text(
      "STR is a Social Volunteering website covering only Refugees. This theme is restricted to being a topical subject, and of extreme relevance. To overcome this problem, the STR provides tools where individuals and companies can apply to help refugee families, allowing it not only to be informative, but also interactive."
    );
    $(".skills").children().eq(0).text("Volunteer");
    $(".skills").children().eq(1).text("Interactive & Informative");
    $(".skills").children().eq(2).text("Refugees");
    //bar chart
    $(".content-title").text("How many refugees are there in the world?");
    $(".content-text").html(
      "At least 89.3 million people around the world have been forced from their homes. Among them are nearly 27.1 million refugees, about half of whom are under the age of 18, people who have been denied nationality and who lack access to basic rights such as education, health, employment and freedom of movement. <br><br>The graph on the side shows that 65% came from just five countries. Numbers do not add up to 100 percent due to rounding, this also excludes Palestinian refugees under UNRWA mandate. This is the number of Venezuelan refugees and Venezuelans displaced abroad."
    );
    $(".chart-caption").eq(0).text("Syria");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afghanistan");
    $(".chart-caption").eq(3).text("Southern Sudan");
    $(".chart-caption").eq(4).text("Others");
    criarCookies();
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
    //Slideshow
    $(".title_slide1").text("Bienvenue!");
    $(".text_slide1").text("Description");
    $(".title_slide2").text("Aidez les plus nécessiteux!");
    $(".text_slide2").text("Description");
    $(".title_slide3").text("S'inscrire!");
    $(".text_slide3").text("Description");
    $(".title_slide4").text("je ne sais pas!");
    $(".text_slide4").text("Description");
    $(".btn-inner_slide1").text("Voir plus");
    $(".btn-inner_slide2").text("Voir plus");
    $(".btn-inner_slide3").text("Voir plus");
    $(".btn-inner_slide4").text("Voir plus");
    //cards
    $(".tittle1_card").text("S'inscrire!");
    $(".tittle2_card").text("Appliquer!");
    $(".tittle3_card").text("Aider!");
    $(".text1_card").html(
      "C'est rapide et facile d'accès. <br/> Cliquez simplement sur Connexion en haut de la page et inscrivez-vous sur notre site Web."
    );
    $(".text2_card").text(
      "Maintenant que vous êtes inscrit, vous êtes prêt à postuler. Pour ce faire, rendez-vous sur votre profil et vous trouverez la section Donation spéciale."
    );
    $(".text3_card").html(
      "Avez-vous été accepté? Parfait! <br/> Vous pouvez maintenant commencer à aider ceux qui en ont besoin. Merci pour votre contribution !"
    );
    //cards about
    $(".about_tittle").text("À propos de nous");
    $(".text").text(
      "STR est un site Web de volontariat social couvrant uniquement les réfugiés. Ce thème se limite à être un sujet d'actualité, et d'une extrême pertinence. Pour surmonter ce problème, le STR fournit des outils auxquels les particuliers et les entreprises peuvent postuler pour aider les familles de réfugiés, ce qui lui permet non seulement d'être informatif, mais également interactif."
    );
    $(".skills").children().eq(0).text("Bénévole");
    $(".skills").children().eq(1).text("Interactif & Informatif");
    $(".skills").children().eq(2).text("Réfugiées");
    //bar chart
    $(".content-title").text("Combien y a-t-il de réfugiés dans le monde ?");
    $(".content-text").html(
      "Au moins 89,3 millions de personnes dans le monde ont été chassées de chez elles. Parmi eux se trouvent près de 27,1 millions de réfugiés, dont environ la moitié ont moins de 18 ans, des personnes à qui la nationalité a été refusée et qui n'ont pas accès aux droits fondamentaux tels que l'éducation, la santé, l'emploi et la liberté de circulation. <br><br>Le graphique ci-contre montre que 65 % provenaient de cinq pays seulement. Les chiffres ne totalisent pas 100 % en raison des arrondis, ce qui exclut également les réfugiés palestiniens sous mandat de l'UNRWA. C'est le nombre de réfugiés vénézuéliens et de Vénézuéliens déplacés à l'étranger."
    );
    $(".chart-caption").eq(0).text("Syrie");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afghanistan");
    $(".chart-caption").eq(3).text("Soudan du Sud");
    $(".chart-caption").eq(4).text("Les autres");
    criarCookies();
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
      //Slideshow
      $(".title_slide1").text("Bem vindo!");
      $(".text_slide1").text("Descrição");
      $(".title_slide2").text("Ajuda os mais necessitados!");
      $(".text_slide2").text("Descrição");
      $(".title_slide3").text("Inscreve-te!");
      $(".text_slide3").text("Descrição");
      $(".title_slide4").text("Não sei!");
      $(".text_slide4").text("Descrição");
      $(".btn-inner_slide1").text("Ver mais");
      $(".btn-inner_slide2").text("Ver mais");
      $(".btn-inner_slide3").text("Ver mais");
      $(".btn-inner_slide4").text("Ver mais");
      //cards
      $(".tittle1_card").text("Inscreve-te!");
      $(".tittle2_card").text("Candidata-te!");
      $(".tittle3_card").text("Ajuda!");
      $(".text1_card").html(
        "É rápido e fácil de aceder. <br/> Basta clicares em Iniciar sessão no topo da página e procederes ao registo no nosso website."
      );
      $(".text2_card").text(
        "Agora que fizeste o registo está apto para te candidatares. Para isso deves ir ao teu perfil e encontrarás a secção da Doação Especial."
      );
      $(".text3_card").html(
        "Foste aceite? Perfeito! <br/> Agora podes começar a ajudar os mais necessitados. Obrigado pela tua contribuição!"
      );
      //cards about
      $(".about_tittle").text("Sobre nós");
      $(".text").text(
        "O STR é um website de Voluntariado Social abrangendo unicamente os Refugiados. Resringe-se a este tema, por ser um assunto da atualidade, e de extrema relevância. Para colmatar este problema o STR disponibliza ferramentas onde particulares e empresas podem candidatar-se no auxílio a famílias refugiadas, permitindo não ser só informativo, mas também interativo."
      );
      $(".skills").children().eq(0).text("Voluntariado");
      $(".skills").children().eq(1).text("Interativo & Informativo");
      $(".skills").children().eq(2).text("Refugiados");
      //bar chart
      $(".content-title").text("Quantos refugiados existem no mundo?");
      $(".content-text").html(
        "Pelo menos 89,3 milhões de pessoas em todo o mundo foram forçadas a deixar suas casas. Entre elas estão quase 27,1 milhões de refugiados, cerca de metade dos quais têm menos de 18 anos, pessoas a quem foi negada a nacionalidade e que não têm acesso a direitos básicos como educação, saúde, emprego e liberdade de movimento. <br><br>O gráfico ao lado mostra que 65% saíram de apenas cinco países. Os números não somam 100 por cento devido a arredondamentos, este também exclui refugiados palestinos sob mandato da UNRWA. Este é o número de refugiados venezuelanos e venezuelanos deslocados no exterior. "
      );
      $(".chart-caption").eq(0).text("Síria");
      $(".chart-caption").eq(1).text("Venezuela");
      $(".chart-caption").eq(2).text("Afeganistão");
      $(".chart-caption").eq(3).text("Sudão do Sul");
      $(".chart-caption").eq(4).text("Outros");
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
      //Slideshow
      $(".title_slide1").text("Welcome!");
      $(".text_slide1").text("Description");
      $(".title_slide2").text("Help the most needy!");
      $(".text_slide2").text("Description");
      $(".title_slide3").text("Sing up!");
      $(".text_slide3").text("Description");
      $(".title_slide4").text("I don't know!");
      $(".text_slide4").text("Descrição");
      $(".btn-inner_slide1").text("See more");
      $(".btn-inner_slide2").text("See more");
      $(".btn-inner_slide3").text("See more");
      $(".btn-inner_slide4").text("See more");
      //cards
      $(".tittle1_card").text("Sign up!");
      $(".tittle2_card").text("Apply!");
      $(".tittle3_card").text("Help!");
      $(".text1_card").html(
        "It's fast and easy to access. <br/> Just click Login at the top of the page and register on our website."
      );
      $(".text2_card").text(
        "Now that you have registered you are ready to apply. To do this, go to your profile and you will find the Special Donation section."
      );
      $(".text3_card").html(
        "Were you accepted? Perfect! <br/> Now you can start helping those in need. Thanks for your contribution!"
      );
      //cards about
      $(".about_tittle").text("About us");
      $(".text").text(
        "STR is a Social Volunteering website covering only Refugees. This theme is restricted to being a topical subject, and of extreme relevance. To overcome this problem, the STR provides tools where individuals and companies can apply to help refugee families, allowing it not only to be informative, but also interactive."
      );
      $(".skills").children().eq(0).text("Volunteer");
      $(".skills").children().eq(1).text("Interactive & Informative");
      $(".skills").children().eq(2).text("Refugees");
      //bar chart
      $(".content-title").text("How many refugees are there in the world?");
      $(".content-text").html(
        "At least 89.3 million people around the world have been forced from their homes. Among them are nearly 27.1 million refugees, about half of whom are under the age of 18, people who have been denied nationality and who lack access to basic rights such as education, health, employment and freedom of movement. <br><br>The graph on the side shows that 65% came from just five countries. Numbers do not add up to 100 percent due to rounding, this also excludes Palestinian refugees under UNRWA mandate. This is the number of Venezuelan refugees and Venezuelans displaced abroad."
      );
      $(".chart-caption").eq(0).text("Syria");
      $(".chart-caption").eq(1).text("Venezuela");
      $(".chart-caption").eq(2).text("Afghanistan");
      $(".chart-caption").eq(3).text("Southern Sudan");
      $(".chart-caption").eq(4).text("Others");
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
      //Slideshow
      $(".title_slide1").text("Bienvenue!");
      $(".text_slide1").text("Description");
      $(".title_slide2").text("Aidez les plus nécessiteux!");
      $(".text_slide2").text("Description");
      $(".title_slide3").text("S'inscrire!");
      $(".text_slide3").text("Description");
      $(".title_slide4").text("je ne sais pas!");
      $(".text_slide4").text("Description");
      $(".btn-inner_slide1").text("Voir plus");
      $(".btn-inner_slide2").text("Voir plus");
      $(".btn-inner_slide3").text("Voir plus");
      $(".btn-inner_slide4").text("Voir plus");
      //cards
      $(".tittle1_card").text("S'inscrire!");
      $(".tittle2_card").text("Appliquer!");
      $(".tittle3_card").text("Aider!");
      $(".text1_card").html(
        "C'est rapide et facile d'accès. <br/> Cliquez simplement sur Connexion en haut de la page et inscrivez-vous sur notre site Web."
      );
      $(".text2_card").text(
        "Maintenant que vous êtes inscrit, vous êtes prêt à postuler. Pour ce faire, rendez-vous sur votre profil et vous trouverez la section Donation spéciale."
      );
      $(".text3_card").html(
        "Avez-vous été accepté? Parfait! <br/> Vous pouvez maintenant commencer à aider ceux qui en ont besoin. Merci pour votre contribution !"
      );
      //cards about
      $(".about_tittle").text("À propos de nous");
      $(".text").text(
        "STR est un site Web de volontariat social couvrant uniquement les réfugiés. Ce thème se limite à être un sujet d'actualité, et d'une extrême pertinence. Pour surmonter ce problème, le STR fournit des outils auxquels les particuliers et les entreprises peuvent postuler pour aider les familles de réfugiés, ce qui lui permet non seulement d'être informatif, mais également interactif."
      );
      $(".skills").children().eq(0).text("Bénévole");
      $(".skills").children().eq(1).text("Interactif & Informatif");
      $(".skills").children().eq(2).text("Réfugiées");
      //bar chart
      $(".content-title").text("Combien y a-t-il de réfugiés dans le monde ?");
      $(".content-text").html(
        "Au moins 89,3 millions de personnes dans le monde ont été chassées de chez elles. Parmi eux se trouvent près de 27,1 millions de réfugiés, dont environ la moitié ont moins de 18 ans, des personnes à qui la nationalité a été refusée et qui n'ont pas accès aux droits fondamentaux tels que l'éducation, la santé, l'emploi et la liberté de circulation. <br><br>Le graphique ci-contre montre que 65 % provenaient de cinq pays seulement. Les chiffres ne totalisent pas 100 % en raison des arrondis, ce qui exclut également les réfugiés palestiniens sous mandat de l'UNRWA. C'est le nombre de réfugiés vénézuéliens et de Vénézuéliens déplacés à l'étranger."
      );
      $(".chart-caption").eq(0).text("Syrie");
      $(".chart-caption").eq(1).text("Venezuela");
      $(".chart-caption").eq(2).text("Afghanistan");
      $(".chart-caption").eq(3).text("Soudan du Sud");
      $(".chart-caption").eq(4).text("Les autres");
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
    $(".language-selected").html("Português");
    $(".language-selected").html(
      '<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
    //Slideshow
    $(".title_slide1").text("Bem vindo!");
    $(".text_slide1").text("Descrição");
    $(".title_slide2").text("Ajuda os mais necessitados!");
    $(".text_slide2").text("Descrição");
    $(".title_slide3").text("Inscreve-te!");
    $(".text_slide3").text("Descrição");
    $(".title_slide4").text("Não sei!");
    $(".text_slide4").text("Descrição");
    $(".btn-inner_slide1").text("Ver mais");
    $(".btn-inner_slide2").text("Ver mais");
    $(".btn-inner_slide3").text("Ver mais");
    $(".btn-inner_slide4").text("Ver mais");
    //cards
    $(".tittle1_card").text("Inscreve-te!");
    $(".tittle2_card").text("Candidata-te!");
    $(".tittle3_card").text("Ajuda!");
    $(".text1_card").html(
      "É rápido e fácil de aceder. <br/> Basta clicares em Iniciar sessão no topo da página e procederes ao registo no nosso website."
    );
    $(".text2_card").text(
      "Agora que fizeste o registo está apto para te candidatares. Para isso deves ir ao teu perfil e encontrarás a secção da Doação Especial."
    );
    $(".text3_card").html(
      "Foste aceite? Perfeito! <br/> Agora podes começar a ajudar os mais necessitados. Obrigado pela tua contribuição!"
    );
    //cards about
    $(".about_tittle").text("Sobre nós");
    $(".text").text(
      "O STR é um website de Voluntariado Social abrangendo unicamente os Refugiados. Resringe-se a este tema, por ser um assunto da atualidade, e de extrema relevância. Para colmatar este problema o STR disponibliza ferramentas onde particulares e empresas podem candidatar-se no auxílio a famílias refugiadas, permitindo não ser só informativo, mas também interativo."
    );
    $(".skills").children().eq(0).text("Voluntariado");
    $(".skills").children().eq(1).text("Interativo & Informativo");
    $(".skills").children().eq(2).text("Refugiados");
    //bar chart
    $(".content-title").text("Quantos refugiados existem no mundo?");
    $(".content-text").html(
      "Pelo menos 89,3 milhões de pessoas em todo o mundo foram forçadas a deixar suas casas. Entre elas estão quase 27,1 milhões de refugiados, cerca de metade dos quais têm menos de 18 anos, pessoas a quem foi negada a nacionalidade e que não têm acesso a direitos básicos como educação, saúde, emprego e liberdade de movimento. <br><br>O gráfico ao lado mostra que 65% saíram de apenas cinco países. Os números não somam 100 por cento devido a arredondamentos, este também exclui refugiados palestinos sob mandato da UNRWA. Este é o número de refugiados venezuelanos e venezuelanos deslocados no exterior. "
    );
    $(".chart-caption").eq(0).text("Síria");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afeganistão");
    $(".chart-caption").eq(3).text("Sudão do Sul");
    $(".chart-caption").eq(4).text("Outros");
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
      '<img id="flags" src="../view/assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
    //Slideshow
    $(".title_slide1").text("Welcome!");
    $(".text_slide1").text("Description");
    $(".title_slide2").text("Help the most needy!");
    $(".text_slide2").text("Description");
    $(".title_slide3").text("Sing up!");
    $(".text_slide3").text("Description");
    $(".title_slide4").text("I don't know!");
    $(".text_slide4").text("Descrição");
    $(".btn-inner_slide1").text("See more");
    $(".btn-inner_slide2").text("See more");
    $(".btn-inner_slide3").text("See more");
    $(".btn-inner_slide4").text("See more");
    //cards
    $(".tittle1_card").text("Sign up!");
    $(".tittle2_card").text("Apply!");
    $(".tittle3_card").text("Help!");
    $(".text1_card").html(
      "It's fast and easy to access. <br/> Just click Login at the top of the page and register on our website."
    );
    $(".text2_card").text(
      "Now that you have registered you are ready to apply. To do this, go to your profile and you will find the Special Donation section."
    );
    $(".text3_card").html(
      "Were you accepted? Perfect! <br/> Now you can start helping those in need. Thanks for your contribution!"
    );
    //cards about
    $(".about_tittle").text("About us");
    $(".text").text(
      "STR is a Social Volunteering website covering only Refugees. This theme is restricted to being a topical subject, and of extreme relevance. To overcome this problem, the STR provides tools where individuals and companies can apply to help refugee families, allowing it not only to be informative, but also interactive."
    );
    $(".skills").children().eq(0).text("Volunteer");
    $(".skills").children().eq(1).text("Interactive & Informative");
    $(".skills").children().eq(2).text("Refugees");
    //bar chart
    $(".content-title").text("How many refugees are there in the world?");
    $(".content-text").html(
      "At least 89.3 million people around the world have been forced from their homes. Among them are nearly 27.1 million refugees, about half of whom are under the age of 18, people who have been denied nationality and who lack access to basic rights such as education, health, employment and freedom of movement. <br><br>The graph on the side shows that 65% came from just five countries. Numbers do not add up to 100 percent due to rounding, this also excludes Palestinian refugees under UNRWA mandate. This is the number of Venezuelan refugees and Venezuelans displaced abroad."
    );
    $(".chart-caption").eq(0).text("Syria");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afghanistan");
    $(".chart-caption").eq(3).text("Southern Sudan");
    $(".chart-caption").eq(4).text("Others");
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
      '<img id="flags" src="../view/assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
    //Slideshow
    $(".title_slide1").text("Bienvenue!");
    $(".text_slide1").text("Description");
    $(".title_slide2").text("Aidez les plus nécessiteux!");
    $(".text_slide2").text("Description");
    $(".title_slide3").text("S'inscrire!");
    $(".text_slide3").text("Description");
    $(".title_slide4").text("je ne sais pas!");
    $(".text_slide4").text("Description");
    $(".btn-inner_slide1").text("Voir plus");
    $(".btn-inner_slide2").text("Voir plus");
    $(".btn-inner_slide3").text("Voir plus");
    $(".btn-inner_slide4").text("Voir plus");
    //cards
    $(".tittle1_card").text("S'inscrire!");
    $(".tittle2_card").text("Appliquer!");
    $(".tittle3_card").text("Aider!");
    $(".text1_card").html(
      "C'est rapide et facile d'accès. <br/> Cliquez simplement sur Connexion en haut de la page et inscrivez-vous sur notre site Web."
    );
    $(".text2_card").text(
      "Maintenant que vous êtes inscrit, vous êtes prêt à postuler. Pour ce faire, rendez-vous sur votre profil et vous trouverez la section Donation spéciale."
    );
    $(".text3_card").html(
      "Avez-vous été accepté? Parfait! <br/> Vous pouvez maintenant commencer à aider ceux qui en ont besoin. Merci pour votre contribution !"
    );
    //cards about
    $(".about_tittle").text("À propos de nous");
    $(".text").text(
      "STR est un site Web de volontariat social couvrant uniquement les réfugiés. Ce thème se limite à être un sujet d'actualité, et d'une extrême pertinence. Pour surmonter ce problème, le STR fournit des outils auxquels les particuliers et les entreprises peuvent postuler pour aider les familles de réfugiés, ce qui lui permet non seulement d'être informatif, mais également interactif."
    );
    $(".skills").children().eq(0).text("Bénévole");
    $(".skills").children().eq(1).text("Interactif & Informatif");
    $(".skills").children().eq(2).text("Réfugiées");
    //bar chart
    $(".content-title").text("Combien y a-t-il de réfugiés dans le monde ?");
    $(".content-text").html(
      "Au moins 89,3 millions de personnes dans le monde ont été chassées de chez elles. Parmi eux se trouvent près de 27,1 millions de réfugiés, dont environ la moitié ont moins de 18 ans, des personnes à qui la nationalité a été refusée et qui n'ont pas accès aux droits fondamentaux tels que l'éducation, la santé, l'emploi et la liberté de circulation. <br><br>Le graphique ci-contre montre que 65 % provenaient de cinq pays seulement. Les chiffres ne totalisent pas 100 % en raison des arrondis, ce qui exclut également les réfugiés palestiniens sous mandat de l'UNRWA. C'est le nombre de réfugiés vénézuéliens et de Vénézuéliens déplacés à l'étranger."
    );
    $(".chart-caption").eq(0).text("Syrie");
    $(".chart-caption").eq(1).text("Venezuela");
    $(".chart-caption").eq(2).text("Afghanistan");
    $(".chart-caption").eq(3).text("Soudan du Sud");
    $(".chart-caption").eq(4).text("Les autres");
  });
}

