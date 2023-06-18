<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>STR</title>
  <link rel="stylesheet" href="./style.css">
  <div id="includedCssContent"></div>
</head>

<body id="body" style="display:none;">
  <header class="bg-strong-gray">
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars text-white"></i>
    </label>
    <div id="includedLogoContent"></div>
    <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <ul class="nav_links bg-strong-gray" id="routesList">
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a class="text-label-gray hover:text-white" href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
      <li class="li"><a class="active hover:text-white" href="../view/gallery"><i class="fa-solid fa-circle-dollar-to-slot"></i> Galeria </a></li>
      <li class="li"><a class="text-label-gray hover:text-white login" href="../view/login.php"><i class="fa-solid fa-user"></i> Conta</a></li>
      <li>
        <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <div class="language">
          <div class="language-selected text-white"><img id="flags" src="../view/assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
          <ul cl class="bg-white border-white">
            <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
            <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
            <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
          </ul>
        </div>
        <?php include '../model/common/load_profilephoto.php'; ?>
    </ul>
  </header>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <div class="grid">
    <?php
    /*
    ini_set('display_errors', 0);
    require '/wamp64/www/STR/configurations/dbconnection.php';
    $sql = "SELECT * FROM galeria";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $foto_perfil = base64_encode($row['foto']);
        echo "
            <div class='grid-item'>
            <img src='data:image/*;base64," . $foto_perfil . "' />
          </div>
            ";
      }
    }*/
    ?>

    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/00/37/03/0037037f1590875493f413c1fdbd52b1--cool-beards-inspiring-photography.jpg" />
    </div>

    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/cd/90/d9/cd90d9de63fa2c8e5c5e7117e27b5c18--gritty-portrait-photography-studio-photography.jpg">
    </div>

    <!-- Step 3: repeat...--->
    <div class="grid-item">
      <img src="https://1.bp.blogspot.com/-9QM7ciGXRkQ/V1hsB-wNLBI/AAAAAAAAMoA/eYbSHs00PTAjrI4QAmvYAIGCUe1AuRAnwCLcB/s1600/bryan_cranston_0095.jpg">
    </div>

    <div class="grid-item">
      <img src="http://webneel.com/sites/default/files/images/project/best-portrait-photography-regina-pagles%20(10).jpg" />
    </div>


    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/dd/45/96/dd4596b601062eb491ea9bb8e3a78062--two-faces-baby-faces.jpg" />
    </div>

    <div class="grid-item">
      <img src="http://www.marklobo.com.au/news/wp-content/uploads/2013/03/Melbourne_Portrait_Photographer_Mark_Lobo-Cowboy.jpg" />
    </div>

    <div class="grid-item">
      <img src="https://format-com-cld-res.cloudinary.com/image/private/s--PcYqe7Zw--/c_limit,g_center,h_65535,w_960/a_auto,fl_keep_iptc.progressive,q_95/145054-8576001-Rob-Green-by-Zuzana-Breznanikova_7725_b_w.jpg" />
    </div>

    <div class="grid-item">
      <img src="http://www.iefimerida.gr/sites/default/files/janbanning11.jpg" />
    </div>

    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/66/bb/e7/66bbe7acc0d64da627afef440a29714b--portrait-photos-female-portrait.jpg" />
    </div>

    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/25/34/b6/2534b6c18c659546463f13b2dc62d4ce--natural-portraits-female-portraits.jpg" />
    </div>

    <div class="grid-item">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/8d/67/12/8d671230ced871df8428b571ed6ec192.jpg" />
    </div>

  </div>

  <script>
    $(".grid").imagesLoaded(function() {
      $(".grid").masonry({
        itemSelector: ".grid-item"
      });
    });
  </script>
  <!-- Language -->
  <script type="module" src="./lang/common/header_lang.js"></script>
  <script type="module" src="./lang/common/language_lang.js"></script>
  <script type="module" src="./lang/common/footer_lang.js"></script>
  <!-- JavaSricpt -->
  <script src="./script.js"></script>
  <script type="module" src="../controller/common/scroll_animation.js"></script>
  <script type="module" src="../controller/common/backtop.js"></script>
  <script type="module" src="../controller/common/include_components.js"></script>
  <script type="module" src="../configurations/loadcontent.js"></script>
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
</body>

</html>