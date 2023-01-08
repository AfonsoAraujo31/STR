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
 * ! SEARCH BAR *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
const searchInput = document.getElementById("searchInput");
const namesFromDOM = document.getElementsByClassName("name");
searchInput.addEventListener("keyup", (event) => {
  const { value } = event.target;
  const searchQuery = value.toLowerCase();

  for (const nameElement of namesFromDOM) {
    let name = nameElement.textContent.toLowerCase();
    if (name.includes(searchQuery)) {
      nameElement.style.display = "block";
    } else {
      nameElement.style.display = "none";
    }
  }
});
/**
 * ! BOTÃO DE IR PARA O TOPO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
/**
 * ! ASSOCIAÇÕES *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
document.querySelectorAll(".featured-image-1").forEach((image_1) => {
  image_1.addEventListener("click", () => {
    var src = image_1.getAttribute("src");
    document.querySelector(".big-image-1").src = src;
  });
});

document.querySelectorAll(".featured-image-2").forEach((image_2) => {
  image_2.addEventListener("click", () => {
    var src = image_2.getAttribute("src");
    document.querySelector(".big-image-2").src = src;
  });
});

document.querySelectorAll(".featured-image-3").forEach((image_3) => {
  image_3.addEventListener("click", () => {
    var src = image_3.getAttribute("src");
    document.querySelector(".big-image-3").src = src;
  });
});
document.querySelectorAll(".featured-image-4").forEach((image_4) => {
  image_4.addEventListener("click", () => {
    var src = image_4.getAttribute("src");
    document.querySelector(".big-image-4").src = src;
  });
});
document.querySelectorAll(".featured-image-5").forEach((image_5) => {
  image_5.addEventListener("click", () => {
    var src = image_5.getAttribute("src");
    document.querySelector(".big-image-5").src = src;
  });
});
/**
 * ! SECTION NUMBERS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
document.body.onresize = function () {
  if ($(window).width() < "1200") {
    document.getElementById("number-cell1").classList.remove("number-cell1");
    document.getElementById("number-cell2").classList.remove("number-cell2");
    document.getElementById("number-cell3").classList.remove("number-cell3");
    document.getElementById("number-cell4").classList.remove("number-cell4");
    document.getElementById("number-cell5").classList.remove("number-cell5");
  } else {
    document.getElementById("number-cell1").classList.add("number-cell1");
    document.getElementById("number-cell2").classList.add("number-cell2");
    document.getElementById("number-cell3").classList.add("number-cell3");
    document.getElementById("number-cell4").classList.add("number-cell4");
    document.getElementById("number-cell5").classList.add("number-cell5");
  }
};

addEventListener('DOMContentLoaded', (event) => {
  if ($(window).width() < "1200") {
    document.getElementById("number-cell1").classList.remove("number-cell1");
    document.getElementById("number-cell2").classList.remove("number-cell2");
    document.getElementById("number-cell3").classList.remove("number-cell3");
    document.getElementById("number-cell4").classList.remove("number-cell4");
    document.getElementById("number-cell5").classList.remove("number-cell5");
  } else {
    document.getElementById("number-cell1").classList.add("number-cell1");
    document.getElementById("number-cell2").classList.add("number-cell2");
    document.getElementById("number-cell3").classList.add("number-cell3");
    document.getElementById("number-cell4").classList.add("number-cell4");
    document.getElementById("number-cell5").classList.add("number-cell5");
  }
});


let valueDisplays = document.querySelectorAll(".num");
let interval = 2000;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});