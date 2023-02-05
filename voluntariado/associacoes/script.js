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
function asa() {
  localStorage.setItem("sing_in", 0);
  alert(localStorage.getItem("sing_in"));
}

addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("sing_in") == 1) {
    document.getElementById("comments").innerHTML = `
    <section >
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="images/flags/pt.png" alt="avatar" width="40" height="40" />
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                                    <label class="form-label" for="textAreaExample">Mensagem</label>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row d-flex justify-content-center">
            <div class="col-md-11 ">
    
                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65" height="65" />
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="">
                            <h5>Johny Cash</h5>
                            <p class="small">3 hours ago</p>
                            <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </p>
    
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                                </div>
                                <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
        </div>
    
    </section>
    </div>`;
  }
});

function teste() {
  $.ajax({
    type: "post",
    url: "db_login.php",
    data: {
      email: document.getElementById("form2Example1").value,
      password: document.getElementById("form2Example2").value,
    },
    success: function (response) {
      location.href = "db_login.php";
    },
  });
}
