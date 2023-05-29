window.onload = function () {
  var pictureInput = document.getElementById("picture-input");
  pictureInput.addEventListener("change", function () {
    readURL(this);
  });
};

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      var picturePreview = document.getElementById("picture-preview");
      picturePreview.setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}