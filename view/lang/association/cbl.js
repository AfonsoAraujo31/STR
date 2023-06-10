/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
    $(".pt").click(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes.      ");
      $(".accordion").children().eq(0).text("O que é a casa");
      $(".accordion").children().eq(2).text("O que fazemos");
      $(".accordion").children().eq(4).text("Ativismo - CBL");
      $(".accordion").children().eq(6).text("Cultura");
      $(".panel").eq(0).html("A Casa do Brasil de Lisboa (CBL) é uma associação de imigrantes sem fins lucrativos, fundada em janeiro de 1992 por brasileiros/as residentes em Portugal e portugueses/os amigos/as do Brasil e está aberta a todas as nacionalidades.");
      $(".panel").eq(1).html("Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes. Além do trabalho de intervenção social e de ativismo, promovemos a valorização da multiculturalidade, da intercultural idade e a integração por meio da cultura.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>É tomar posições políticas contra as manifestações de racismo, xenofobia, desigualdades de género, perseguição de governos, políticos e os seus partidos, entre outros;</li><li><i class='fa-solid fa-square squareli'></i>É ajudar a articular a unidade das associações de imigrantes e entidades pró-imigrante, nas atividades, nas tomadas de posição conjuntas, na pressão sobre as autoridades em favor de leis e práticas favoráveis;</li><li><i class='fa-solid fa-square squareli'></i>É promover debates e sessões de esclarecimentos sobre direitos e deveres, diálogo constante com o governo e partidos políticos, para a elaboração e desenvolvimento de políticas públicas que promovam o acolhimento e apoio aos, as migrantes e refugiados/as;</li><li><i class='fa-solid fa-square squareli'></i>É garantir a democracia associativa, incentivar a participação de todos e todas na vida associativa, combater qualquer forma de personalismos e utilização das associações para outros fins que não seja a promoção da igualdade para as pessoas imigrantes.</li></ul>");
      $(".panel").eq(3).html("<p><b>Bar da casa</b><br><br>O Bar da Casa é o espaço cultural onde a associação desenvolve e acolhe atividades de várias áreas artísticas, como concertos musicais, teatro, exposições, gastronomia, ciclos de cinema, workshops, exposições, debates e palestras. É um espaço de encontro de culturas que visa apoiar artistas a mostrarem o seu trabalho a diferentes públicos, promovendo o conhecimento e interação num circuito alternativo. Ligado aos e às imigrantes e aos assuntos do Brasil, a sua missão intervém ativamente não só pela divulgação da cultura brasileira, nomeadamente os novos artistas brasileiros/as pouco conhecidos em Portugal, mas também pela criação de um espaço de ação política, reflexão e debate de ideias. O seu principal objetivo é a integração pela cultura e conhecimento numa perspectiva participativa e transformadora. O Bar da Casa encontra-se aberto nos dias de eventos, consulte aqui a nossa programação.</p><br><p><b>Centro de documentação</b><br><br>O CEDOC – Centro de Documentação é um espaço vocacionado para o atendimento a estudantes, investigadores/as e jornalistas, entre outros. A Casa do Brasil de Lisboa dispõe de um espaço de pesquisa de temas relacionados ao Brasil, às relações entre o Brasil e Portugal, à lusofonia em geral e às questões dos e das imigrantes em Portugal.");
    });
  });
  /**
   * ! LINGUAGEM DA PÁGINA
   * ? Inglês JQUERY
   */
  $(function () {
    $(".en").click(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Since its founding, the CBL has been active in the reflection and implementation of public policies, assuming a fundamental role in activism and claiming egalitarian policies for immigrant communities in Portugal. We develop projects with actions that aim to promote equal access to rights and services for immigrants.");
      $(".accordion").children().eq(0).text("What is the house");
      $(".accordion").children().eq(2).text("What we do");
      $(".accordion").children().eq(4).text("Activism - CBL");
      $(".accordion").children().eq(6).text("Culture");
      $(".panel").eq(0).html("Casa do Brasil de Lisboa (CBL) is a non-profit association of immigrants, founded in January 1992 by Brazilians residing in Portugal and Portuguese friends of Brazil and is open to all nationalities.");
      $(".panel").eq(1).html("Since its founding, the CBL has been active in the reflection and implementation of public policies, assuming a fundamental role in activism and claiming egalitarian policies for immigrant communities in Portugal. We develop projects with actions that aim to promote equal access to rights and services for immigrants. In addition to social intervention and activism work, we promote the appreciation of multiculturalism, interculturality and integration through culture.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>It is to take political positions against manifestations of racism, xenophobia, gender inequalities, persecution of governments, politicians and their parties, among others.;</li><li><i class='fa-solid fa-square squareli'></i>It is to help articulate the unity of immigrant associations and pro-immigrant entities, in activities, in joint positions, in pressure on the authorities in favor of favorable laws and practices;</li><li><i class='fa-solid fa-square squareli'></i>It is also to demand from the countries of origin the support of the State to its citizens and citizens of the host country;</li><li><i class='fa-solid fa-square squareli'></i>It is to promote debates and clarification sessions on rights and duties, constant dialogue with the government and political parties, for the elaboration and development of public policies that promote the reception and support of migrants and refugees;</li><li><i class='fa-solid fa-square squareli'></i>It is to guarantee associative democracy, encourage the participation of all and all in associative life, combat any form of personalism and use of associations for purposes other than the promotion of equality for immigrants.</li></ul>");
      $(".panel").eq(3).html("<p><b>House bar</b><br><br>Bar da Casa is the cultural space where the association develops and hosts activities in various artistic areas, such as music concerts, theater, exhibitions, gastronomy, film cycles, workshops, exhibitions, debates and lectures. It is a space for cultures to meet, which aims to support artists to show their work to different audiences, promoting knowledge and interaction in an alternative circuit. Linked to immigrants and Brazilian affairs, its mission actively intervenes not only by disseminating Brazilian culture, namely new Brazilian artists who are little known in Portugal, but also by creating a space for political action, reflection and debate of ideas. Its main objective is integration through culture and knowledge in a participatory and transformative perspective. The Bar da Casa is open on event days, see our schedule here.</p><br><p><b>Documentation center</b><br><br>CEDOC – Documentation Center is a space dedicated to serving students, researchers and journalists, among others. Casa do Brasil in Lisbon has a space for researching topics related to Brazil, relations between Brazil and Portugal, Lusophony in general and issues of immigrants in Portugal.");
    });
  });
  /**
   * ! LINGUAGEM DA PÁGINA
   * ? Françes JQUERY
   */
  $(function () {
    $(".fr").click(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du bénévolat</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Depuis sa fondation, la CBL a été active dans la réflexion et la mise en œuvre de politiques publiques, assumant un rôle fondamental dans l'activisme et revendiquant des politiques égalitaires pour les communautés immigrées au Portugal. Nous développons des projets avec des actions qui visent à promouvoir l'égalité d'accès aux droits et aux services pour les immigrants.");
      $(".accordion").children().eq(0).text("Quelle est la maison");
      $(".accordion").children().eq(2).text("Ce que nous faisons");
      $(".accordion").children().eq(4).text("Activisme - CBL");
      $(".accordion").children().eq(6).text("Culture");
      $(".panel").eq(0).html("Casa do Brasil de Lisboa (CBL) est une association à but non lucratif d'immigrants, fondée en janvier 1992 par des Brésiliens résidant au Portugal et des amis portugais du Brésil et est ouverte à toutes les nationalités.");
      $(".panel").eq(1).html("Depuis sa fondation, la CBL a été active dans la réflexion et la mise en œuvre de politiques publiques, assumant un rôle fondamental dans l'activisme et revendiquant des politiques égalitaires pour les communautés immigrées au Portugal. Nous développons des projets avec des actions qui visent à promouvoir l'égalité d'accès aux droits et aux services pour les immigrants. En plus du travail d'intervention sociale et d'activisme, nous favorisons l'appréciation du multiculturalisme, de l'interculturalité et de l'intégration par la culture.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Il s'agit de prendre des positions politiques contre les manifestations de racisme, de xénophobie, d'inégalités entre les sexes, la persécution des gouvernements, des politiciens et de leurs partis, entre autres.;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit d'aider à articuler l'unité des associations d'immigrés et des entités pro-immigrés, dans des actions, des positions communes, des pressions sur les autorités en faveur de lois et de pratiques favorables;</li><li><i class='fa-solid fa-square squareli'></i>C'est aussi exiger des pays d'origine le soutien de l'Etat à ses citoyens et citoyens du pays d'accueil;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit de favoriser des débats et des séances de clarification sur les droits et devoirs, un dialogue constant avec le gouvernement et les partis politiques, pour l'élaboration et le développement de politiques publiques favorisant l'accueil et l'accompagnement des migrants et des réfugiés;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit de garantir la démocratie associative, d'encourager la participation de toutes et tous à la vie associative, de combattre toute forme de personnalisme et d'utilisation des associations à d'autres fins que la promotion de l'égalité des immigrés.</li></ul>");
      $(".panel").eq(3).html("<p><b>Bar de la maison</b><br><br>Bar da Casa est l'espace culturel où l'association développe et accueille des activités dans divers domaines artistiques, tels que concerts de musique, théâtre, expositions, gastronomie, cycles de films, ateliers, expositions, débats et conférences. C'est un espace de rencontre des cultures, qui vise à aider les artistes à montrer leur travail à différents publics, en favorisant la connaissance et l'interaction dans un circuit alternatif. Liée aux immigrés et aux affaires brésiliennes, sa mission intervient activement non seulement en diffusant la culture brésilienne, à savoir les nouveaux artistes brésiliens peu connus au Portugal, mais aussi en créant un espace d'action politique, de réflexion et de débat d'idées. Son objectif principal est l'intégration par la culture et la connaissance dans une perspective participative et transformatrice. Le Bar da Casa est ouvert les jours d'événements, consultez notre horaire ici.</p><br><p><b>Centre de documentation</b><br><br>CEDOC – Centre de documentation est un espace dédié au service des étudiants, chercheurs et journalistes, entre autres. Casa do Brasil à Lisbonne dispose d'un espace de recherche sur des sujets liés au Brésil, aux relations entre le Brésil et le Portugal, à la lusophonie en général et aux problèmes des immigrés au Portugal.");
    });
  });

  
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes.      ");
      $(".accordion").children().eq(0).text("O que é a casa");
      $(".accordion").children().eq(2).text("O que fazemos");
      $(".accordion").children().eq(4).text("Ativismo - CBL");
      $(".accordion").children().eq(6).text("Cultura");
      $(".panel").eq(0).html("A Casa do Brasil de Lisboa (CBL) é uma associação de imigrantes sem fins lucrativos, fundada em janeiro de 1992 por brasileiros/as residentes em Portugal e portugueses/os amigos/as do Brasil e está aberta a todas as nacionalidades.");
      $(".panel").eq(1).html("Desde a sua fundação, a CBL tem um trabalho ativo na reflexão e implementação das políticas públicas, assumindo um papel fundamental de ativismo e reivindicação de políticas igualitárias para as comunidades imigrantes em Portugal. Desenvolvemos projetos com ações que pretendem promover o acesso aos direitos e aos serviços de forma igualitária para as pessoas imigrantes. Além do trabalho de intervenção social e de ativismo, promovemos a valorização da multiculturalidade, da intercultural idade e a integração por meio da cultura.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>É tomar posições políticas contra as manifestações de racismo, xenofobia, desigualdades de género,perseguição de governos, políticos e seus partidos, entre outros;</li><li><i class='fa-solid fa-square squareli'></i>É ajudar a articular a unidade das associações de imigrantes e entidades pró-imigrante, nas atividades, nas tomadas de posição conjuntas, na pressão sobre as autoridades em favor de leis e práticas favoráveis;</li><li><i class='fa-solid fa-square squareli'></i>É promover debates e sessões de esclarecimentos sobre direitos e deveres, diálogo constante com o governo e partidos políticos, para a elaboração e desenvolvimento de políticas públicas que promovam o acolhimento e apoio aos, as migrantes e refugiados/as;</li><li><i class='fa-solid fa-square squareli'></i>É garantir a democracia associativa, incentivar a participação de todos e todas na vida associativa, combater qualquer forma de personalismos e utilização das associações para outros fins que não seja a promoção da igualdade para as pessoas imigrantes.</li></ul>");
      $(".panel").eq(3).html("<p><b>Bar da casa</b><br><br>O Bar da Casa é o espaço cultural onde a associação desenvolve e acolhe atividades de várias áreas artísticas, como concertos musicais, teatro, exposições, gastronomia, ciclos de cinema, workshops, exposições, debates e palestras. É um espaço de encontro de culturas que visa apoiar artistas a mostrarem o seu trabalho a diferentes públicos, promovendo o conhecimento e interação num circuito alternativo. Ligado aos e às imigrantes e aos assuntos do Brasil, a sua missão intervém ativamente não só pela divulgação da cultura brasileira, nomeadamente os novos artistas brasileiros/as pouco conhecidos em Portugal, mas também pela criação de um espaço de ação política, reflexão e debate de ideias. O seu principal objetivo é a integração pela cultura e conhecimento numa perspectiva participativa e transformadora. O Bar da Casa encontra-se aberto nos dias de eventos, consulte aqui a nossa programação.</p><br><p><b>Centro de documentação</b><br><br>O CEDOC – Centro de Documentação é um espaço vocacionado para o atendimento a estudantes, investigadores/as e jornalistas, entre outros. A Casa do Brasil de Lisboa dispõe de um espaço de pesquisa de temas relacionados ao Brasil, às relações entre o Brasil e Portugal, à lusofonia em geral e às questões dos e das imigrantes em Portugal.");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Since its founding, the CBL has been active in the reflection and implementation of public policies, assuming a fundamental role in activism and claiming egalitarian policies for immigrant communities in Portugal. We develop projects with actions that aim to promote equal access to rights and services for immigrants.");
      $(".accordion").children().eq(0).text("What is the house");
      $(".accordion").children().eq(2).text("What we do");
      $(".accordion").children().eq(4).text("Activism - CBL");
      $(".accordion").children().eq(6).text("Culture");
      $(".panel").eq(0).html("Casa do Brasil de Lisboa (CBL) is a non-profit association of immigrants, founded in January 1992 by Brazilians residing in Portugal and Portuguese friends of Brazil and is open to all nationalities.");
      $(".panel").eq(1).html("Since its founding, the CBL has been active in the reflection and implementation of public policies, assuming a fundamental role in activism and claiming egalitarian policies for immigrant communities in Portugal. We develop projects with actions that aim to promote equal access to rights and services for immigrants. In addition to social intervention and activism work, we promote the appreciation of multiculturalism, interculturality and integration through culture.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>It is to take political positions against manifestations of racism, xenophobia, gender inequalities, persecution of governments, politicians and their parties, among others.;</li><li><i class='fa-solid fa-square squareli'></i>It is to help articulate the unity of immigrant associations and pro-immigrant entities, in activities, in joint positions, in pressure on the authorities in favor of favorable laws and practices;</li><li><i class='fa-solid fa-square squareli'></i>It is also to demand from the countries of origin the support of the State to its citizens and citizens of the host country;</li><li><i class='fa-solid fa-square squareli'></i>It is to promote debates and clarification sessions on rights and duties, constant dialogue with the government and political parties, for the elaboration and development of public policies that promote the reception and support of migrants and refugees;</li><li><i class='fa-solid fa-square squareli'></i>It is to guarantee associative democracy, encourage the participation of all and all in associative life, combat any form of personalism and use of associations for purposes other than the promotion of equality for immigrants.</li></ul>");
      $(".panel").eq(3).html("<p><b>House bar</b><br><br>Bar da Casa is the cultural space where the association develops and hosts activities in various artistic areas, such as music concerts, theater, exhibitions, gastronomy, film cycles, workshops, exhibitions, debates and lectures. It is a space for cultures to meet, which aims to support artists to show their work to different audiences, promoting knowledge and interaction in an alternative circuit. Linked to immigrants and Brazilian affairs, its mission actively intervenes not only by disseminating Brazilian culture, namely new Brazilian artists who are little known in Portugal, but also by creating a space for political action, reflection and debate of ideas. Its main objective is integration through culture and knowledge in a participatory and transformative perspective. The Bar da Casa is open on event days, see our schedule here.</p><br><p><b>Documentation center</b><br><br>CEDOC – Documentation Center is a space dedicated to serving students, researchers and journalists, among others. Casa do Brasil in Lisbon has a space for researching topics related to Brazil, relations between Brazil and Portugal, Lusophony in general and issues of immigrants in Portugal.");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du bénévolat</a>");
      $(".breadcrumb-item").eq(1).text("Casa do Brasil de Lisboa");
      $(".h1").text("Casa do Brasil de Lisboa");
      $(".description").children().eq(0).text("Depuis sa fondation, la CBL a été active dans la réflexion et la mise en œuvre de politiques publiques, assumant un rôle fondamental dans l'activisme et revendiquant des politiques égalitaires pour les communautés immigrées au Portugal. Nous développons des projets avec des actions qui visent à promouvoir l'égalité d'accès aux droits et aux services pour les immigrants.");
      $(".accordion").children().eq(0).text("Quelle est la maison");
      $(".accordion").children().eq(2).text("Ce que nous faisons");
      $(".accordion").children().eq(4).text("Activisme - CBL");
      $(".accordion").children().eq(6).text("Culture");
      $(".panel").eq(0).html("Casa do Brasil de Lisboa (CBL) est une association à but non lucratif d'immigrants, fondée en janvier 1992 par des Brésiliens résidant au Portugal et des amis portugais du Brésil et est ouverte à toutes les nationalités.");
      $(".panel").eq(1).html("Depuis sa fondation, la CBL a été active dans la réflexion et la mise en œuvre de politiques publiques, assumant un rôle fondamental dans l'activisme et revendiquant des politiques égalitaires pour les communautés immigrées au Portugal. Nous développons des projets avec des actions qui visent à promouvoir l'égalité d'accès aux droits et aux services pour les immigrants. En plus du travail d'intervention sociale et d'activisme, nous favorisons l'appréciation du multiculturalisme, de l'interculturalité et de l'intégration par la culture.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Il s'agit de prendre des positions politiques contre les manifestations de racisme, de xénophobie, d'inégalités entre les sexes, la persécution des gouvernements, des politiciens et de leurs partis, entre autres.;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit d'aider à articuler l'unité des associations d'immigrés et des entités pro-immigrés, dans des actions, des positions communes, des pressions sur les autorités en faveur de lois et de pratiques favorables;</li><li><i class='fa-solid fa-square squareli'></i>C'est aussi exiger des pays d'origine le soutien de l'Etat à ses citoyens et citoyens du pays d'accueil;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit de favoriser des débats et des séances de clarification sur les droits et devoirs, un dialogue constant avec le gouvernement et les partis politiques, pour l'élaboration et le développement de politiques publiques favorisant l'accueil et l'accompagnement des migrants et des réfugiés;</li><li><i class='fa-solid fa-square squareli'></i>Il s'agit de garantir la démocratie associative, d'encourager la participation de toutes et tous à la vie associative, de combattre toute forme de personnalisme et d'utilisation des associations à d'autres fins que la promotion de l'égalité des immigrés.</li></ul>");
      $(".panel").eq(3).html("<p><b>Bar de la maison</b><br><br>Bar da Casa est l'espace culturel où l'association développe et accueille des activités dans divers domaines artistiques, tels que concerts de musique, théâtre, expositions, gastronomie, cycles de films, ateliers, expositions, débats et conférences. C'est un espace de rencontre des cultures, qui vise à aider les artistes à montrer leur travail à différents publics, en favorisant la connaissance et l'interaction dans un circuit alternatif. Liée aux immigrés et aux affaires brésiliennes, sa mission intervient activement non seulement en diffusant la culture brésilienne, à savoir les nouveaux artistes brésiliens peu connus au Portugal, mais aussi en créant un espace d'action politique, de réflexion et de débat d'idées. Son objectif principal est l'intégration par la culture et la connaissance dans une perspective participative et transformatrice. Le Bar da Casa est ouvert les jours d'événements, consultez notre horaire ici.</p><br><p><b>Centre de documentation</b><br><br>CEDOC – Centre de documentation est un espace dédié au service des étudiants, chercheurs et journalistes, entre autres. Casa do Brasil à Lisbonne dispose d'un espace de recherche sur des sujets liés au Brésil, aux relations entre le Brésil et le Portugal, à la lusophonie en général et aux problèmes des immigrés au Portugal.");
    });
  }
});

$(document).ready(function() {
  $(document).on('click', '#btn_more', function() {
      var last_video_id = $(this).data("vid");
      var language = localStorage.getItem("language");
      $.ajax({
          url: "http://localhost/STR/model/association/load_data.php",
          method: "POST",
          data: {
              last_video_id: last_video_id,
              language: language,
              db: "comentarios_cbl"
          },
          dataType: "text",
          success: function(data) {
              if (data != '') {
                  $('#remove_row').remove();
                  $('#load_data_table').append(data);
              } else {

              }
          }
      });
  });
});