<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="login.scss">
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <header>
    <!-- RESPONSIVE BARS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <!-- LOGO *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <a href="http://localhost/STR/home/home.php">
      <p class="tittle">STR</p>
      <img class="logo" src="images/logo.png" />
    </a>
    <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
    <ul class="nav_links">
      <li class="li"><a href="http://localhost/STR/home/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
      <li class="li"><a href="http://localhost/STR/voluntariado/voluntariado.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
      <li class="li"><a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
      <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
      <li>
        <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <div class="language">
          <div class="language-selected"><img id="flags" src="images/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
          <ul cl>
            <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
            <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
            <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
          </ul>
        </div>
      <li class="user-container"><a href="http://localhost/STR/login/login.php"><span><img class="user" src="images/user.png" /></span></a></li>
      </li>
    </ul>
  </header>
    <nav class="sidebar close">
        <div class="header">
            <div class="image-text">
                <span class="image_panel">
                <?php 
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "str";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='".$_GET['email']."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        if ($row["email"] == $_GET["email"]) {
                            $foto_perfil = base64_encode($row['foto_perfil']);
                            echo "<img alt='' src='data:image/png;base64," . $foto_perfil . "' />";
                        }
                      }
                    }
                    $conn->close();
                    ?>
                </span>
                <div class="text logo-text">
                    <?php 
                    ini_set('display_errors', 0);
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "str";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT nome, sobrenome, email FROM utilizadores WHERE email='".$_GET['email']."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        if ($row["email"] == $_GET["email"]) {
                          echo "<span class='profession'>".$row["nome"]." ".$row["sobrenome"]."</span>";
                        }
                      }
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </div>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link main">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    <section class="home">

    </section>

    <script src="script.js"></script>
    <script src="script2.js"></script>
    <script type="module" src="language.js"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.2/dist/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>