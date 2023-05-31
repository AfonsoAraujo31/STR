<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login/style.scss">
    <link rel="stylesheet" href="./css/admin/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <div id="includedCssContent"></div>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap/Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>STR</title>
</head>

<body style="display:none; overflow-y:auto;" id="body">
    <header class="bg-strong-gray">
        <!-- RESPONSIVE BARS *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*-->
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
                <?php
                ini_set('display_errors', 0);
                require_once '../configurations/dbconnection.php';
                $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row["email"] == $_GET['email']) {
                            if ($row["foto_perfil"] == null) {
                                echo "<li class='user-container'><a href='http://localhost/STR/view/login.php'><span><img alt='' style='width:50px;border-radius: 50%; position:relative;top:0.5px;' src='./assets/others/teste.png'/></span></a></li></li>";
                            } else {
                                $foto_perfil = base64_encode($row['foto_perfil']);
                                echo "<li class='user-container'><a href='http://localhost/STR/view/login.php'><span><img alt='' style='width:50px;border-radius: 50%; position:relative;top:0.5px;  ' src='data:image/*;base64," . $foto_perfil . "' /></span></a></li></li>";
                            }
                        }
                    }
                }

                ?>
        </ul>
    </header>
    <nav class="sidebar close" id="sidebar">
        <div class="header-nav">
            <div class="image-text">
                <span class="image_panel">
                    <?php
                    ini_set('display_errors', 0);
                    $sql = "SELECT email, foto_perfil FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["email"] == $_GET["email"]) {
                                if ($row["foto_perfil"] == null) {
                                    echo "<img alt='' src='./assets/others/teste.png' />";
                                } else {
                                    $foto_perfil = base64_encode($row['foto_perfil']);
                                    echo "<img alt='' src='data:image/*;base64," . $foto_perfil . "' />";
                                }
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
                    <li class="nav-link">
                        <a href="#" id="perfil" style="background-color:#ff9564;" onclick="perfil();">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" id="candidatura" onclick="candidatar();">
                            <i class='bx bxs-book-heart icon'></i>
                            <span class="text nav-text">Doador Especial</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" id="doacao" onclick="doacao();">
                            <i class='bx bxs-spreadsheet icon'></i>
                            <span class="text nav-text">Candidaturas</span>
                        </a>
                    </li>
                    <li class="nav-link" style="display: none;<?php
                                                                ini_set('display_errors', 0);
                                                                $sql = "SELECT is_admin FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        if ($row["is_admin"] == 1) {
                                                                            echo 'display: block;';
                                                                        }
                                                                    }
                                                                }
                                                                ?>">
                        <a href="#" id="admin" onclick="admin();">
                            <i class='bx bxs-edit icon'></i>
                            <span class="text nav-text">Admin</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="http://localhost/STR/view/login.php" onclick="singOut();">
                            <i class='bx bx-log-out-circle icon'></i>
                            <span class="text nav-text">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="home-box" class="box-visible home">
        <div class="container_definicoes">
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
                    </div>
                    <div class="button">
                        <input type="submit" value="Atualizar" />
                    </div>
                </form>
            </div>
        </div>
        <div class="container_preferencias_fotoperfil">
            <div class="container_preferencias">
                <div class="title">Preferências/Opcões</div>
                <br>
                <style>
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
                    <style>
                        .container {
                            display: flex;
                            justify-content: center;
                        }

                        .elemento {
                            margin-left: auto;
                            margin-right: auto;
                        }
                    </style>
                    <div class="container ">
                        <div class="elemento ">
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
                                <label for="b" class="preferencias">Exibir definicões após iniciar sessão</label>
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
                    </div>
                    <div class="button">
                        <input type="submit" value="Atualizar" />
                    </div>
                </form>
            </div>

            <div class="container_fotoperfil">
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

            <div class="container_obs">
                <div class="title">Sobre ti</div>
                <br>
                <form action="../model/userpage/update_user_description.php" method="GET">
                    <div class="input-box" style="margin-bottom:25px;">
                        <?php
                        ini_set('display_errors', 0);
                        $sql = "SELECT descricao, email FROM utilizadores WHERE email='" . $_GET['email'] . "'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["email"] == $_GET["email"]) {
                                    echo "<textarea name='descricao' id='textarea' cols='30' rows='6'>" . $row["descricao"] . "</textarea>";
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="button">
                        <button name="submit" id="btn_atualizar" class="save">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="candidatar-box" class="box home">
        <h2>canad</h2>
        <h2>canad</h2>
        <h2>canad</h2>
        <h2>canad</h2>
        <h2>canad</h2>
        <h2>canad</h2>
    </div>

    <div id="doacao-box" class="box home">
        <h2>cand</h2>
    </div>

    <div id="admin-box" class="box home">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="dashboard-stat red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php echo "5"; ?></span>
                        </div>
                        <div class="desc">Associações</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="dashboard-stat blue" href="#">
                    <div class="visual">
                        <i class="fa-sharp fa-solid fa-person"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php include '../model/admin/count_users.php'; ?></span>
                        </div>
                        <div class="desc">Utilizadores</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="dashboard-stat hoki" href="#">
                    <div class="visual">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php include '../model/admin/count_appliances.php'; ?></span>
                        </div>
                        <div class="desc">Candidaturas</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="dashboard-stat purple" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php include '../model/admin/count_comments.php'; ?></span>
                        </div>
                        <div class="desc">Comentários</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="container_definicoes" style="overflow-x:auto;">
            <div class="title">Utilizadores</div>
            <div id="errorAlertUsers" class="alert alert-warning hide-item errorAlertlogin" role="alert">É necessário preencher o(s) campo(s)!</div>
            <table class="table align-middle mt-2 mb-0 bg-white">
                <thead class="bg-light">
                    <tr class="lista">
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Morada</th>
                        <th>Telemóvel</th>
                        <th>Nacionalidade</th>
                        <th>Doador Especial</th>
                        <th>Admin</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../model/admin/load_users.php'; ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="container_definicoes" style="height:auto;">
            <div class="d-flex justify-content-between">
                <div class="title">Comentários</div>
                <div class="tab tab2">
                    <button class="tablinks active" id="CBL" style="border-radius: 0 10px 10px 0;">CBL</button>
                    <button class="tablinks" id="ALCC">ALCC</button>
                    <button class="tablinks" id="APIRP">APIRP</button>
                    <button class="tablinks" id="CPR">CPR</button>
                    <button class="tablinks" id="CV" style="border-radius: 10px 0 0 10px;">CV</button>
                </div>
            </div>
            <div class="tab tab1">
                <button class="tablinks active" id="CBL" style="border-radius: 0 10px 10px 0;">CBL</button>
                <button class="tablinks" id="ALCC">ALCC</button>
                <button class="tablinks" id="APIRP">APIRP</button>
                <button class="tablinks" id="CPR">CPR</button>
                <button class="tablinks" id="CV" style="border-radius: 10px 0 0 10px;">CV</button>
            </div>
            <div id="CBL" class="tabcontent">
                <div class="accordion" id="accordionExample" style="height: 500px;overflow-y:auto;overflow-x:auto;">
                    <?php
                    $db = 1;
                    $sql = "SELECT * FROM comentarios_cbl";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $comentario = $row['comentario'];
                        $email = $row['utilizador'];
                        $nome = $row['nome'];
                        $data = $row['data_registo'];
                        $query1 = "SELECT sobrenome,foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                        if ($result1 = $conn->query($query1)) {
                            while ($row1 = $result1->fetch_assoc()) {
                                $sobrenome = $row1['sobrenome'];
                            }
                            $result1->free();
                        }
                        $aria_controls = "collapseCBL" . $counter;
                        $show_class = ($counter == 1) ? 'show' : '';
                        echo '
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="' . $id . '">
                                <button class="accordion-button bg-transparent" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                                    <ul class="tags">
                                        <li><a>' . $nome . ' ' . $sobrenome . '</a></li>
                                        <li><a>' . $data . '</a></li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ' . $comentario . '
                                </div>
                                <hr style="margin-left:1%;margin-right:1%;">
                                <div class="d-flex justify-content-between">
                                    <div class="accordion-body"><b>Email: </b>' . $email . '</div>
                                    <button type="button" class="btn btn-outline-danger delete" style="background-color:#dc3545;color:white; height:10%;margin-right:1%;margin-top:0.5%;" onclick="delete_comment(' . $id . ',' . $db . ');">Eliminar</button>    
                                </div>
                            </div>
                        </div>
                        ';
                        $counter++;
                    }
                    ?>
                </div>
            </div>

            <div id="ALCC" class="tabcontent">
                <div class="accordion" id="accordionExample" style="height: 500px;overflow-y:auto;">
                    <?php
                    $db = 2;
                    $sql = "SELECT * FROM comentarios_alcc";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $comentario = $row['comentario'];
                        $email = $row['utilizador'];
                        $nome = $row['nome'];
                        $data = $row['data_registo'];
                        $query1 = "SELECT sobrenome,foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                        if ($result1 = $conn->query($query1)) {
                            while ($row1 = $result1->fetch_assoc()) {
                                $sobrenome = $row1['sobrenome'];
                            }
                            $result1->free();
                        }
                        $aria_controls = "collapseALCC" . $counter;
                        $show_class = ($counter == 1) ? 'show' : '';
                        echo '
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="' . $id . '">
                                <button class="accordion-button bg-transparent" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                                    <ul class="tags">
                                        <li><a>' . $nome . ' ' . $sobrenome . '</a></li>
                                        <li><a>' . $data . '</a></li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ' . $comentario . '
                                </div>
                                <hr style="margin-left:1%;margin-right:1%;">
                                <div class="d-flex justify-content-between">
                                    <div class="accordion-body"><b>Email: </b>' . $email . '</div>
                                    <button type="button" class="btn btn-outline-danger delete" style="background-color:#dc3545;color:white; height:10%;margin-right:1%;margin-top:0.5%;" onclick="delete_comment(' . $id . ',' . $db . ');">Eliminar</button>    
                                </div>
                            </div>
                        </div>
                        ';
                        $counter++;
                    }
                    ?>
                </div>
            </div>

            <div id="APIRP" class="tabcontent">
                <div class="accordion" id="accordionExample" style="height: 500px;overflow-y:auto;">
                    <?php
                    $db = 2;
                    $sql = "SELECT * FROM comentarios_apirp";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $comentario = $row['comentario'];
                        $email = $row['utilizador'];
                        $nome = $row['nome'];
                        $data = $row['data_registo'];
                        $query1 = "SELECT sobrenome,foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                        if ($result1 = $conn->query($query1)) {
                            while ($row1 = $result1->fetch_assoc()) {
                                $sobrenome = $row1['sobrenome'];
                            }
                            $result1->free();
                        }
                        $aria_controls = "collapseAPIRP" . $counter;
                        $show_class = ($counter == 1) ? 'show' : '';
                        echo '
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="' . $id . '">
                                <button class="accordion-button bg-transparent" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                                    <ul class="tags">
                                        <li><a>' . $nome . ' ' . $sobrenome . '</a></li>
                                        <li><a>' . $data . '</a></li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ' . $comentario . '
                                </div>
                                <hr style="margin-left:1%;margin-right:1%;">
                                <div class="d-flex justify-content-between">
                                    <div class="accordion-body"><b>Email: </b>' . $email . '</div>
                                    <button type="button" class="btn btn-outline-danger delete" style="background-color:#dc3545;color:white; height:10%;margin-right:1%;margin-top:0.5%;" onclick="delete_comment(' . $id . ',' . $db . ');">Eliminar</button>    
                                </div>
                            </div>
                        </div>
                        ';
                        $counter++;
                    }
                    ?>
                </div>
            </div>

            <div id="CPR" class="tabcontent">
                <div class="accordion" id="accordionExample" style="height: 500px;overflow-y:auto;">
                    <?php
                    $db = 2;
                    $sql = "SELECT * FROM comentarios_cpr";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $comentario = $row['comentario'];
                        $email = $row['utilizador'];
                        $nome = $row['nome'];
                        $data = $row['data_registo'];
                        $query1 = "SELECT sobrenome,foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                        if ($result1 = $conn->query($query1)) {
                            while ($row1 = $result1->fetch_assoc()) {
                                $sobrenome = $row1['sobrenome'];
                            }
                            $result1->free();
                        }
                        $aria_controls = "collapseCPR" . $counter;
                        $show_class = ($counter == 1) ? 'show' : '';
                        echo '
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="' . $id . '">
                                <button class="accordion-button bg-transparent" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                                    <ul class="tags">
                                        <li><a>' . $nome . ' ' . $sobrenome . '</a></li>
                                        <li><a>' . $data . '</a></li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ' . $comentario . '
                                </div>
                                <hr style="margin-left:1%;margin-right:1%;">
                                <div class="d-flex justify-content-between">
                                    <div class="accordion-body"><b>Email: </b>' . $email . '</div>
                                    <button type="button" class="btn btn-outline-danger delete" style="background-color:#dc3545;color:white; height:10%;margin-right:1%;margin-top:0.5%;" onclick="delete_comment(' . $id . ',' . $db . ');">Eliminar</button>    
                                </div>
                            </div>
                        </div>
                        ';
                        $counter++;
                    }
                    ?>
                </div>
            </div>

            <div id="CV" class="tabcontent">
                <div class="accordion" id="accordionExample" style="height: 500px;overflow-y:auto;">
                    <?php
                    $db = 2;
                    $sql = "SELECT * FROM comentarios_cv";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $comentario = $row['comentario'];
                        $email = $row['utilizador'];
                        $nome = $row['nome'];
                        $data = $row['data_registo'];
                        $query1 = "SELECT sobrenome,foto_perfil FROM utilizadores WHERE email='" . $email . "'";
                        if ($result1 = $conn->query($query1)) {
                            while ($row1 = $result1->fetch_assoc()) {
                                $sobrenome = $row1['sobrenome'];
                            }
                            $result1->free();
                        }
                        $aria_controls = "collapseCV" . $counter;
                        $show_class = ($counter == 1) ? 'show' : '';
                        echo '
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="' . $id . '">
                                <button class="accordion-button bg-transparent" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                                    <ul class="tags">
                                        <li><a>' . $nome . ' ' . $sobrenome . '</a></li>
                                        <li><a>' . $data . '</a></li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ' . $comentario . '
                                </div>
                                <hr style="margin-left:1%;margin-right:1%;">
                                <div class="d-flex justify-content-between">
                                    <div class="accordion-body"><b>Email: </b>' . $email . '</div>
                                    <button type="button" class="btn btn-outline-danger delete" style="background-color:#dc3545;color:white; height:10%;margin-right:1%;margin-top:0.5%;" onclick="delete_comment(' . $id . ',' . $db . ');">Eliminar</button>    
                                </div>
                            </div>
                        </div>
                        ';
                        $counter++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
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
    <!-- Language -->
    <script type="module" src="./lang/common/header_lang.js"></script>
    <script type="module" src="./lang/common/language_lang.js"></script>
    <script type="module" src="./lang/login_lang.js"></script>
    <script type="module" src="./lang/admin_lang.js"></script>
    <script type="module" src="../controller/common/include_components.js"></script>
    <script type="module" src="../configurations/loadcontent.js"></script>
    <script type="module" src="../controller/admin/admin.js"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/353081318a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap  jQuery, Popper.js *___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___*___* -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</body>

</html>