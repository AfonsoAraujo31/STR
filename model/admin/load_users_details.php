<?php
if (isset($_POST["emp_id"])) {
     $output = '';
     $connect = mysqli_connect("localhost", "root", "", "str");
     $query = "SELECT * FROM utilizadores WHERE id = '" . $_POST["emp_id"] . "'";
     $result = mysqli_query($connect, $query);

     while ($row = mysqli_fetch_array($result)) {
          $output = '
          <div class="content">
               <form>
                    <div class="user-details">
                         <div class="input-box">
                              <span class="details details_editar">Nome</span>
                              <input type="text" id="nome" name="nome" class="custom-select" value="' . $row["nome"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Sobrenome</span>
                              <input type="text" id="sobrenome" name="sobrenome" value="' . $row["sobrenome"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Endereço de email</span>
                              <input type="text" id="email" name="email" disabled  value="' . $row["email"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Número de telemóvel</span>
                              <input type="number" id="num_telefone" name="num_telefone" pattern="[0-9]{9}"  value="' . $row["num_telefone"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Morada</span>
                              <input type="text" name="morada" disabled value="' . $row["morada"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Data de nascimento</span>
                              <input type="date" name="data_nascimento" disabled value="' . $row["data_nascimento"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Descrição</span>
                              <textarea class="" name="descricao" disabled rows="5">' . $row["descricao"] . '</textarea>
                         </div>
                    </div>
               </form>
          </div>
          ';
     }

     echo $output;
}
