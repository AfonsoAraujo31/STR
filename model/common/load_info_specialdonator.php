<?php
ini_set('display_errors', 0);
require_once '../configurations/dbconnection.php';
$sql = "SELECT nome,sobrenome,email,num_telefone FROM utilizadores WHERE email='" . $_COOKIE['current_user'] . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
                <div class="input_field">
                    <label>Nome</label>
                    <input type="text" class="input" value="' . $row['nome'] . '">
                </div>
                <div class="input_field">
                    <label>Sobrenome</label>
                    <input type="text" class="input" value="' . $row['sobrenome'] . '">
                </div>
                <div class="input_field">
                    <label>Número de identificação</label>
                    <input type="number" class="input">
                </div>
                <div class="input_field">
                    <label>Estado civil</label>
                    <div class="custom_select">
                        <select>
                            <option value="">Selecione</option>
                            <option value="male">Solteiro/a</option>
                            <option value="female">Casado/a</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Forma de contacto</label>
                    <div class="custom_select">
                        <select>
                            <option value="">Selecione</option>
                            <option value="male">Telemóvel</option>
                            <option value="female">Email</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Número de telemóvel</label>
                    <input type="number" class="input" value="' . $row['num_telefone'] . '">
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" value="' . $row['email'] . '">
                </div>
                <div class="input_field">
                    <label>Motivação</label>
                    <textarea class="textarea" maxlength="500"></textarea>
                </div>
    ';
    }
}