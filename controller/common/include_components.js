fetch("http://localhost/STR/view/components/footer.html")
  .then((response) => response.text())
  .then((content) => {
    document.getElementById("includedFooterContent").innerHTML = content;
});
fetch("http://localhost/STR/view/components/icon.html")
  .then((response) => response.text())
  .then((content) => {
    document.getElementById("includedLogoContent").innerHTML = content;
});
fetch("http://localhost/STR/view/components/css.html")
  .then((response) => response.text())
  .then((content) => {
    document.getElementById("includedCssContent").innerHTML = content;
});
