<?php
if (isset($_POST["emp_id"])) {
     $output = '';
     $connect = mysqli_connect("localhost", "root", "", "str");
     $query = "SELECT * FROM familias_doacaoespecial WHERE id = '" . $_POST["emp_id"] . "'";
     $result = mysqli_query($connect, $query);

     while ($row = mysqli_fetch_array($result)) {
          $output = '
          <div class="content">
               <form>
                    <p class="fs-3">Informações</p>
                    <hr class="border border-2 opacity-75"> 
                    <div class="user-details">
                         <div class="input-box">
                              <span class="details">Nome da familia</span>
                              <input type="text" id="nome" name="nome" class="custom-select" disabled value="' . $row["nome_familia"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">Representante</span>
                              <input type="text" id="sobrenome" name="sobrenome" disabled value="' . $row["representante"] . '">
                         </div>
                         <div class="input-box">
                              <span class="details">História</span>
                              <textarea class="" name="descricao" disabled rows="5">' . $row["historia"] . '</textarea>
                         </div>
                    </div>
                    <p class="fs-3">Candidaturas</p>
                    <hr class="border border-2 opacity-75"> 
               </form>
          </div>
          ';
     }

     echo $output;
}