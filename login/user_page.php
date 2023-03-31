<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>STR</title>
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

                    $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_GET['email'] . "'";
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

                    $sql = "SELECT nome, sobrenome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["email"] == $_GET["email"]) {
                                echo "<span class='profession'>" . $row["nome"] . " " . $row["sobrenome"] . "</span>";
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
                        <a href="#" onclick="perfil();">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" onclick="doacao();">
                            <i class='bx bxs-spreadsheet icon'></i>
                            <span class="text nav-text">Candidaturas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" onclick="obs();">
                            <i class='bx bxs-chat icon'></i>
                            <span class="text nav-text">Observações</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="http://localhost/STR/login/login.php">

                            <i class='bx bx-log-out-circle icon'></i>
                            <span class="text nav-text">Sair</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>
    <section class="home">
        <div id="home-box" class="box-visible">
            <div class="container">
                <div class="title">Definições de perfil</div>
                <div class="content">
                    <form action="#">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Nome</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT nome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' value='" . $row["nome"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Sobrenome</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT sobrenome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' value='" . $row["sobrenome"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Endereço de email</span>
                                <input type="text" />
                            </div>
                            <div class="input-box">
                                <span class="details">Número de telemóvel</span>
                                <input type="text" />
                            </div>
                            <div class="input-box">
                                <span class="details">Morada</span>
                                <input type="text" />
                            </div>
                            <div class="input-box">
                                <span class="details">Data de nascimento</span>
                                <input type="date" />
                            </div>
                            <div class="input-box">
                                <span class="details">Nacionalidade</span>
                                <input type="text" />
                            </div>
                            <div class="input-box">
                                <span class="details">Palavra chave</span>
                                <input type="text" />
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1" />
                            <input type="radio" name="gender" id="dot-2" />
                            <input type="radio" name="gender" id="dot-3" />
                            <span class="gender-title">Género</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="content1">
                <form action="#">
                    <div class="profile-photo-div" id="profile-photo-div">
                        <div class="profile-img-div" id="profile-img-div">
                            <div id="loader"></div>
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

                            $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    if ($row["email"] == $_GET["email"]) {
                                        $foto_perfil = base64_encode($row['foto_perfil']);
                                        echo "<img id='profile-img' src='data:image/png;base64," . $foto_perfil . "' />";
                                    }
                                }
                            }
                            $conn->close();
                            ?>
                            <input id="x-position" type="range" name="x-position" value="0" min="0" />
                            <input id="y-position" type="range" name="y-position" value="0" min="0" />
                        </div>
                        <div class="profile-buttons-div">
                            <div class="profile-img-input" id="profile-img-input">
                                <label class="button" id="change-photo-label" for="change-photo">UPLOAD PHOTO</label>
                                <input id="change-photo" name="change-photo" type="file" style="display: none" accept="image/*" />
                            </div>
                            <div class="profile-img-confirm" id="profile-img-confirm" style="display: none">
                                <div class="button half green" id="save-img"><i class="fa fa-check" aria-hidden="true"></i></div>
                                <div class="button half red" id="cancel-img"><i class="fa fa-remove" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="error" id="error">min sizes 400*400px</div>
                    <canvas id="croppedPhoto" width="400" height="400"></canvas>
                    <div class="button">
                        <input type="submit" value="Register" />
                    </div>
                </form>
            </div>
        </div>
        <div id="doacao-box" class="box">
            <h2>Profile</h2>
        </div>
        <div id="obs-box" class="box">
            <h2>Profila12323e</h2>
        </div>
    </section>
    <script src="script.js"></script>
    <script src="script2.js"></script>
    <script src="script3.js"></script>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>

</html>