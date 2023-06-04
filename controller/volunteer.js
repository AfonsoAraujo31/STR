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
 * ! SECTION RESPONSIVE NUMBERS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
document.body.onresize = function () {
  if ($(window).width() < "1000") {
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

addEventListener("DOMContentLoaded", (event) => {
  if ($(window).width() < "1000") {
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
/**
 * ! SECTION COUNTING NUMBERS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*
 */
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