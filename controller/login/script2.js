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

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } else {
    modeText.innerText = "Dark mode";
  }
});

function perfil() {
  $(".box").css("display", "none");
  $("#home-box").css("display", "block");
}
function doacao() {
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  $("#doacao-box").css("display", "block");
}
function obs() {
  $(".box").css("display", "none");
  $(".box-visible").css("display", "none");
  $("#obs-box").css("display", "block");
}