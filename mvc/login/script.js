document.cookie = 'temp_user='+localStorage.getItem('temp_user');

$(document).ready(function () {
  $("#password").keyup(function () {
    var password = $("#password").val();
    if (checkStrength(password) == false) {
      $("#sign-up").attr("disabled", true);
    }
  });
  function checkStrength(password) {
    var strength = 0;

    //If password contains both lower and uppercase characters, increase strength value.
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
      strength += 1;
      $(".low-upper-case").addClass("text-success");
      $(".low-upper-case i").removeClass("fa-file-text").addClass("fa-check");
      $("#popover-password-top").addClass("hide");
    } else {
      $(".low-upper-case").removeClass("text-success");
      $(".low-upper-case i").addClass("fa-file-text").removeClass("fa-check");
      $("#popover-password-top").removeClass("hide");
    }
    //If it has numbers and characters, increase strength value.
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
      strength += 1;
      $(".one-number").addClass("text-success");
      $(".one-number i").removeClass("fa-file-text").addClass("fa-check");
      $("#popover-password-top").addClass("hide");
    } else {
      $(".one-number").removeClass("text-success");
      $(".one-number i").addClass("fa-file-text").removeClass("fa-check");
      $("#popover-password-top").removeClass("hide");
    }

    //If it has one special character, increase strength value.
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
      strength += 1;
      $(".one-special-char").addClass("text-success");
      $(".one-special-char i").removeClass("fa-file-text").addClass("fa-check");
      $("#popover-password-top").addClass("hide");
    } else {
      $(".one-special-char").removeClass("text-success");
      $(".one-special-char i").addClass("fa-file-text").removeClass("fa-check");
      $("#popover-password-top").removeClass("hide");
    }

    if (password.length > 7) {
      strength += 1;
      $(".eight-character").addClass("text-success");
      $(".eight-character i").removeClass("fa-file-text").addClass("fa-check");
      $("#popover-password-top").addClass("hide");
    } else {
      $(".eight-character").removeClass("text-success");
      $(".eight-character i").addClass("fa-file-text").removeClass("fa-check");
      $("#popover-password-top").removeClass("hide");
    }

    // If value is less than 2

    if (strength < 2) {
      $("#result").removeClass();
      $("#password-strength").addClass("progress-bar-danger");
      $("#result").addClass("text-danger").text("Very Week");
      $("#password-strength").css("width", "10%");
      $("#password-strength").css("background-color", "#AA4A44");
    } else if (strength == 2) {
      $("#result").addClass("good");
      $("#password-strength").removeClass("progress-bar-danger");
      $("#password-strength").addClass("progress-bar-warning");
      $("#result").addClass("text-warning").text("Week");
      $("#password-strength").css("width", "60%");
      $("#password-strength").css("background-color", "#CC5500");
      return "Week";
    } else if (strength == 4) {
      $("#result").removeClass();
      $("#result").addClass("strong");
      $("#password-strength").removeClass("progress-bar-warning");
      $("#password-strength").addClass("progress-bar-success");
      $("#result").addClass("text-success").text("Strength");
      $("#password-strength").css("width", "100%");
      $("#password-strength").css("background-color", "#228B22");
      return "Strong";
    }
  }
});

function login(){
  if(document.getElementById("input_email").value.length == 0 || document.getElementById("input_password").value.length == 0){
    $("#errorAlertlogin").show("medium");
    setTimeout(function () {
      $("#errorAlertlogin").hide("medium");
    }, 4000);
  }else{
    localStorage.setItem("sing_in", 1);
    localStorage.setItem("temp_user", document.getElementById("input_email").value);
    document.cookie = "current_user="+document.getElementById("input_email").value;
    document.cookie = "temp_user="+document.getElementById("input_email").value;
    const variavel1 = document.getElementById("input_email").value;
    const variavel2 = document.getElementById("input_password").value;
    window.location.href = "http://localhost/STR/login/db_login.php?email=" + variavel1 + "&pass=" + variavel2;
  }
}

function registo(){
  if(document.getElementById("input_nome_reg").value.length == 0 || document.getElementById("input_sobrenome_reg").value.length == 0 || document.getElementById("input_email_reg").value.length == 0 || document.getElementById("input_telemovel_reg").value.length == 0 || document.getElementById("input_pais_reg").value.length == 0 || document.getElementById("password").value.length == 0){
    $("#errorAlertlogin1").show("medium");
    setTimeout(function () {
      $("#errorAlertlogin1").hide("medium");
    }, 4000);
  }else{
    localStorage.setItem("sing_in", 1);
    localStorage.setItem("temp_user", document.getElementById("input_email").value);
    document.cookie = "current_user="+document.getElementById("input_email").value;
    const variavel1 = document.getElementById("input_nome_reg").value;
    const variavel2 = document.getElementById("input_sobrenome_reg").value;
    const variavel3 = document.getElementById("input_email_reg").value;
    const variavel4 = document.getElementById("input_telemovel_reg").value;
    const variavel5 = document.getElementById("input_pais_reg").value;
    const variavel6 = document.getElementById("password").value;
    window.location.href = "http://localhost/STR/login/db_register.php?nome=" + variavel1 + "&sobrenome=" + variavel2 + "&email=" + variavel3+ "&telemovel=" + variavel4+ "&pais=" + variavel5+ "&pass=" + variavel6;
  }
}

function teste(){
  localStorage.setItem('temp_user', '');
  document.cookie = "current_user=";
  localStorage.setItem("sing_in",0);
}