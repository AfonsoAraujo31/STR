<?php
ini_set('display_errors', 1);
require '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "SELECT id, descricao, foto_familia, nome_familia,alimentacao,educacao,habitacao,vestuario FROM familias_doacaoespecial";
                    $result = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $foto_perfil = base64_encode($row['foto_familia']);
                        $descricao = substr($row['descricao'], 0, 150);
                        $show_alimentacao = $row['alimentacao']  ? '' : 'filter: grayscale(100%);';
                        $show_educacao = $row['educacao']  ? '' : 'filter: grayscale(100%);';
                        $show_habitacao = $row['habitacao']  ? '' : 'filter: grayscale(100%);';
                        $show_vestuario = $row['vestuario']  ? '' : 'filter: grayscale(100%);';
                        $clicked_alimentacao = $row['alimentacao']  ? '' : 'button_alimentacao';
                        $clicked_educacao = $row['educacao']  ? '' : 'button_educacao';
                        $clicked_habitacao = $row['habitacao']  ? '' : 'button_alojamento';
                        $clicked_vestuario = $row['vestuario']  ? '' : 'button_vestuario';
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/*;base64,' . $foto_perfil . '" class="card-img-top h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Família ' . $row['nome_familia'] . '</b></h5>
                                        <p class="card-text">' . $descricao . '...</p>
                                    </div>
                                    <div class="d-flex justify-content-center pb-3"> 
                                        <p class="px-3 '.$clicked_alimentacao.'" id='.$row["id"].'><img src="../view/assets/specialdonation/diet.png" style="border-radius: 50%;cursor: pointer;'.$show_alimentacao.'" class="class="py-3"></p>
                                        <p class="px-3 '.$clicked_educacao.'" id='.$row["id"].'><img src="../view/assets/specialdonation/house.png" style="border-radius: 50%;cursor: pointer;'.$show_educacao.'" class="class="py-3"></p>
                                        <p class="px-3 '.$clicked_habitacao.'" id='.$row["id"].'><img src="../view/assets/specialdonation/clothes-rack.png" style="border-radius: 50%;cursor: pointer;'.$show_habitacao.'" class="class="py-3"></p>
                                        <p class="px-3 '.$clicked_vestuario.'" id='.$row["id"].'><img src="../view/assets/specialdonation/education.png" style="border-radius: 50%;cursor: pointer;'.$show_vestuario.'" class="class="py-3"></p>
                                    </div>    
                                </div>
                            </div>
                        ';
                    }
