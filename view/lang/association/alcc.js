/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
    $(".pt").click(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("A ALCC, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades.");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Quem somos");
      $(".accordion").children().eq(4).text("Estratégia");
      $(".accordion").children().eq(6).text("Valores");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Ser um agente defensor eficaz dos direitos dos migrantes, transformando a vida das pessoas e mudando as atitudes públicas para melhor;</li><li><i class='fa-solid fa-square squareli'></i>Comprometer-se com o princípio de que a migração regular e ordenada beneficia os migrantes e a sociedade;</li><li><i class='fa-solid fa-square squareli'></i>Auxiliar no atendimento aos crescentes desafios operacionais de gerenciamento de migração;</li><li><i class='fa-solid fa-square squareli'></i>Incentivar a integração e o desenvolvimento social e econômico por meio da migração;</li><li><i class='fa-solid fa-square squareli'></i>Defender a dignidade humana e o bem-estar dos migrantes.</li></ul>");
      $(".panel").eq(1).html("A Associação Lusofonia Cultura e Cidadania, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades. A Associação iniciou suas atividades em 2000, através de um grupo de pessoas imigrantes e nacionais ,tendo sido constituída em 2007 com o objetivo de promover a integração legal e social desta população e, desde o início, busca soluções para promover a inserção do imigrante na sociedade e facilitar o seu acesso aos serviços necessários à sua sobrevivência, visando minimizar as dificuldades da população imigrante oferecendo, um conjunto de serviços gratuitos, tanto a nível individual como familiar. Pretendemos ser uma organização não governamental representativa dos imigrantes em Portugal, reconhecida pelos serviços prestados, nomeadamente os mais vulneráveis. Procuramos diversas formas para sensibilizar, esclarecer, divulgar, promover, integrar e transmitir conhecimentos sobre várias temáticas como Cidadania e Inclusão, Empreendedorismo, Formação, Igualdade de Oportunidades – Género e Imigração, emprego e formação entre outros.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Melhorar a maneira como os migrantes são recebidos e tratados em Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Alcançar mais migrantes que possam aceder aos nossos serviços especializados e transformadores;</li><li><i class='fa-solid fa-square squareli'></i>Ser instrumento na criação de um movimento popular e poderoso pela mudança;</li><li><i class='fa-solid fa-square squareli'></i>Ser uma associação credível e confiável nas necessidades e aspirações dos migrantes em Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Ser uma organização independente, responsável, orientada por valores e sustentável.</li></ul>");
      $(".panel").eq(3).html("Os nossos valores se assentam na humanidade e dignidade das pessoas, não em sua nacionalidade ou status de imigração. Acreditamos que empatia, cooperação e colaboração são essenciais para alcançar mudanças significativas. Somos resolutos e criativos na promoção e defesa dos direitos dos migrantes.");
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
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("The ALCC, is a non-profit association, constituted under the terms of the Law in force with the assumption of defending the legitimate interests of the immigrant population in Portugal, recognized by the High Commission for Migrations ACM, as a representative association of the Brazilian community in Portugal, is open to all nationalities.");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Who we are");
      $(".accordion").children().eq(4).text("Strategy");
      $(".accordion").children().eq(6).text("Values");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Be an effective advocate for migrants' rights, transforming people's lives and changing public attitudes for the better;</li><li><i class='fa-solid fa-square squareli'></i>Commit to the principle that regular and orderly migration benefits migrants and society;</li><li><i class='fa-solid fa-square squareli'></i>Assist in meeting the growing operational challenges of migration management;</li><li><i class='fa-solid fa-square squareli'></i>Encourage integration and social and economic development through migration;</li><li><i class='fa-solid fa-square squareli'></i>Upholding the human dignity and well-being of migrants.</li></ul>");
      $(".panel").eq(1).html("Associação Lusofonia Cultura e Cidadania, is a non-profit association, constituted under the terms of the Law in force with the assumption of defending the legitimate interests of the immigrant population in Portugal, recognized by the High Commission for Migrations ACM, as a representative association of the Brazilian community in Portugal, it is open to all nationalities. The Association began its activities in 2000, through a group of immigrants and nationals, having been constituted in 2007 with the objective of promoting the legal and social integration of this population and, since the beginning, it seeks solutions to promote the insertion of the immigrant in the society and facilitate their access to the services necessary for their survival, aiming to minimize the difficulties of the immigrant population by offering a set of free services, both at an individual and family level. We intend to be a non-governmental organization representing immigrants in Portugal, recognized for the services provided, namely the most vulnerable. We seek different ways to raise awareness, clarify, disseminate, promote, integrate and transmit knowledge on various topics such as Citizenship and Inclusion, Entrepreneurship, Training, Equal Opportunities – Gender and Immigration, employment and training, among others.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Improving the way migrants are received and treated in Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Reach more migrants who can access our specialized and transformative services;</li><li><i class='fa-solid fa-square squareli'></i>To be instrumental in creating a powerful and popular movement for change;</li><li><i class='fa-solid fa-square squareli'></i>To be a credible and reliable association in the needs and aspirations of migrants in Portugal;</li><li><i class='fa-solid fa-square squareli'></i>To be an independent, accountable, values-driven and sustainable organization.</li></ul>");
      $(".panel").eq(3).html("Our values are based on the humanity and dignity of people, not on their nationality or immigration status. We believe that empathy, cooperation and collaboration are essential to achieve meaningful change. We are resolute and creative in promoting and defending the rights of migrants.");
    });
  });
  /**
   * ! LINGUAGEM DA PÁGINA
   * ? Françes JQUERY
   */
  $(function () {
    $(".fr").click(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("L'ALCC, est une association à but non lucratif, constituée aux termes de la loi en vigueur avec l'hypothèse de défendre les intérêts légitimes de la population immigrée au Portugal, reconnue par le Haut Commissariat aux Migrations ACM, en tant qu'association représentative du Brésil communauté au Portugal, est ouvert à toutes les nationalités.");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Qui nous sommes");
      $(".accordion").children().eq(4).text("Stratégie");
      $(".accordion").children().eq(6).text("Valeurs");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Être un défenseur efficace des droits des migrants, transformer la vie des gens et changer les attitudes du public pour le mieux;</li><li><i class='fa-solid fa-square squareli'></i>S'engager à respecter le principe selon lequel une migration régulière et ordonnée profite aux migrants et à la société;</li><li><i class='fa-solid fa-square squareli'></i>Aider à relever les défis opérationnels croissants de la gestion des migrations;</li><li><i class='fa-solid fa-square squareli'></i>Encourager l'intégration et le développement social et économique par la migration;</li><li><i class='fa-solid fa-square squareli'></i>Défendre la dignité humaine et le bien-être des migrants.</li></ul>");
      $(".panel").eq(1).html("Associação Lusofonia Cultura e Cidadania, est une association à but non lucratif, constituée aux termes de la loi en vigueur avec l'hypothèse de défendre les intérêts légitimes de la population immigrée au Portugal, reconnue par le Haut-Commissariat aux migrations ACM, en tant qu'association représentative de la communauté brésilienne au Portugal, il est ouvert à toutes les nationalités. L'Association a commencé ses activités en 2000, à travers un groupe d'immigrés et de nationaux, ayant été constituée en 2007 dans le but de promouvoir l'intégration légale et sociale de cette population et, depuis le début, elle cherche des solutions pour favoriser l'insertion de l'immigré dans la société et faciliter leur accès aux services nécessaires à leur survie, visant à minimiser les difficultés de la population immigrée en offrant un ensemble de services gratuits, tant au niveau individuel que familial. Nous avons l'intention d'être une organisation non gouvernementale représentant les immigrés au Portugal, reconnue pour les services fournis, à savoir les plus vulnérables. Nous recherchons différentes manières de sensibiliser, clarifier, diffuser, promouvoir, intégrer et transmettre des connaissances sur divers sujets tels que la citoyenneté et l'inclusion, l'entrepreneuriat, la formation, l'égalité des chances - genre et immigration, l'emploi et la formation, entre autres.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Améliorer l'accueil et le traitement des migrants au Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Atteindre plus de migrants qui peuvent accéder à nos services spécialisés et transformateurs;</li><li><i class='fa-solid fa-square squareli'></i>Contribuer à créer un mouvement puissant et populaire pour le changement;</li><li><i class='fa-solid fa-square squareli'></i>Être une association crédible et fiable dans les besoins et les aspirations des migrants au Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Être une organisation indépendante, responsable, axée sur les valeurs et durable.</li></ul>");
      $(".panel").eq(3).html("Nos valeurs sont basées sur l'humanité et la dignité des personnes, et non sur leur nationalité ou leur statut d'immigration. Nous pensons que l'empathie, la coopération et la collaboration sont essentielles pour parvenir à un changement significatif. Nous sommes résolus et créatifs dans la promotion et la défense des droits des migrants.");
    });
  });

  
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("A ALCC, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades.");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Quem somos");
      $(".accordion").children().eq(4).text("Estratégia");
      $(".accordion").children().eq(6).text("Valores");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Ser um agente defensor eficaz dos direitos dos migrantes, transformando a vida das pessoas e mudando as atitudes públicas para melhor;</li><li><i class='fa-solid fa-square squareli'></i>Comprometer-se com o princípio de que a migração regular e ordenada beneficia os migrantes e a sociedade;</li><li><i class='fa-solid fa-square squareli'></i>Auxiliar no atendimento aos crescentes desafios operacionais de gerenciamento de migração;</li><li><i class='fa-solid fa-square squareli'></i>Incentivar a integração e o desenvolvimento social e econômico por meio da migração;</li><li><i class='fa-solid fa-square squareli'></i>Defender a dignidade humana e o bem-estar dos migrantes.</li></ul>");
      $(".panel").eq(1).html("A Associação Lusofonia Cultura e Cidadania, é uma associação sem fins lucrativos, constituída nos termos da Lei em vigor com o pressuposto da defesa dos legítimos interesses da população imigrante em Portugal, reconhecida pelo Alto Comissariado para as Migrações ACM, como associação representativa da comunidade Brasileira em Portugal, está aberta a todas as nacionalidades. A Associação iniciou suas atividades em 2000, através de um grupo de pessoas imigrantes e nacionais ,tendo sido constituída em 2007 com o objetivo de promover a integração legal e social desta população e, desde o início, busca soluções para promover a inserção do imigrante na sociedade e facilitar o seu acesso aos serviços necessários à sua sobrevivência, visando minimizar as dificuldades da população imigrante oferecendo, um conjunto de serviços gratuitos, tanto a nível individual como familiar. Pretendemos ser uma organização não governamental representativa dos imigrantes em Portugal, reconhecida pelos serviços prestados, nomeadamente os mais vulneráveis. Procuramos diversas formas para sensibilizar, esclarecer, divulgar, promover, integrar e transmitir conhecimentos sobre várias temáticas como Cidadania e Inclusão, Empreendedorismo, Formação, Igualdade de Oportunidades – Género e Imigração, emprego e formação entre outros.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Melhorar a maneira como os migrantes são recebidos e tratados em Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Alcançar mais migrantes que possam aceder aos nossos serviços especializados e transformadores;</li><li><i class='fa-solid fa-square squareli'></i>Ser instrumento na criação de um movimento popular e poderoso pela mudança;</li><li><i class='fa-solid fa-square squareli'></i>Ser uma associação credível e confiável nas necessidades e aspirações dos migrantes em Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Ser uma organização independente, responsável, orientada por valores e sustentável.</li></ul>");
      $(".panel").eq(3).html("Os nossos valores se assentam na humanidade e dignidade das pessoas, não em sua nacionalidade ou status de imigração. Acreditamos que empatia, cooperação e colaboração são essenciais para alcançar mudanças significativas. Somos resolutos e criativos na promoção e defesa dos direitos dos migrantes.");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("The ALCC, is a non-profit association, constituted under the terms of the Law in force with the assumption of defending the legitimate interests of the immigrant population in Portugal, recognized by the High Commission for Migrations ACM, as a representative association of the Brazilian community in Portugal, is open to all nationalities.");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Who we are");
      $(".accordion").children().eq(4).text("Strategy");
      $(".accordion").children().eq(6).text("Values");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Be an effective advocate for migrants' rights, transforming people's lives and changing public attitudes for the better;</li><li><i class='fa-solid fa-square squareli'></i>Commit to the principle that regular and orderly migration benefits migrants and society;</li><li><i class='fa-solid fa-square squareli'></i>Assist in meeting the growing operational challenges of migration management;</li><li><i class='fa-solid fa-square squareli'></i>Encourage integration and social and economic development through migration;</li><li><i class='fa-solid fa-square squareli'></i>Upholding the human dignity and well-being of migrants.</li></ul>");
      $(".panel").eq(1).html("Associação Lusofonia Cultura e Cidadania, is a non-profit association, constituted under the terms of the Law in force with the assumption of defending the legitimate interests of the immigrant population in Portugal, recognized by the High Commission for Migrations ACM, as a representative association of the Brazilian community in Portugal, it is open to all nationalities. The Association began its activities in 2000, through a group of immigrants and nationals, having been constituted in 2007 with the objective of promoting the legal and social integration of this population and, since the beginning, it seeks solutions to promote the insertion of the immigrant in the society and facilitate their access to the services necessary for their survival, aiming to minimize the difficulties of the immigrant population by offering a set of free services, both at an individual and family level. We intend to be a non-governmental organization representing immigrants in Portugal, recognized for the services provided, namely the most vulnerable. We seek different ways to raise awareness, clarify, disseminate, promote, integrate and transmit knowledge on various topics such as Citizenship and Inclusion, Entrepreneurship, Training, Equal Opportunities – Gender and Immigration, employment and training, among others.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Improving the way migrants are received and treated in Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Reach more migrants who can access our specialized and transformative services;</li><li><i class='fa-solid fa-square squareli'></i>To be instrumental in creating a powerful and popular movement for change;</li><li><i class='fa-solid fa-square squareli'></i>To be a credible and reliable association in the needs and aspirations of migrants in Portugal;</li><li><i class='fa-solid fa-square squareli'></i>To be an independent, accountable, values-driven and sustainable organization.</li></ul>");
      $(".panel").eq(3).html("Our values are based on the humanity and dignity of people, not on their nationality or immigration status. We believe that empathy, cooperation and collaboration are essential to achieve meaningful change. We are resolute and creative in promoting and defending the rights of migrants.");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du bénévolat</a>");
      $(".breadcrumb-item").eq(1).text("Associação Lusofonia, Cultura e Cidadania");
      $(".h1").text("Associação Lusofonia, Cultura e Cidadania");
      $(".description").children().eq(0).text("L'ALCC, est une association à but non lucratif, constituée aux termes de la loi en vigueur avec l'hypothèse de défendre les intérêts légitimes de la population immigrée au Portugal, reconnue par le Haut Commissariat aux Migrations ACM, en tant qu'association représentative du Brésil communauté au Portugal, est ouvert à toutes les nationalités.");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Qui nous sommes");
      $(".accordion").children().eq(4).text("Stratégie");
      $(".accordion").children().eq(6).text("Valeurs");
      $(".panel").eq(0).html("<ul><li><i class='fa-solid fa-square squareli'></i>Être un défenseur efficace des droits des migrants, transformer la vie des gens et changer les attitudes du public pour le mieux;</li><li><i class='fa-solid fa-square squareli'></i>S'engager à respecter le principe selon lequel une migration régulière et ordonnée profite aux migrants et à la société;</li><li><i class='fa-solid fa-square squareli'></i>Aider à relever les défis opérationnels croissants de la gestion des migrations;</li><li><i class='fa-solid fa-square squareli'></i>Encourager l'intégration et le développement social et économique par la migration;</li><li><i class='fa-solid fa-square squareli'></i>Défendre la dignité humaine et le bien-être des migrants.</li></ul>");
      $(".panel").eq(1).html("Associação Lusofonia Cultura e Cidadania, est une association à but non lucratif, constituée aux termes de la loi en vigueur avec l'hypothèse de défendre les intérêts légitimes de la population immigrée au Portugal, reconnue par le Haut-Commissariat aux migrations ACM, en tant qu'association représentative de la communauté brésilienne au Portugal, il est ouvert à toutes les nationalités. L'Association a commencé ses activités en 2000, à travers un groupe d'immigrés et de nationaux, ayant été constituée en 2007 dans le but de promouvoir l'intégration légale et sociale de cette population et, depuis le début, elle cherche des solutions pour favoriser l'insertion de l'immigré dans la société et faciliter leur accès aux services nécessaires à leur survie, visant à minimiser les difficultés de la population immigrée en offrant un ensemble de services gratuits, tant au niveau individuel que familial. Nous avons l'intention d'être une organisation non gouvernementale représentant les immigrés au Portugal, reconnue pour les services fournis, à savoir les plus vulnérables. Nous recherchons différentes manières de sensibiliser, clarifier, diffuser, promouvoir, intégrer et transmettre des connaissances sur divers sujets tels que la citoyenneté et l'inclusion, l'entrepreneuriat, la formation, l'égalité des chances - genre et immigration, l'emploi et la formation, entre autres.");
      $(".panel").eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Améliorer l'accueil et le traitement des migrants au Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Atteindre plus de migrants qui peuvent accéder à nos services spécialisés et transformateurs;</li><li><i class='fa-solid fa-square squareli'></i>Contribuer à créer un mouvement puissant et populaire pour le changement;</li><li><i class='fa-solid fa-square squareli'></i>Être une association crédible et fiable dans les besoins et les aspirations des migrants au Portugal;</li><li><i class='fa-solid fa-square squareli'></i>Être une organisation indépendante, responsable, axée sur les valeurs et durable.</li></ul>");
      $(".panel").eq(3).html("Nos valeurs sont basées sur l'humanité et la dignité des personnes, et non sur leur nationalité ou leur statut d'immigration. Nous pensons que l'empathie, la coopération et la collaboration sont essentielles pour parvenir à un changement significatif. Nous sommes résolus et créatifs dans la promotion et la défense des droits des migrants.");
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
              db: "comentarios_alcc"
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