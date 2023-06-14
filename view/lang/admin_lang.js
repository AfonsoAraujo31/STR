/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    //cards
    $(".desc").eq(0).text("Candidaturas");
    $(".desc").eq(1).text("Utilizadores");
    $(".desc").eq(2).text("Candidaturas a doador");
    $(".desc").eq(3).text("Comentários");
    //table
    $(".lista").children().eq(0).text("Nome");
    $(".lista").children().eq(1).text("Data de Nascimento");
    $(".lista").children().eq(2).text("Morada");
    $(".lista").children().eq(3).text("Telemóvel");
    $(".lista").children().eq(4).text("Nacionalidade");
    $(".lista").children().eq(5).text("Doador Especial");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Ações");
    //titulos
    $(".title").eq(4).text("Utilizadores");
    $(".title").eq(5).text("Comentários");
    $(".title").eq(6).text("Candidatos a Doador Especial");
    $(".title").eq(7).text("Candidaturas às famílias");
    //alerta de 0 resultados
    $(".warning_results").children().eq(0).text("0 resultados encontrados");
    $(".warning_results").children().eq(1).text("Desculpe! Neste momento não existe nenhuma candidatura.");
    //botao comentarios
    $(".delete").text("Eliminar");
    //editar popup

    //candidaturas as familias
    $(".appliance_familys_description").eq(0).text("Tipo");
    $(".appliance_familys_description").eq(1).text("Quantidade");
    $(".appliance_familys_description").eq(2).text("Frequência");
    $(".appliance_familys_description").eq(3).text("Data de início");
    $(".appliance_familys_description").eq(4).text("Motivação");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    //cards
    $(".desc").eq(0).text("Applications");
    $(".desc").eq(1).text("Users");
    $(".desc").eq(2).text("Applications for donatores");
    $(".desc").eq(3).text("Comments");
    //table
    $(".lista").children().eq(0).text("Name");
    $(".lista").children().eq(1).text("Date of birth");
    $(".lista").children().eq(2).text("Address");
    $(".lista").children().eq(3).text("Phone");
    $(".lista").children().eq(4).text("Nationality");
    $(".lista").children().eq(5).text("Special donator");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Actions");
    //titulos
    $(".title").eq(4).text("Users");
    $(".title").eq(5).text("Comments");
    $(".title").eq(6).text("Applications to Special Donator");
    $(".title").eq(7).text("Applications to familys");
    //alerta de 0 resultados
    $(".warning_results").children().eq(0).text("0 results founded");
    $(".warning_results").children().eq(1).text("Sorry! There are currently no applications.");
    //botao comentarios
    $(".delete").text("Delete");
    
    //candidaturas as familias
    $(".appliance_familys_description").eq(0).text("Type");
    $(".appliance_familys_description").eq(1).text("Quantity");
    $(".appliance_familys_description").eq(2).text("Frequency");
    $(".appliance_familys_description").eq(3).text("Data from start");
    $(".appliance_familys_description").eq(4).text("Motivation");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    //cards
    $(".desc").eq(0).text("Applications");
    $(".desc").eq(1).text("Utilisatrices");
    $(".desc").eq(2).text("Applications for donateur");
    $(".desc").eq(3).text("Commentaires");
    //table
    $(".lista").children().eq(0).text("Nom");
    $(".lista").children().eq(1).text("Date de naissance");
    $(".lista").children().eq(2).text("Address");
    $(".lista").children().eq(3).text("Téléphone");
    $(".lista").children().eq(4).text("Nationalité");
    $(".lista").children().eq(5).text("Donateur spécial");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Actions");
    //titulos
    $(".title").eq(4).text("Utilisateurs");
    $(".title").eq(5).text("Commentaires");
    $(".title").eq(6).text("Applications au donateur spécial");
    $(".title").eq(7).text("Applications aux familles");
    //botao comentarios
    $(".delete").text("Delete");
    //alerta de 0 resultados
    $(".warning_results").children().eq(0).text("0 résultats trouvés");
    $(".warning_results").children().eq(1).text("Désolé! Il n'y a actuellement aucune candidature.");

    //candidaturas as familias
    $(".appliance_familys_description").eq(0).text("Taper");
    $(".appliance_familys_description").eq(1).text("Quantité");
    $(".appliance_familys_description").eq(2).text("Fréquence");
    $(".appliance_familys_description").eq(3).text("Données depuis le début");
    $(".appliance_familys_description").eq(4).text("Motivation");
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      //cards
      $(".desc").eq(0).text("Candidaturas");
      $(".desc").eq(1).text("Utilizadores");
      $(".desc").eq(2).text("Candidaturas a doador");
      $(".desc").eq(3).text("Comentários");
      //table
      $(".lista").children().eq(0).text("Nome");
      $(".lista").children().eq(1).text("Data de Nascimento");
      $(".lista").children().eq(2).text("Morada");
      $(".lista").children().eq(3).text("Telemóvel");
      $(".lista").children().eq(4).text("Nacionalidade");
      $(".lista").children().eq(5).text("Doador Especial");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Ações");
      //titulos
      $(".title").eq(4).text("Utilizadores");
      $(".title").eq(5).text("Comentários");
      $(".title").eq(6).text("Candidatos a Doador Especial");
      $(".title").eq(7).text("Candidaturas às famílias");
      //botao comentarios
      $(".delete").text("Eliminar");
      //alerta de 0 resultados
      $(".warning_results").children().eq(0).text("0 resultados encontrados");
      $(".warning_results").children().eq(1).text("Desculpe! Neste momento não existe nenhuma candidatura.");

      //candidaturas as familias
      $(".appliance_familys_description").eq(0).text("Tipo");
      $(".appliance_familys_description").eq(1).text("Quantidade");
      $(".appliance_familys_description").eq(2).text("Frequência");
      $(".appliance_familys_description").eq(3).text("Data de início");
      $(".appliance_familys_description").eq(4).text("Motivação");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      //cards
      $(".desc").eq(0).text("Applications");
      $(".desc").eq(1).text("Users");
      $(".desc").eq(2).text("Applications for donatores");
      $(".desc").eq(3).text("Comments");
      //table
      $(".lista").children().eq(0).text("Name");
      $(".lista").children().eq(1).text("Date of birth");
      $(".lista").children().eq(2).text("Address");
      $(".lista").children().eq(3).text("Phone");
      $(".lista").children().eq(4).text("Nationality");
      $(".lista").children().eq(5).text("Special donator");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Actions");
      //titulos
      $(".title").eq(4).text("Users");
      $(".title").eq(5).text("Comments");
      $(".title").eq(6).text("Applications to Special Donator");
      $(".title").eq(7).text("Applications to familys");
      //botao comentarios
      $(".delete").text("Delete");
      //alerta de 0 resultados
      $(".warning_results").children().eq(0).text("0 results founded");
      $(".warning_results").children().eq(1).text("Sorry! There are currently no applications.");

      //candidaturas as familias
      $(".appliance_familys_description").eq(0).text("Type");
      $(".appliance_familys_description").eq(1).text("Quantity");
      $(".appliance_familys_description").eq(2).text("Frequency");
      $(".appliance_familys_description").eq(3).text("Data from start");
      $(".appliance_familys_description").eq(4).text("Motivation");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      //cards
      $(".desc").eq(0).text("Applications");
      $(".desc").eq(1).text("Utilisatrices");
      $(".desc").eq(2).text("Applications for donateur");
      $(".desc").eq(3).text("Commentaires");
      //table
      $(".lista").children().eq(0).text("Nom");
      $(".lista").children().eq(1).text("Date de naissance");
      $(".lista").children().eq(2).text("Address");
      $(".lista").children().eq(3).text("Téléphone");
      $(".lista").children().eq(4).text("Nationalité");
      $(".lista").children().eq(5).text("Donateur spécial");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Actions");
      //titulos
      $(".title").eq(4).text("Utilisateurs");
      $(".title").eq(5).text("Commentaires");
      $(".title").eq(6).text("Applications au donateur spécial");
      $(".title").eq(7).text("Applications aux familles");
      //botao comentarios
      $(".delete").text("Delete");
      //alerta de 0 resultados
      $(".warning_results").children().eq(0).text("0 résultats trouvés");
      $(".warning_results").children().eq(1).text("Désolé! Il n'y a actuellement aucune candidature.");

      //candidaturas as familias
      $(".appliance_familys_description").eq(0).text("Taper");
      $(".appliance_familys_description").eq(1).text("Quantité");
      $(".appliance_familys_description").eq(2).text("Fréquence");
      $(".appliance_familys_description").eq(3).text("Données depuis le début");
      $(".appliance_familys_description").eq(4).text("Motivation");
    });
  }
});
