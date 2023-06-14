<?php
$connect = mysqli_connect("localhost", "root", "", "str");
$query = "SELECT * FROM candidaturas_familias WHERE email = '" . $_POST["emp_id"] . "'";
$result = mysqli_query($connect, $query);
$counter = 1;
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $nome = $row['nome'];
        $email = $row['email'];
        $sobrenome = $row['sobrenome'];
        $motivacao = substr($row['motivacao'], 0, 250);
        $data_registo = $row['data_registo'];
        $quantidade = $row['quantidade'];
        $frequencia = $row['frequencia'];
        $data_inicio = $row['data_inicio'];
        $tipo = $row['tipo'];
        $aria_controls = "collapse" . $counter;
        $show_class = ($counter == 1) ? 'show' : '';
        echo '
        <div class="card mb-3">
            <div class="row g-0 p-2">
                <div class="col-md-3 border-end card-body">
                    <p><b >Tipo:</b></p>
                    <p>' . $tipo . '</p>
                    <p><b >Quantidade:</b></p>
                    <p>' . $quantidade . '</p>
                    <p><b >Frequência:</b></p>
                    <p>' . $frequencia . '</p>
                    <p><b >Data de ínicio:</b></p>
                    <p>' . $data_inicio . '</p>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <p class="card-text"><b>Motivação:</b> ' . $row['motivacao'] . '</p>
                    </div>
                </div>
            </div>
        </div>
                ';
    }
}else{
    echo '
        <div class="card text-center align-middle">
                <div class="empty-icon-container">
                    <div class="warning_results">
                        <h2 class="pt-2">0 resultados encontrados</h2>
                        <p>Desculpe! Neste momento não existe nenhuma candidatura.</p>
                    </div>
                </div>
            </div>
            <br>
    ';
}
