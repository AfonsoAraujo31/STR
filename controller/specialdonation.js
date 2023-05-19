document.cookie = "temp_user=" + localStorage.getItem("temp_user");

var swiper = new Swiper(".blog-slider", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: ".blog-slider__pagination",
    clickable: true,
  },
});

function teste(){
  $('#errorAlertlogin').show('medium');
  setTimeout(function () {
    $('#errorAlertlogin').hide('medium');
  }, 4000);
}