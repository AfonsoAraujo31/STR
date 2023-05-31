const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

function perfil() {
  $("html, body").css("overflow", "auto");
  $(".box").css("display", "none");
  //on screen
  $("#home-box").css("display", "block");
  //off screen
  $("#candidatar-box").css("display", "none");
  $("#doacao-box").css("display", "none");
  $("#admin-box").css("display", "none");
  //Colors
  $("#perfil").css("background-color", "#ff9564");
  $("#candidatar").css("background-color", "#2e2e2e");
  $("#doacao").css("background-color", "#2e2e2e");
  $("#admin").css("background-color", "#2e2e2e");
}

function candidatar() {
  $("html, body").css("overflow", "hidden");
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  //on screen
  $("#candidatar-box").css("display", "block");
  //off screen
  $("#home-box").css("display", "none");
  $("#doacao-box").css("display", "none");
  $("#admin-box").css("display", "none");
  //Colors
  $("#perfil").css("background-color", "#2e2e2e");
  $("#candidatar").css("background-color", "#ff9564");
  $("#doacao").css("background-color", "#2e2e2e");
  $("#admin").css("background-color", "#2e2e2e");
}

function doacao() {
  $("html, body").css("overflow", "auto");
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  //on screen
  $("#doacao-box").css("display", "block");
  //off screen
  $("#home-box").css("display", "none");
  $("#candidatar-box").css("display", "none");
  $("#admin-box").css("display", "none");
  //Colors
  $("#perfil").css("background-color", "#2e2e2e");
  $("#candidatar").css("background-color", "#2e2e2e");
  $("#doacao").css("background-color", "#ff9564");
  $("#admin").css("background-color", "#2e2e2e");
}
function admin() {
  $("html, body").css("overflow", "auto");
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  //on screen
  $("#admin-box").css("display", "block");
  //off screen
  $("#home-box").css("display", "none");
  $("#candidatar-box").css("display", "none");
  $("#doacao-box").css("display", "none");
  //Colors
  $("#perfil").css("background-color", "#2e2e2e");
  $("#candidatar").css("background-color", "#2e2e2e");
  $("#doacao").css("background-color", "#2e2e2e");
  $("#admin").css("background-color", "#ff9564");
}