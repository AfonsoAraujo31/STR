<?php
$output = '';
$connect = mysqli_connect("localhost", "root", "", "str");
$query = "SELECT * FROM familias_doacaoespecial WHERE id = '" . $_POST["emp_id"] . "'";
$result = mysqli_query($connect, $query);
$counter = 1;
while ($row = mysqli_fetch_array($result)) {
     $tipo = "Alimentação";
     $motivacao = "";
     $id = $row["id"];
     $nome = $row["nome_familia"];
     $representante = $row["representante"];
     $historia = $row["historia"];
     $data_chegada = $row["data_chegada"];
     $origem = $row["origem"];
     $agregado_familiar = $row["agregado_familiar"];
     $query1 = "SELECT * FROM utilizadores WHERE email='" . $_COOKIE['current_user'] . "'";
     if ($result1 = $connect->query($query1)) {
          while ($row = mysqli_fetch_array($result1)) {
               $output = '
                    <div class="content">
                         <form>
                              <p class="fs-3 text-dark text-bold">Informações</p>
                              <hr class="border border-2 opacity-75 border-dark"> 
                              <input type="text" id="tipo" name="tipo" class="custom-select" hidden value="' . $tipo . '">
                              <input type="text" id="id" name="id" class="custom-select" hidden value="' . $id . '">
                              <input type="text" id="email" name="email" class="custom-select" hidden value="' . $row['email'] . '">
                              <div class="user-details">
                                   <div class="input-box">
                                        <span class="details">Nome da familia</span>
                                        <input type="text" class="custom-select" disabled value="' . $nome . '">
                                   </div>
                                   <div class="input-box">
                                        <span class="details">Representante</span>
                                        <input type="text" disabled value="' . $representante . '">
                                   </div>
                                   <div class="input-box" style="width:32%">
                                        <span class="details">Data de chegada</span>
                                        <input type="text" class="custom-select" disabled value="' . $data_chegada . '">
                                   </div>
                                   <div class="input-box" style="width:32%">
                                        <span class="details">Origem</span>
                                        <input type="text" disabled value="' . $origem . '">
                                   </div>
                                   <div class="input-box" style="width:32%">
                                        <span class="details">Agregado familiar</span>
                                        <input type="text" disabled value="' . $agregado_familiar . '">
                                   </div>
                                   <div class="input-box">
                                        <span class="details">História</span>
                                        <textarea disabled rows="5">' . $historia . '</textarea>
                                   </div>
                              </div>
                              <p class="fs-3 text-dark text-bold">Candidatura</p>
                              <hr class="border border-2 opacity-75 border-dark"> 
                              <div class="user-details">
                                   <div class="input-box">
                                        <span class="details">Nome</span>
                                        <input type="text" id="nome" name="nome" class="custom-select" disabled value="' . $row['nome'] . '">
                                   </div>
                                   <div class="input-box">
                                        <span class="details">Sobreome</span>
                                        <input type="text" id="sobrenome" name="sobreome" class="custom-select" disabled value="' . $row['sobrenome'] . '">
                                   </div>
                                   <div class="input-box" style="width:33%;">
                                        <span class="details">Frequência</span>
                                        <select class="select">
                                             <option selected>Selecionar</option>
                                             <option>Semanalmente</option>
                                             <option>Mensalmente</option>
                                             <option>Semestralmente</option>
                                             <option>Anualmente</option>
                                        </select>
                                   </div>
                                   <div class="input-box" style="width:33%;">
                                        <span class="details">Quantidade</span>
                                        <select class="select">
                                        <option selected>Selecionar</option>
                                        <option>10Kg</option>
                                        <option>25Kg</option>
                                        <option>50Kg</option>
                                        <option>+60Kg</option>
                                   </select>
                                   </div>
                                   <div class="input-box" style="width:33%;">
                                        <span class="details">Data de início</span>
                                        <input type="date"/>
                                   </div>
                                   <div class="input-box">
                                        <span class="details">Motivação</span>
                                        <textarea id="motivacao_familia" rows="5">' . $motivacao . '</textarea>
                                   </div>
                              </div>
                         </form>
                    </div>
                    ';
          }

          echo $output;
     }
}
