/**
 * ! EFEITO SHOW ON SCROLL *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
window.addEventListener("scroll", reveal);

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 150;

    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
/**
 * ! BOTÃO BACK TO TOP *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});

document.addEventListener('DOMContentLoaded', () => {
  if (localStorage.getItem("sing_in") == 1) {
    document.getElementById("cover").classList.remove("blur-in");
    document.getElementById("cover").classList.remove("blur-out");
  }
});
document.cookie = 'temp_user='+localStorage.getItem('temp_user');