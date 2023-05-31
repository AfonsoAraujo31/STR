/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    $(".lista").children().eq(0).text("Nome");
    $(".lista").children().eq(1).text("Data de Nascimento");
    $(".lista").children().eq(2).text("Morada");
    $(".lista").children().eq(3).text("Telemóvel");
    $(".lista").children().eq(4).text("Nacionalidade");
    $(".lista").children().eq(5).text("Doador Especial");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Ações");
    $(".title").eq(4).text("Utilizadores");
    $(".title").eq(5).text("Comentários");
    $(".delete").text("Eliminar");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    $(".lista").children().eq(0).text("Name");
    $(".lista").children().eq(1).text("Date of birth");
    $(".lista").children().eq(2).text("Address");
    $(".lista").children().eq(3).text("Phone");
    $(".lista").children().eq(4).text("Nationality");
    $(".lista").children().eq(5).text("Special donator");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Actions");
    $(".title").eq(4).text("Users");
    $(".title").eq(5).text("Comments");
    $(".delete").text("Delete");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    $(".lista").children().eq(0).text("Nom");
    $(".lista").children().eq(1).text("Date de naissance");
    $(".lista").children().eq(2).text("Address");
    $(".lista").children().eq(3).text("Téléphone");
    $(".lista").children().eq(4).text("Nationalité");
    $(".lista").children().eq(5).text("Donateur spécial");
    $(".lista").children().eq(6).text("Admin");
    $(".lista").children().eq(7).text("Actions");
    $(".title").eq(4).text("Utilisateurs");
    $(".title").eq(5).text("Commentaires");
    $(".delete").text("Delete");
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".lista").children().eq(0).text("Nome");
      $(".lista").children().eq(1).text("Data de Nascimento");
      $(".lista").children().eq(2).text("Morada");
      $(".lista").children().eq(3).text("Telemóvel");
      $(".lista").children().eq(4).text("Nacionalidade");
      $(".lista").children().eq(5).text("Doador Especial");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Ações");
      $(".title").eq(4).text("Utilizadores");
      $(".title").eq(5).text("Comentários");
      $(".delete").text("Eliminar");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".lista").children().eq(0).text("Name");
      $(".lista").children().eq(1).text("Date of birth");
      $(".lista").children().eq(2).text("Address");
      $(".lista").children().eq(3).text("Phone");
      $(".lista").children().eq(4).text("Nationality");
      $(".lista").children().eq(5).text("Special donator");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Actions");
      $(".title").eq(4).text("Users");
      $(".title").eq(5).text("Comments");
      $(".delete").text("Delete");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".lista").children().eq(0).text("Nom");
      $(".lista").children().eq(1).text("Date de naissance");
      $(".lista").children().eq(2).text("Address");
      $(".lista").children().eq(3).text("Téléphone");
      $(".lista").children().eq(4).text("Nationalité");
      $(".lista").children().eq(5).text("Donateur spécial");
      $(".lista").children().eq(6).text("Admin");
      $(".lista").children().eq(7).text("Actions");
      $(".title").eq(4).text("Utilisateurs");
      $(".title").eq(5).text("Commentaires");
      $(".delete").text("Delete");
    });
  }
});
