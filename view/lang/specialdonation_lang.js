/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    if (localStorage.getItem("sing_in") == 0) {
    } else {
      //Header
      $(".title").html("O QUE É A DOAÇÃO ESPECIAL ?");
      $(".content-text")
        .children()
        .eq(0)
        .html(
          "Este novo conceito permite ao utilizador, caso se identifique com alguma família refugiada, proceder à doação, apenas a essa família, desde uma habitação, bens alimentares ou até mesmo algumas despesas mensais enquanto se reintegram na sociedade. Ao longo desta Ação promovemos a <b>transparência e a prestação</b> de contas perante todos os nossos doadores para as quais desejamos trabalhar."
        );
      $(".content-text")
        .children()
        .eq(1)
        .html(
          "A transparência é o princípio básico que rege a nossa gestão interna,<b> assegurando boas práticas e fomentando a eficiência e eficácia para alcançar os nossos objetivos.</b> Para isso, utilizamos diferentes instrumentos de acompanhamento e <b> avaliação, externos e internos,</b> com o objetivo de reforçar o compromisso com os nossos grupos de interesse e identificar áreas que necessitam de ser melhoradas,<b> ao nível da nossa gestão interna</b>, como parte de um processo de melhoria contínua."
        );
      $(".content-text")
        .children()
        .eq(2)
        .html(
          "A privacidade dos utilizadores e das famílias aqui registadas é uma questão de extrema importância na nossa comunidade. As informações fornecidas pelos utilizadores podem incluir dados de identificação pessoal, informações de contacto, dados de localização e outras informações sensíveis. Portanto, é essencial que o website em questão tenha medidas adequadas em vigor para proteger a privacidade dos seus utilizadores.</b>."
        );
    }
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    if (localStorage.getItem("sing_in") == 0) {
    } else {
      //Header
      $(".title").html("WHAT IS THE SPECIAL DONATION?");
      $(".content-text")
        .children()
        .eq(0)
        .html(
          "This new concept allows users, if they identify with a refugee family, to donate housing, food or even some monthly expenses to that family while they reintegrate into society. Throughout this Action we promote the <b>transparency and the provision </b>of accounts before all our donors that we want to work for."
        );
      $(".content-text")
        .children()
        .eq(1)
        .html(
          "Transparency is the basic principle that governs our internal management,<b> ensuring good practices and fostering efficiency and effectiveness to achieve our objectives.</b> For this, we use different external monitoring and <b>evaluation instruments and internal,</b> with the aim of reinforcing the commitment to our stakeholders and identifying areas that need to be improved,<b> in terms of our internal management</b>, as part of an improvement process to be continued."
        );
      $(".content-text")
        .children()
        .eq(2)
        .html(
          "The privacy of users and families represented here is an issue of <b>extreme importance in our community</b>. Information provided by users may include personally identifiable information, contact information, location data and other sensitive information. It is therefore essential that the website in question has <b>appropriate measures in place to protect the privacy of its users</b>."
        );
    }
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    if (localStorage.getItem("sing_in") == 0) {
    } else {
      $(".title").html("QU'EST-CE QUE LE DON SPÉCIAL ?");
      $(".content-text")
        .children()
        .eq(0)
        .html(
          "Ce nouveau concept permet aux usagers, s'ils s'identifient à une famille de réfugiés, de donner un logement, de la nourriture ou même certaines dépenses mensuelles à cette famille pendant leur réinsertion dans la société. Tout au long de cette Action, nous favorisons la <b>transparence et la mise à disposition</b> des comptes devant tous nos donateurs pour lesquels nous souhaitons travailler."
        );
      $(".content-text")
        .children()
        .eq(1)
        .html(
          "La transparence est le principe de base qui régit notre gestion interne,<b>garantissant les bonnes pratiques et favorisant l'efficience et l'efficacité pour atteindre nos objectifs.</b>Pour cela, nous utilisons différents instruments de suivi et <b>d'évaluation externes et internes,</ b> b> dans le but de renforcer l'engagement envers nos parties prenantes et d'identifier les points à améliorer,<b> au niveau de notre gestion interne</b>, dans le cadre d'un processus d'amélioration à poursuivre."
        );
      $(".content-text")
        .children()
        .eq(2)
        .html(
          "La vie privée des utilisateurs et des familles représentées ici est une question d'<b>extrême importance dans notre communauté</b>. Les informations fournies par les utilisateurs peuvent inclure des informations personnellement identifiables, des informations de contact, des données de localisation et d'autres informations sensibles. Il est donc essentiel que le site Web en question dispose de <b>mesures appropriées pour protéger la vie privée de ses utilisateurs</b>."
        );
    }
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      if (localStorage.getItem("sing_in") == 0) {
      } else {
        //Header
        $(".title").html("O QUE É A DOAÇÃO ESPECIAL ?");
        $(".content-text")
          .children()
          .eq(0)
          .html(
            "Este novo conceito permite ao utilizador, caso se identifique com alguma família refugiada, proceder à doação, apenas a essa família, desde uma habitação, bens alimentares ou até mesmo algumas despesas mensais enquanto se reintegram na sociedade. Ao longo desta Ação promovemos a <b>transparência e a prestação</b> de contas perante todos os nossos doadores para as quais desejamos trabalhar."
          );
        $(".content-text")
          .children()
          .eq(1)
          .html(
            "A transparência é o princípio básico que rege a nossa gestão interna,<b> assegurando boas práticas e fomentando a eficiência e eficácia para alcançar os nossos objetivos.</b> Para isso, utilizamos diferentes instrumentos de acompanhamento e <b> avaliação, externos e internos,</b> com o objetivo de reforçar o compromisso com os nossos grupos de interesse e identificar áreas que necessitam de ser melhoradas,<b> ao nível da nossa gestão interna</b>, como parte de um processo de melhoria contínua."
          );
        $(".content-text")
          .children()
          .eq(2)
          .html(
            "A privacidade dos utilizadores e das famílias aqui registadas é uma questão de extrema importância na nossa comunidade. As informações fornecidas pelos utilizadores podem incluir dados de identificação pessoal, informações de contacto, dados de localização e outras informações sensíveis. Portanto, é essencial que o website em questão tenha medidas adequadas em vigor para proteger a privacidade dos seus utilizadores.</b>."
          );
      }
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      if (localStorage.getItem("sing_in") == 0) {
      } else {
        //Header
        $(".title").html("WHAT IS THE SPECIAL DONATION?");
        $(".content-text")
          .children()
          .eq(0)
          .html(
            "This new concept allows users, if they identify with a refugee family, to donate housing, food or even some monthly expenses to that family while they reintegrate into society. Throughout this Action we promote the <b>transparency and the provision </b>of accounts before all our donors that we want to work for."
          );
        $(".content-text")
          .children()
          .eq(1)
          .html(
            "Transparency is the basic principle that governs our internal management,<b> ensuring good practices and fostering efficiency and effectiveness to achieve our objectives.</b> For this, we use different external monitoring and <b>evaluation instruments and internal,</b> with the aim of reinforcing the commitment to our stakeholders and identifying areas that need to be improved,<b> in terms of our internal management</b>, as part of an improvement process to be continued."
          );
        $(".content-text")
          .children()
          .eq(2)
          .html(
            "The privacy of users and families represented here is an issue of <b>extreme importance in our community</b>. Information provided by users may include personally identifiable information, contact information, location data and other sensitive information. It is therefore essential that the website in question has <b>appropriate measures in place to protect the privacy of its users</b>."
          );
      }
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      if (localStorage.getItem("sing_in") == 0) {
      } else {
        $(".title").html("QU'EST-CE QUE LE DON SPÉCIAL ?");
        $(".content-text")
          .children()
          .eq(0)
          .html(
            "Ce nouveau concept permet aux usagers, s'ils s'identifient à une famille de réfugiés, de donner un logement, de la nourriture ou même certaines dépenses mensuelles à cette famille pendant leur réinsertion dans la société. Tout au long de cette Action, nous favorisons la <b>transparence et la mise à disposition</b> des comptes devant tous nos donateurs pour lesquels nous souhaitons travailler."
          );
        $(".content-text")
          .children()
          .eq(1)
          .html(
            "La transparence est le principe de base qui régit notre gestion interne,<b>garantissant les bonnes pratiques et favorisant l'efficience et l'efficacité pour atteindre nos objectifs.</b>Pour cela, nous utilisons différents instruments de suivi et <b>d'évaluation externes et internes,</ b> b> dans le but de renforcer l'engagement envers nos parties prenantes et d'identifier les points à améliorer,<b> au niveau de notre gestion interne</b>, dans le cadre d'un processus d'amélioration à poursuivre."
          );
        $(".content-text")
          .children()
          .eq(2)
          .html(
            "La vie privée des utilisateurs et des familles représentées ici est une question d'<b>extrême importance dans notre communauté</b>. Les informations fournies par les utilisateurs peuvent inclure des informations personnellement identifiables, des informations de contact, des données de localisation et d'autres informations sensibles. Il est donc essentiel que le site Web en question dispose de <b>mesures appropriées pour protéger la vie privée de ses utilisateurs</b>."
          );
      }
    });
  }
});
