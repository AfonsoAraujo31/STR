let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.classList.remove("open");
      this.setAttribute("aria-expanded", "false");
    } else {
      let active = document.querySelectorAll(".accordion.active");
      for (let j = 0; j < active.length; j++) {
        active[j].classList.remove("active");
        active[j].setAttribute("aria-expanded", "false");
        active[j].nextElementSibling.style.maxHeight = null;
        active[j].nextElementSibling.classList.remove("open");
      }
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.classList.add("open");
      this.setAttribute("aria-expanded", "true");
    }
    this.classList.toggle("active");
  });
}
/**
 * ! SECTION RESPONSIVE NUMBERS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
document.body.onresize = function () {
  if ($(window).width() < "850") {
    if (
      window.location.href == "http://localhost/STR/view/association_cv.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cv/cv3.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_cpr.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cpr/cpr1.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_apirp.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/apirp/apirp3.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_alcc.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/alcc/alcc3.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_cbl.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cbl/cbl3.png">';
    }
  } else {
    window.location.reload(true);
  }
};
addEventListener("DOMContentLoaded", (event) => {
  if ($(window).width() < "850") {
    if (
      window.location.href == "http://localhost/STR/view/association_cv.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cv/cv3.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_cpr.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cpr/cpr1.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_apirp.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/apirp/apirp3.png>';
    } else if (
      window.location.href == "http://localhost/STR/view/association_alcc.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/alcc/alcc3.png">';
    } else if (
      window.location.href == "http://localhost/STR/view/association_cbl.php"
    ) {
      document.getElementById("product-gallery").innerHTML =
        '<img class="active" src="http://localhost/STR/view/assets/association/cbl/cbl3.png">';
    }
  }
});

addEventListener("DOMContentLoaded", (event) => {
  let db = null;
  //0 = login por fazer || 1 == login feito
  if (localStorage.getItem("sing_in") == 1) {
    document.getElementById("login").innerHTML = ``;
  } else {
    document.getElementById("comments").innerHTML = ``;
    localStorage.setItem("temp_user", "");
  }
});
function clear_text() {
  document.getElementById("textAreaExample").value = "";
}
/**
 * ! ALERTS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
function send_comment() {
  if (document.getElementById("textAreaExample").value.length == 0) {
    let myButton = document.querySelectorAll(".teste");
    myButton.type = "button";
    $("#errorAlert").show("medium");
    setTimeout(function () {
      $("#errorAlert").hide("medium");
    }, 4000);
    document.getElementById("comment_form").reset();
  } else {
    const variavel1 = document.getElementById("textAreaExample").value;
    const variavel2 = document.getElementById("idUnico").value;
    window.location.href =
      "http://localhost/STR/model/association/insert_comment.php?user=" +
      variavel2 +
      "&comentario=" +
      variavel1 +
      "&db=" +
      db;
  }
}

function login() {
  if (document.getElementById("form2Example17").value.length == 0 || document.getElementById("form2Example27").value.length == 0) {
    $("#errorAlertlogin").show("medium");
    setTimeout(function () {
      $("#errorAlertlogin").hide("medium");
    }, 4000);
    document.getElementById("login").reset();
  } else {
    const variavel1 = document.getElementById("form2Example17").value;
    const variavel2 = document.getElementById("form2Example27").value;
    window.location.href =
      "http://localhost/STR/model/association/login.php?email=" +
      variavel1 +
      "&pass=" +
      variavel2 +
      "&db=" +
      db;
  }
}

$(".sendButton .close").click(function () {
  $(".alert").hide("medium");
});

addEventListener("DOMContentLoaded", (event) => {
  const currentLocation = window.location.href;

  const pages = [
    "association_cv.php?error=login",
    "association_cpr.php?error=login",
    "association_apirp.php?error=login",
    "association_alcc.php?error=login",
    "association_cbl.php?error=login",
  ];

  if (pages.some((page) => currentLocation.includes(page))) {
    $("#errorAlertlogin2").show("medium");
    setTimeout(function () {
      $("#errorAlertlogin2").hide("medium");
    }, 4000);
  }

  if (pages.some((page) => currentLocation.includes(page))) {
    $("#errorAlertcomentarios").show("medium");
    setTimeout(function () {
      $("#errorAlertcomentarios").hide("medium");
    }, 4000);
  }
});