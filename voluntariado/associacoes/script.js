var acc = document.getElementsByClassName("accordion");
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
    document.getElementById("image-list").innerHTML = "";
  } else {
    window.location.reload(true);
  }
};
addEventListener("DOMContentLoaded", (event) => {
  if ($(window).width() < "850") {
    document.getElementById("image-list").innerHTML = "";
  }
});

addEventListener("DOMContentLoaded", (event) => {
  const db = "";
  //0 = login por fazer || 1 == login feito
  //localStorage.setItem("sing_in",0);
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
 * ! ALERT *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
function teste() {
  if (document.getElementById("textAreaExample").value.length == 0) {
    var myButton = document.querySelectorAll(".teste");
    myButton.type = "button";
    $(".alert").show("medium");
    setTimeout(function () {
      $(".alert").hide("medium");
    }, 4000);
    document.getElementById("comment_form").reset();
  } else {
    const variavel1 = document.getElementById("textAreaExample").value;
    const variavel2 = document.getElementById("idUnico").value;
    window.location.href = "http://localhost/STR/voluntariado/associacoes/insert_comment.php?user=" + variavel2 + "&comentario=" + variavel1 + "&db=" + db;
  }
}

$(".sendButton .close").click(function () {
  $(".alert").hide("medium");
});

//alterar as menssagens de erro na conexão com a base de dados e  outros erros