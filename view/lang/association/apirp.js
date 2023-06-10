/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
    $(".pt").click(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("Associação de apoio a Imigrantes e Refugiados em Portugal foi constituída sem fins lucrativos de acordo com a lei portuguesa, no dia 18 de setembro de 2015. Os membros da Associação de apoio a Imigrantes e Refugiados em Portugal que, independentemente da sua origem, língua e género, decidiram unir-se para melhorar as condições de vida APIRP viver em Portugal. Acreditamos que unindo esforços e trabalhando em conjunto, facilitaremos a nossa integração no país que nos acolheu: Portugal!");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Objetivos da associação");
      $(".accordion").children().eq(4).text("Valores");
      $(".panel").eq(0).html("APIRP – Associação de Apoio a Imigrantes e Refugiados em Portugal, tem a missão de promover a integração de imigrantes e refugiados em Portugal, através do desenvolvimento de ações e projetos de intervenção, nas áreas socioculturais relacionadas com a consciencialização cívica e autodeterminação de imigrantes e refugiados, através de um diálogo permanente entre imigrante e refugiados e entre este e a sociedade portuguesa na forma das suas instituições.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Dar a conhecer aos seus associados os direitos e deveres dos imigrantes e refugiados consagrados na lei portuguesa, a todos os níveis;</li><li><i class='fa-solid fa-square squareli'></i>Promover o desenvolvimento de iniciativas socioculturais;</li><li><i class='fa-solid fa-square squareli'></i>Estabelecer laços sociais e culturais entre os imigrantes e refugiados e entre este sociedade portuguesa;</li><li><i class='fa-solid fa-square squareli'></i>Estabelecer contatos com as diversas entidades empregadoras com vista a uma maior e mais adequada empregabilidade dos imigrantes e refugiados.</li></ul>");
      $(".panel").eq(3).html("<p><b>Os Direitos Humanos</b></p>O direito a um teto é inquestionável e é dos mais importantes para viver em dignidade. Pois, não há dignidade sem teto. Espírito de equipa acreditamos que unindo esforços e trabalhando em conjunto, facilitamos a nossa integração no país acolheu-nos.");
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
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("Association for the Support of Immigrants and Refugees in Portugal was formed on a non-profit basis in accordance with Portuguese law, on September 18, 2015. The members of the Association for the Support of Immigrants and Refugees in Portugal who, regardless of their origin, language and gender, decided to unite to improve APIRP living conditions in Portugal. We believe that by joining forces and working together, we will facilitate our integration in the country that welcomed us: Portugal!");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Association objectives");
      $(".accordion").children().eq(4).text("Values");
      $(".panel").eq(0).html("APIRP – Association for the Support of Immigrants and Refugees in Portugal, has the mission of promoting the integration of immigrants and refugees in Portugal, through the development of actions and intervention projects, in the sociocultural areas related to civic awareness and self-determination of immigrants and refugees , through a permanent dialogue between immigrants and refugees and between the latter and Portuguese society in the form of its institutions.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Make known to its associates the rights and duties of immigrants and refugees enshrined in Portuguese law, at all levels;</li><li><i class='fa-solid fa-square squareli'></i>Promote the development of sociocultural initiatives;</li><li><i class='fa-solid fa-square squareli'></i>Establish social and cultural ties between immigrants and refugees and between this Portuguese society;</li><li><i class='fa-solid fa-square squareli'></i>Establish contacts with the various employers with a view to greater and more adequate employability of immigrants and refugees.</li></ul>");
      $(".panel").eq(2).html("<p><b>Human Rights</b></p>The right to a roof is unquestionable and one of the most important for living in dignity. For there is no dignity without a roof. Team spirit we believe that by joining forces and working together, we facilitate our integration in the country that welcomed us.");
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
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("L'Association pour le soutien des immigrés et des réfugiés au Portugal a été constituée à but non lucratif conformément à la loi portugaise, le 18 septembre 2015. Les membres de l'Association pour le soutien des immigrés et des réfugiés au Portugal qui, quelle que soit leur origine , langue et genre, ont décidé de s'unir pour améliorer les conditions de vie de l'APIRP au Portugal. Nous croyons qu'en unissant nos forces et en travaillant ensemble, nous faciliterons notre intégration dans le pays qui nous a accueillis : le Portugal!");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Objectifs de l'association");
      $(".accordion").children().eq(4).text("Valeurs");
      $(".panel").eq(0).html("APIRP - Association pour le soutien des immigrés et des réfugiés au Portugal, a pour mission de promouvoir l'intégration des immigrés et des réfugiés au Portugal, à travers le développement d'actions et de projets d'intervention, dans les domaines socioculturels liés à la conscience civique et à l'autodétermination des immigrés et réfugiés , à travers un dialogue permanent entre immigrés et réfugiés et entre ces derniers et la société portugaise sous la forme de ses institutions.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Faire connaître à ses associés les droits et devoirs des immigrés et des réfugiés inscrits dans la législation portugaise, à tous les niveaux;</li><li><i class='fa-solid fa-square squareli'></i>Favoriser le développement d'initiatives socioculturelles;</li><li><i class='fa-solid fa-square squareli'></i>Établir des liens sociaux et culturels entre les immigrés et les réfugiés et entre cette société portugaise;</li><li><i class='fa-solid fa-square squareli'></i>Établir des contacts avec les différents employeurs en vue d'une employabilité plus grande et plus adéquate des immigrants et des réfugiés.</li></ul>");
      $(".panel").eq(2).html("<p><b>Droits humains</b></p>Le droit à un toit est incontestable et l'un des plus importants pour vivre dans la dignité. Car il n'y a pas de dignité sans toit. Esprit d'équipe nous croyons qu'en unissant nos forces et en travaillant ensemble, nous facilitons notre intégration dans le pays qui nous a accueilli.");
    });
  });

  
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("Associação de apoio a Imigrantes e Refugiados em Portugal foi constituída sem fins lucrativos de acordo com a lei portuguesa, no dia 18 de setembro de 2015. Os membros da Associação de apoio a Imigrantes e Refugiados em Portugal que, independentemente da sua origem, língua e género, decidiram unir-se para melhorar as condições de vida APIRP viver em Portugal. Acreditamos que unindo esforços e trabalhando em conjunto, facilitaremos a nossa integração no país que nos acolheu: Portugal!");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Objetivos da associação");
      $(".accordion").children().eq(4).text("Valores");
      $(".panel").eq(0).html("APIRP – Associação de Apoio a Imigrantes e Refugiados em Portugal, tem a missão de promover a integração de imigrantes e refugiados em Portugal, através do desenvolvimento de ações e projetos de intervenção, nas áreas socioculturais relacionadas com a consciencialização cívica e autodeterminação de imigrantes e refugiados, através de um diálogo permanente entre imigrante e refugiados e entre este e a sociedade portuguesa na forma das suas instituições.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Dar a conhecer aos seus associados os direitos e deveres dos imigrantes e refugiados consagrados na lei portuguesa, a todos os níveis;</li><li><i class='fa-solid fa-square squareli'></i>Promover o desenvolvimento de iniciativas socioculturais;</li><li><i class='fa-solid fa-square squareli'></i>Estabelecer laços sociais e culturais entre os imigrantes e refugiados e entre este sociedade portuguesa;</li><li><i class='fa-solid fa-square squareli'></i>Estabelecer contatos com as diversas entidades empregadoras com vista a uma maior e mais adequada empregabilidade dos imigrantes e refugiados.</li></ul>");
      $(".panel").eq(3).html("<p><b>Os Direitos Humanos</b></p>O direito a um teto é inquestionável e é dos mais importantes para viver em dignidade. Pois, não há dignidade sem teto. Espírito de equipa acreditamos que unindo esforços e trabalhando em conjunto, facilitamos a nossa integração no país acolheu-nos.");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("Association for the Support of Immigrants and Refugees in Portugal was formed on a non-profit basis in accordance with Portuguese law, on September 18, 2015. The members of the Association for the Support of Immigrants and Refugees in Portugal who, regardless of their origin, language and gender, decided to unite to improve APIRP living conditions in Portugal. We believe that by joining forces and working together, we will facilitate our integration in the country that welcomed us: Portugal!");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Association objectives");
      $(".accordion").children().eq(4).text("Values");
      $(".panel").eq(0).html("APIRP – Association for the Support of Immigrants and Refugees in Portugal, has the mission of promoting the integration of immigrants and refugees in Portugal, through the development of actions and intervention projects, in the sociocultural areas related to civic awareness and self-determination of immigrants and refugees , through a permanent dialogue between immigrants and refugees and between the latter and Portuguese society in the form of its institutions.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Make known to its associates the rights and duties of immigrants and refugees enshrined in Portuguese law, at all levels;</li><li><i class='fa-solid fa-square squareli'></i>Promote the development of sociocultural initiatives;</li><li><i class='fa-solid fa-square squareli'></i>Establish social and cultural ties between immigrants and refugees and between this Portuguese society;</li><li><i class='fa-solid fa-square squareli'></i>Establish contacts with the various employers with a view to greater and more adequate employability of immigrants and refugees.</li></ul>");
      $(".panel").eq(2).html("<p><b>Human Rights</b></p>The right to a roof is unquestionable and one of the most important for living in dignity. For there is no dignity without a roof. Team spirit we believe that by joining forces and working together, we facilitate our integration in the country that welcomed us.");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du bénévolat</a>");
      $(".breadcrumb-item").eq(1).text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".h1").text("Associação de Apoio a Imigrantes e Refugiados em Portugal");
      $(".description").children().eq(0).text("L'Association pour le soutien des immigrés et des réfugiés au Portugal a été constituée à but non lucratif conformément à la loi portugaise, le 18 septembre 2015. Les membres de l'Association pour le soutien des immigrés et des réfugiés au Portugal qui, quelle que soit leur origine , langue et genre, ont décidé de s'unir pour améliorer les conditions de vie de l'APIRP au Portugal. Nous croyons qu'en unissant nos forces et en travaillant ensemble, nous faciliterons notre intégration dans le pays qui nous a accueillis : le Portugal!");
      $(".accordion").children().eq(0).text("Mission");
      $(".accordion").children().eq(2).text("Objectifs de l'association");
      $(".accordion").children().eq(4).text("Valeurs");
      $(".panel").eq(0).html("APIRP - Association pour le soutien des immigrés et des réfugiés au Portugal, a pour mission de promouvoir l'intégration des immigrés et des réfugiés au Portugal, à travers le développement d'actions et de projets d'intervention, dans les domaines socioculturels liés à la conscience civique et à l'autodétermination des immigrés et réfugiés , à travers un dialogue permanent entre immigrés et réfugiés et entre ces derniers et la société portugaise sous la forme de ses institutions.");
      $(".panel").eq(1).html("<ul><li><i class='fa-solid fa-square squareli'></i>Faire connaître à ses associés les droits et devoirs des immigrés et des réfugiés inscrits dans la législation portugaise, à tous les niveaux;</li><li><i class='fa-solid fa-square squareli'></i>Favoriser le développement d'initiatives socioculturelles;</li><li><i class='fa-solid fa-square squareli'></i>Établir des liens sociaux et culturels entre les immigrés et les réfugiés et entre cette société portugaise;</li><li><i class='fa-solid fa-square squareli'></i>Établir des contacts avec les différents employeurs en vue d'une employabilité plus grande et plus adéquate des immigrants et des réfugiés.</li></ul>");
      $(".panel").eq(2).html("<p><b>Droits humains</b></p>Le droit à un toit est incontestable et l'un des plus importants pour vivre dans la dignité. Car il n'y a pas de dignité sans toit. Esprit d'équipe nous croyons qu'en unissant nos forces et en travaillant ensemble, nous facilitons notre intégration dans le pays qui nous a accueilli.");
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
              db: "comentarios_apirp"
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