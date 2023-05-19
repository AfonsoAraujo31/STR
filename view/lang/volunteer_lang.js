function associacoes_pt() {
  $(".placeholder").attr("placeholder", "Procure uma associação");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_pt.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
                <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">Ver mais</a></button>
        </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}
function associacoes_en() {
  $(".placeholder").attr("placeholder", "Search for an association");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_en.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
              <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">See More</a></button>
        </div>
      </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}
function associacoes_fr() {
  $(".placeholder").attr("placeholder", "Procure uma associação");
  function limpar() {
    let alvo = document.getElementById("results");
    alvo.innerText = "";
    console.log(alvo);
  }
  limpar();
  var xhr = new XMLHttpRequest();
  xhr.open("get", "./resources/association_fr.json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var list = JSON.parse(xhr.responseText);
      list.forEach((element) => {
        var newLine = document.createElement("li");
        newLine.innerHTML = `<div class="name" name="${element.name}">
        <div class="row ${element.reveal}">
        <div class="image-container">
            <div class="${element.class}">
              <img src="./assets/association/main/${element.photo}" alt="" class="big-image-1">
            </div>
        </div>
        <div class="content">
            <h3>${element.name}</h3>
            <div class="stars">
                ${element.star}
            </div>
            <p>
            ${element.detail}
            <br><button class="button-28"><a class="button-28-link" href="${element.id}">Voir plus</a></button>
        </div>
      </div>
      </div>`;
        document.getElementById("results").appendChild(newLine);
      });
    }
  };
  xhr.send(null);
}
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
  $(".pt").click(function () {
    localStorage.setItem("language", 1);
    associacoes_pt();
    $(".big-text").text("OS NOSSOS ASSOCIADOS");
    $(".content-text").text(
      "Nossos associados são fundamentais para o sucesso do nosso programa de voluntariado. Através de sua dedicação e comprometimento, temos conseguido ajudar cada vez mais pessoas e causas importantes em nossa comunidade. Cada associado traz consigo habilidades e experiências únicas que são valiosas para nossos projetos."
    );
    $(".number-text").eq(0).text("ASSOCIAÇÕES");
    $(".number-text").eq(1).text("VOLUNTÁRIOS");
    $(".number-text").eq(2).text("PAÍSES");
    $(".number-text").eq(3).text("COLABORADORES");
    $(".number-text").eq(4).text("MEMBROS");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Inglês JQUERY
 */
$(function () {
  $(".en").click(function () {
    localStorage.setItem("language", 2);
    associacoes_en();
    $(".big-text").text("OUR ASSOCIATES");
    $(".content-text").text(
      "Our associates are critical to the success of our volunteer program. Through their dedication and commitment, we have been able to help more and more important people and causes in our community. Each associate brings with them unique skills and experiences that are valuable to our projects."
    );
    $(".number-text").eq(0).text("ASSOCIATIONS");
    $(".number-text").eq(1).text("VOLUNTEERS");
    $(".number-text").eq(2).text("COUNTRIES");
    $(".number-text").eq(3).text("COLLABORATORS");
    $(".number-text").eq(4).text("MEMBERS");
  });
});
/**
 * ! LINGUAGEM DA PÁGINA
 * ? Françes JQUERY
 */
$(function () {
  $(".fr").click(function () {
    localStorage.setItem("language", 3);
    associacoes_fr();
    $(".big-text").text("NOS ASSOCIÉS");
    $(".content-text").text(
      "Nos associés sont essentiels au succès de notre programme de bénévolat. Grâce à leur dévouement et à leur engagement, nous avons pu aider de plus en plus de personnes et de causes importantes dans notre communauté. Chaque associé apporte avec lui des compétences et des expériences uniques qui sont précieuses pour nos projets."
    );
    $(".number-text").eq(0).text("LES ASSOCIATIONS");
    $(".number-text").eq(1).text("BÉNÉVOLES");
    $(".number-text").eq(2).text("DES PAYS");
    $(".number-text").eq(3).text("COLLABORATRICES");
    $(".number-text").eq(4).text("MEMBRES");
  });
});
/**
 * ! LINGUAGEM RESPONISVA
 */
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      associacoes_pt();
      $(".big-text").text("OS NOSSOS ASSOCIADOS");
      $(".content-text").text(
        "Nossos associados são fundamentais para o sucesso do nosso programa de voluntariado. Através de sua dedicação e comprometimento, temos conseguido ajudar cada vez mais pessoas e causas importantes em nossa comunidade. Cada associado traz consigo habilidades e experiências únicas que são valiosas para nossos projetos."
      );
      $(".number-text").eq(0).text("ASSOCIAÇÕES");
      $(".number-text").eq(1).text("VOLUNTÁRIOS");
      $(".number-text").eq(2).text("PAÍSES");
      $(".number-text").eq(3).text("COLABORADORES");
      $(".number-text").eq(4).text("MEMBROS");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      associacoes_en();
      $(".big-text").text("OUR ASSOCIATES");
      $(".content-text").text(
        "Our associates are critical to the success of our volunteer program. Through their dedication and commitment, we have been able to help more and more important people and causes in our community. Each associate brings with them unique skills and experiences that are valuable to our projects."
      );
      $(".number-text").eq(0).text("ASSOCIATIONS");
      $(".number-text").eq(1).text("VOLUNTEERS");
      $(".number-text").eq(2).text("COUNTRIES");
      $(".number-text").eq(3).text("COLLABORATORS");
      $(".number-text").eq(4).text("MEMBERS");
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      associacoes_fr();
      $(".big-text").text("NOS ASSOCIÉS");
      $(".content-text").text(
        "Nos associés sont essentiels au succès de notre programme de bénévolat. Grâce à leur dévouement et à leur engagement, nous avons pu aider de plus en plus de personnes et de causes importantes dans notre communauté. Chaque associé apporte avec lui des compétences et des expériences uniques qui sont précieuses pour nos projets."
      );
      $(".number-text").eq(0).text("LES ASSOCIATIONS");
      $(".number-text").eq(1).text("BÉNÉVOLES");
      $(".number-text").eq(2).text("DES PAYS");
      $(".number-text").eq(3).text("COLLABORATRICES");
      $(".number-text").eq(4).text("MEMBRES");
    });
  }
});
