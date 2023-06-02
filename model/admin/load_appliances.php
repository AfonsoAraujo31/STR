<?php
ini_set('display_errors', 0);
$sql = "SELECT nome,sobrenome,email,motivacao,data_registo FROM candidaturas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $nome = $row['nome'];
        $email = $row['email'];
        $sobrenome = $row['sobrenome'];
        $motivacao = substr($row['motivacao'], 0, 300);
        $data_registo = $row['data_registo'];
        $query1 = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";
        if ($result1 = $conn->query($query1)) {
            while ($row1 = $result1->fetch_assoc()) {
                $foto_perfil = base64_encode($row1['foto_perfil']);
            }
            $result1->free();
        }
        echo '
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="data:image/*;base64,' . $foto_perfil . '" class="card-img" alt="..."/>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><b>' . $nome . ' ' . $sobrenome . '</b></h5>
                    <p class="card-text">'.$motivacao.'...</p>
                    <p class="card-text">
                        <ul class="tags position-absolute bottom-0 end-0 m-2">
                            <li><a>' . $data . '</a></li>
                        </ul>
                    </p>
                </div>
                    </div>
                </div>
            </div>
            ';
    }
}
