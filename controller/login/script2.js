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
  $(".box").css("display", "none");
  $("#home-box").css("display", "block");
  $("#perfil").css("background-color", "#ff9564");
  $("#doacao").css("background-color", "#2e2e2e");
  $("#admin").css("background-color", "#2e2e2e");
}
function doacao() {
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  $("#doacao-box").css("display", "block");
  $("#perfil").css("background-color", "#2e2e2e ");
  $("#doacao").css("background-color", "#ff9564");
  $("#admin").css("background-color", "#2e2e2e");
}
function admin() {
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  $("#obs-box").css("display", "block");
  $("#perfil").css("background-color", "#2e2e2e");
  $("#doacao").css("background-color", "#2e2e2e");
  $("#admin").css("background-color", "#ff9564");
}
