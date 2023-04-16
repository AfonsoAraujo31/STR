<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/login/style.scss">
    <link rel="stylesheet" href="./css/common/header.css" />
    <link rel="stylesheet" href="./css/common/language.css" />
    <link rel="stylesheet" href="./css/common/scrollbar.css" />
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap/Font Awsome -->
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
        <a href="../view/home.php">
            <p class="tittle">STR</p>
            <img class="logo" src="./assets/logo/logo.png" />
        </a>
        <!-- HEADER *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
        <ul class="nav_links">
            <li class="li"><a href="../view/home.php"><i class="fa-solid fa-house"></i>Início</a></li>
            <li class="li"><a href="../view/volunteer.php"><i class="fa-solid fa-handshake-angle"></i> Voluntariado</a></li>
            <li class="li"><a href="../view/specialdonation.php"><i class="fa-solid fa-circle-dollar-to-slot"></i> Doação Especial </a></li>
            <li class="li"><a href="#"><i class="fa-solid fa-newspaper"></i> Notícias</a></li>
            <li>
                <!-- LINGUAGE *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
                <div class="language">
                    <div class="language-selected"><img id="flags" src="./assets/flags/pt.png" width="35px" height="25px" style="margin-right:10px;">Português</div>
                    <ul cl>
                        <li class="lang"><a href="#" class="pt" style="text-align:left; margin-left:10px;">Português</a></li>
                        <li class="lang"><a href="#" class="en" style="text-align:left; margin-left:10px;">Inglês</a></li>
                        <li class="lang"><a href="#" class="fr" style="text-align:left; margin-left:10px;">Françês</a></li>
                    </ul>
                </div>
                <?php
                ini_set('display_errors', 0);
                require_once '../configurations/dbconnection.php';
                $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row["email"] == $_GET['email']) {
                            $foto_perfil = base64_encode($row['foto_perfil']);
                            echo "<li class='user-container'><a href='http://localhost/STR/view/login.php'><span><img alt='' style='width:50px;border-radius: 50%; position:relative;top:0.5px;  ' src='data:image/*;base64," . $foto_perfil . "' /></span></a></li></li>";
                        }
                    }
                }
                
                ?>
        </ul>
    </header>
    <nav class="sidebar close">
        <div class="header">
            <div class="image-text">
                <span class="image_panel">
                    <?php
                    ini_set('display_errors', 0);
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
                    ?>
                </span>
                <div class="text logo-text">
                    <?php
                    ini_set('display_errors', 0);
                    $sql = "SELECT nome, sobrenome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["email"] == $_GET["email"]) {
                                echo "<span class='profession'>" . $row["nome"] . " " . $row["sobrenome"] . "</span>";
                            }
                        }
                    }
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
                        <a href="http://localhost/STR/view/login.php" onclick="teste();">
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
                    <form action="../model/userpage/update_user.php" method="GET">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Nome</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT nome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='nome' class='custom-select' value='" . $row["nome"] . "'/>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Sobrenome</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT sobrenome, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='sobrenome' value='" . $row["sobrenome"] . "'/>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Endereço de email</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='email' disabled value='" . $row["email"] . "'/>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Número de telemóvel</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT num_telefone, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='number' name='num_telefone' pattern='[0-9]{9}' value='" . $row["num_telefone"] . "'/>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Morada</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT morada, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='morada' value='" . $row["morada"] . "'/>";
                                        }
                                    }
                                }
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
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Nacionalidade</span>
                                <select class="select" name='nacionalidade'>
                                    <?php
                                    ini_set('display_errors', 0);
                                    $sql = "SELECT nacionalidade, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            if ($row["email"] == $_GET["email"]) {
                                                echo "<option selected>" . $row['nacionalidade'] . "</option>";
                                            }
                                        }
                                    }
                                    ?>
                                    <?php
                                    ini_set('display_errors', 0);
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
                                $sql = "SELECT pass, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<input type='text' name='pass' value='" . $row["pass"] . "'/>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="input-box">
                                <span class="details">Descrição</span>
                                <?php
                                ini_set('display_errors', 0);
                                $sql = "SELECT descricao, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row["email"] == $_GET["email"]) {
                                            echo "<textarea name='descricao' id='textarea' cols='30' rows='4'>" . $row["descricao"] . "</textarea>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Atualizar" />
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

                <form action="../model/userpage/update_pref.php">
                    <div style="position:relative;left:50px;">
                        <?php
                        ini_set('display_errors', 0);
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
                        ?>
                    </div>
                    <div class="button">
                        <input type="submit" style="width: 130%;" value="Atualizar" />
                    </div>
                </form>

            </div>
            <div class="content1">
                <div class="title">Foto de perfil</div>
                <br>
                <form action="../model/userpage/update_fotoperfil.php" method="POST" enctype="multipart/form-data">
                    <div class="picture">
                        <?php
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
            if (window.location == "http://localhost/STR/view/user_page.php?email='" + $_COOKIE["current_user"] + "'&error=updatefail") {
                $('#errorAlert').show('medium');
                setTimeout(function() {
                    $('#errorAlert').hide('medium');
                }, 4000);
            }
        });
    </script>
    <script src="../controller/login/script.js"></script>
    <script src="../controller/login/script2.js"></script>
    <script src="../controller/login/script3.js"></script>
    <script type="module" src="./lang/login_lang.js"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>