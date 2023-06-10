$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
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
      .html('<i class="fa-solid fa-duotone fa-camera-retro"></i> Galeria');
  });
});
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
      .html('<i class="fa-solid fa-duotone fa-camera-retro"></i> Gallery');
  });
});
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
      .html('<i class="fa-solid fa-duotone fa-camera-retro"></i>s Galerie');
  });
});

addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
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
        .html('<i class="fa-solid fa-duotone fa-camera-retro"></i> Galeria');
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
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
        .html('<i class="fa-solid fa-duotone fa-camera-retro"></i> Gallery');
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
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
        .html('<i class="fa-solid fa-duotone fa-camera-retro"></i> Galerie  ');
    });
  }
});