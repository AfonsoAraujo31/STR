<?php
ini_set('display_errors', 0);
$sql = "SELECT id, nome, sobrenome, email, motivacao, data_registo FROM candidaturas";
$result = $conn->query($sql);
$counter = 1;

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $idcandidatura = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $sobrenome = $row['sobrenome'];
        $motivacao = substr($row['motivacao'], 0, 250);
        $data_registo = $row['data_registo'];
        $query1 = "SELECT foto_perfil FROM utilizadores WHERE email='" . $email . "'";

        if ($result1 = $conn->query($query1)) {
            while ($row1 = $result1->fetch_assoc()) {
                $foto_perfil = base64_encode($row1['foto_perfil']);
            }

            $result1->free();
        }

        $aria_controls = "collapseCV" . $counter;
        $show_class = ($counter == 1) ? 'show' : '';

        if ($foto_perfil == "") {
            echo '
        <div class="accordion-item">
            <h2 class="accordion-header" id="' . $id . '">
                <button class="accordion-button bg-transparent" onclick="clicked();" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                    <div class="card border-bottom-0">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="../view/assets/others/teste_square.png" class="card-img" alt="..." style="height:full;"/>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><b>' . $nome . ' ' . $sobrenome . '</b></h5>
                                    <p class="card-text">' . $motivacao . '...</p>
                                    <p class="card-text">
                                        <ul class="tags position-absolute bottom-0 end-0 m-2">
                                            <li><a>' . $data_registo . '</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card border-top-0">
                        <hr style="margin:3%;">
                        <div class="card-body">
                        ' . $row['motivacao'] . '
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success float-end" style="background-color:#188755;margin-left:5px;" onclick="approve_specialdonator(' . $idcandidatura . ');">Aprovar</button>
                            <button type="button" class="btn btn-danger float-end" style="background-color:#dd3445" onclick="reprove_specialdonator(' . $idcandidatura . ');">Rejeitar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
            ';
            $counter++;
        } else {
            echo '
        <div class="accordion-item">
            <h2 class="accordion-header" id="' . $id . '">
                <button class="accordion-button bg-transparent" onclick="clicked();" style="width:100%;height: 10%;" type="button" data-bs-toggle="collapse" data-bs-target="#' . $aria_controls . '" aria-expanded="true" aria-controls="' . $aria_controls . '">
                    <div class="card border-bottom-0">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="data:image/*;base64,' . $foto_perfil . '" class="card-img" alt="..." style="height:full;"/>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><b>' . $nome . ' ' . $sobrenome . '</b></h5>
                                    <p class="card-text">' . $motivacao . '...</p>
                                    <p class="card-text">
                                        <ul class="tags position-absolute bottom-0 end-0 m-2">
                                            <li><a>' . $data_registo . '</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="' . $aria_controls . '" class="accordion-collapse collapse ' . $show_class . '" aria-labelledby="' . $id . '" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card border-top-0">
                        <hr style="margin:3%;">
                        <div class="card-body">
                        ' . $row['motivacao'] . '
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success float-end" style="background-color:#188755;margin-left:5px;" onclick="approve_specialdonator(' . $idcandidatura . ');">Aprovar</button>
                            <button type="button" class="btn btn-danger float-end" style="background-color:#dd3445" onclick="reprove_specialdonator(' . $idcandidatura . ');">Rejeitar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
            ';
            $counter++;
        }
    }
} else {
    echo '
        <div class="card text-center" >
                <div class="empty-icon-container">
                    <div class="animation-container">
                        <div class="bounce"></div>
                        <div class="pebble1"></div>
                        <div class="pebble2"></div>
                        <div class="pebble3"></div>
                    </div>
                    <div class="warning_results">
                        <h2 class="pt-2">0 resultados encontrados</h2>
                        <p>Desculpe! Neste momento não existe nenhuma candidatura.</p>
                    </div>

                </div>
            </div>
            <br>
    ';
}
