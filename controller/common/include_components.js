fetch("http://localhost/STR/view/components/footer.html")
  .then((response) => response.text())
  .then((content) => {
    document.getElementById("includedFooterContent").innerHTML = content;
});
