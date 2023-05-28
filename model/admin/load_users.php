<?php
ini_set('display_errors', 0);
$sql = "SELECT * FROM utilizadores";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $foto_perfil = base64_encode($row['foto_perfil']);
        $doadorEspecial = ($row["doador_especial"]) ? "Sim" : "Não";
        $doadorAdmin = ($row["is_admin"]) ? "Sim" : "Não";
        if($row['foto_perfil']){
            echo '
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="data:image/*;base64,' . $foto_perfil . '" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">' . $row["nome"] . ' ' . $row["sobrenome"] . '</p>
                            <p class="text-muted mb-0">' . $row["email"] . '</p>
                        </div>
                    </div>
                </td>
                <td><p class="fw-normal mb-1">' . $row["data_nascimento"] . '</p></td>
                <td><p class="fw-normal mb-1">' . $row["morada"] . '</p></td>
                <td><p class="fw-normal mb-1">' . $row["num_telefone"] . '</p></td>
                <td><p class="fw-normal mb-1">' . $row["nacionalidade"] . '</p></td>
                <td><p class="fw-normal mb-1">' . $doadorEspecial . '</p></td>
                <td><p class="fw-normal mb-1">' . $doadorAdmin . '</p></td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded" onclick="appliance_user('. $row["id"] .');"><img src="../view/assets/admin/appliance.png"></button>
                    <button type="button" class="btn btn-link btn-sm btn-rounded" onclick="delete_user('. $row["id"] .');"><img src="../view/assets/admin/remove.png"></button>
                </td>
            </tr>
            ';
        }else{
            echo '
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="./assets/others/teste.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">' . $row["nome"] . ' ' . $row["sobrenome"] . '</p>
                        <p class="text-muted mb-0">' . $row["email"] . '</p>
                    </div>
                </div>
            </td>
            <td><p class="fw-normal mb-1">' . $row["data_nascimento"] . '</p></td>
            <td><p class="fw-normal mb-1">' . $row["morada"] . '</p></td>
            <td><p class="fw-normal mb-1">' . $row["num_telefone"] . '</p></td>
            <td><p class="fw-normal mb-1">' . $row["nacionalidade"] . '</p></td>
            <td><p class="fw-normal mb-1">' . $doadorEspecial . '</p></td>
            <td><p class="fw-normal mb-1">' . $doadorAdmin . '</p></td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded" onclick="appliance_user('. $row["id"] .');"><img src="../view/assets/admin/appliance.png"></button>
                <button type="button" class="btn btn-link btn-sm btn-rounded" onclick="delete_user('. $row["id"] .');"><img src="../view/assets/admin/remove.png"></button>
            </td>
        </tr>
        ';
        }
    }
}
?>