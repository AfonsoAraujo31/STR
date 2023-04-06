<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.scss">

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
                                echo "<img alt='' src='data:image/*;base64," . $foto_perfil . "' />";
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
                        <a href="http://localhost/STR/login/login.php" onclick="teste();">
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
                <div id="errorAlert" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
                <div class="title">Definições de perfil</div>
                <div class="content">
                    <form action="update_user.php" method="GET">
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
                                            echo "<input type='text' name='nome' class='custom-select' value='" . $row["nome"] . "'/>";
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
                                            echo "<input type='text' name='sobrenome' value='" . $row["sobrenome"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Endereço de email</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='email' disabled value='" . $row["email"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Número de telemóvel</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT num_telefone, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='number' name='num_telefone' pattern='[0-9]{9}' value='" . $row["num_telefone"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Morada</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT morada, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='morada' value='" . $row["morada"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Data de nascimento</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT data_nascimento, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='date' name='data_nascimento' value='" . $row["data_nascimento"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Nacionalidade</span>
                                <select class="select" name='nacionalidade'>
                                    <?php
                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "str");
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT nacionalidade, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            if ($row["email"] == $_GET["email"]) {
                                                echo "<option selected>" . $row['nacionalidade'] . "</option>";
                                            }
                                        }
                                    }
                                    $conn->close();
                                    ?>
                                    <?php
                                    ini_set('display_errors', 0);
                                    $connect = mysqli_connect("localhost", "root", "", "str");
                                    $sql = "SELECT * FROM paises";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['id'];
                                        $nome = $row['nome'];
                                        $iso = $row['iso'];
                                        echo "<option value='$nome ($iso)'>$nome ($iso)</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Palavra chave</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT pass, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='pass' value='" . $row["pass"] . "'/>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Descrição</span>
                                <?php
                                ini_set('display_errors', 0);
                                $conn = new mysqli("localhost", "root", "", "str");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT descricao, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<textarea name='descricao' id='textarea' cols='30' rows='4'>" . $row["descricao"] . "</textarea>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" id="btn_atualizar" value="Atualizar" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="container_pref">
                <div class="title">Preferências/Opcões</div>
                <br>
                <style>
                    form {
                        display: table;

                    }

                    p {
                        display: table-row;
                    }

                    label {
                        display: table-cell;
                        text-align: right;
                    }

                    .opc {
                        display: table-cell;
                        margin-left: 5px;
                        height: 30px;
                        width: 100%;
                        outline: none;
                        font-size: 16px;
                        border-radius: 5px;
                        padding-left: 15px;
                        margin-bottom: 10px;
                        border: 1px solid #ccc;
                        transition: all 0.3s ease;
                    }
                </style>

                <form action="update_pref.php">
                    <div style="position:relative;left:50px;">
                        <?php
                        ini_set('display_errors', 0);
                        $conn = new mysqli("localhost", "root", "", "str");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM preferencias WHERE email='" . $_GET['email'] . "'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["email"] == $_GET["email"]) {
                                    echo '
                                <p>
                                    <label class="preferencias">Linguagem pré definida ao iniciar sessão</label>
                                    <select class="opc" name="linguagem">
                                        <option selected class="selected_linguagem">' . $row["linguagem"] . '</option>
                                        <option class="linguagem">Sem preferência</option>
                                        <option class="linguagem">Português</option>
                                        <option class="linguagem">Inglês</option>
                                        <option class="linguagem">Françes</option>
                                    </select>
                                </p>
                                <p>
                                <label for="b" class="preferencias" >Em caso de contacto, forma preferida</label>
                                <select class="opc" name="contacto">
                                <option selected class="selected_contacto">' . $row["contacto"] . '</option>
                                    <option class="contacto">Sem preferência</option>
                                    <option class="contacto">Telemóvel</option>
                                    <option class="contacto">Email</option>
                                </select>
                            </p>
                            <p>
                                <label for="b" class="preferencias">Preferência do estado dos cookies</label>
                                <select class="opc" name="coockies">
                                <option selected class="selected_coockies">' . $row["coockies"] . '</option>
                                    <option class="coockies">Sem preferência</option>
                                    <option class="coockies">Ativado</option>
                                    <option class="coockies">Desativado</option>
                                </select>
                            </p>
                            <p>
                                <label for="b" class="preferencias">Memorizar dados ao iniciar sessão</label>
                                <select class="opc" name="dados_login">
                                <option selected class="selected_dados_login">' . $row["dados_login"] . '</option>
                                    <option class="dados_login">Sem preferência</option>
                                    <option class="dados_login">Sim</option>
                                    <option class="dados_login">Não</option>
                                </select>
                            </p>
                                            
                            ';
                                }
                            }
                        }
                        $conn->close();
                        ?>
                    </div>
                    <div class="button">
                        <input type="submit" id="btn_atualizar" style="width: 130%;" value="Atualizar" />
                    </div>
                </form>

            </div>
            <div class="content1">
                <div class="title">Foto de perfil</div>
                <br>
                <form action="update_fotoperfil.php" method="POST" enctype="multipart/form-data">
                    <div class="picture">
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
                                    echo "<img alt='' id='picture-preview' class='img-fluid card-image rounded-circle' src='data:image/*;base64," . $foto_perfil . "' />";
                                }
                            }
                        }
                        $conn->close();
                        ?>
                        <input type="file" id="picture-input" name="image">
                    </div>
                    <br>
                    <div class="button">
                        <button name="submit" id="btn_atualizar" class="save">Atualizar</button>
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
    <script>
        addEventListener("DOMContentLoaded", (event) => {
            if (window.location == "http://localhost/STR/login/user_page.php?email='" + $_COOKIE["current_user"] + "'&error=updatefail") {
                $('#errorAlert').show('medium');
                setTimeout(function() {
                    $('#errorAlert').hide('medium');
                }, 4000);
            }
        });
    </script>
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