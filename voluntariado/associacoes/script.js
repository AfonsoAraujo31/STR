const acc = document.getElementsByClassName("accordion");
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
  if (localStorage.getItem("sing_in") == 1) {
    document.getElementById("comments").innerHTML = `
    <form action = "insert_comment.php" method = "GET">
      <div class="card-footer py-3 border-0" style="background-color: transparent;">
        <div class="d-flex flex-start w-100">
          <img class="rounded-circle shadow-1-strong me-3" src="http://gravatar.com/avatar/412c0b0ec99008245d902e6ed0b264ee?s=80" alt="avatar" width="40" height="40" />
            <div class="form-outline w-100">
              <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;" name="comment"></textarea>
            </div>
          </div>
          <div class="float-end mt-2 pt-1">
            <button type="submit" class="btn  btn-sm" style="background-color: #ff5e14a8; color:  #fff;">Enviar comentário</button>
            <button type="button" class="btn btn-outline btn-sm" onclick="clear_text()" style="background-color: #ff5e14a8; color: #fff;">Cancelar</button>
          </div>
        </div>
        <div class="comments-app" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">
          <div class="comment">
            <div class="comment-avatar">
              <img src="http://gravatar.com/avatar/412c0b0ec99008245d902e6ed0b264ee?s=80">
  </div>
    </form>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum.</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
              <a href="mailto:sexar@pagelab.io">Sexar</a>
            </span>
            <span class="comment-date">Feb 2, 2013 11:32:04 PM</span>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "str";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM comentarios";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
       echo $row["comentario"]."<br>";
    }
$result->free();
}
?>
    `;
    let el = document.getElementById("comments");
    el.classList.remove("d-flex justify-content-center login");
  }
});
function clear_text(){
  document.getElementById('textAreaExample').value=""; 
}