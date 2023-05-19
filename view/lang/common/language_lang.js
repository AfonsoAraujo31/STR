$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    //language
    $(".lang").children().eq(0).text("Português");
    $(".lang").children().eq(1).text("Inglês");
    $(".lang").children().eq(2).text("Françês");
    $(".language-selected").html("Português");
    $(".language-selected").html(
      '<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
    );
  });
});
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    $(".lang").children().eq(0).text("Portuguese");
    $(".lang").children().eq(1).text("English");
    $(".lang").children().eq(2).text("French");
    $(".language-selected").text("English");
    $(".language-selected").html(
      '<img id="flags" src="../view/assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
    );
  });
});
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    $(".lang").children().eq(0).text("Portugais");
    $(".lang").children().eq(1).text("Anglais");
    $(".lang").children().eq(2).text("Français");
    $(".language-selected").text("Français");
    $(".language-selected").html(
      '<img id="flags" src="../view/assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
    );
  });
});

addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".lang").children().eq(0).text("Português");
      $(".lang").children().eq(1).text("Inglês");
      $(".lang").children().eq(2).text("Françês");
      $(".language-selected").html("Português");
      $(".language-selected").html(
        '<img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português'
      );
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".lang").children().eq(0).text("Portuguese");
      $(".lang").children().eq(1).text("English");
      $(".lang").children().eq(2).text("French");
      $(".language-selected").text("English");
      $(".language-selected").html(
        '<img id="flags" src="../view/assets/flags/gb-eng.png" width="35px" height="25px" style="margin-right:10px;">English'
      );
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".lang").children().eq(0).text("Portugais");
      $(".lang").children().eq(1).text("Anglais");
      $(".lang").children().eq(2).text("Français");
      $(".language-selected").text("Français");
      $(".language-selected").html(
        '<img id="flags" src="../view/assets/flags/fr.png" width="35px" height="25px" style="margin-right:10px;">Français'
      );
    });
  }
});