<?php 
// require_once '/wamp64/www/STR/configurations/dbconnection.php';
// $sql = "INSERT INTO `familias_doacaoespecial` (`nome_familia`, `representante`, `agregado_familiar`, `data_chegada`, `descricao`, `historia`, `origem`, `email`, `telemovel`, `adultos`, `criancas`)
// VALUES ('Sánchez', 'Luisa Sánchez', '4', 'Jun 29, 2022', 'Família de quatro pessoas que fugiu da Colômbia devido à violência do narcotráfico e busca um lugar seguro para recomeçar a vida.', 'A família Sánchez teve que fugir de sua casa na Colômbia depois de ser ameaçada pela violência do narcotráfico em sua cidade. Eles tiveram que deixar tudo para trás e agora estão lutando para se adaptar a um novo ambiente e recomeçar suas vidas.', 'Colômbia', 'luisa.sanchez@email.com', '789012345', '2', '2')";
// if ($conn->query($sql) === TRUE) {
//         echo "top";
//       }
?>

<?php 
require_once '/wamp64/www/STR/configurations/dbconnection.php';
$sql = "UPDATE familias_doacaoespecial SET descricao = 'Olá, somos a família Al-Abdullah! A nossa família é constituída por cinco pessoas, e infelizmente, tivemos que de fugir da Síria devido à guerra civil e buscar refugio aqui num país onde nos pudéssemos sentir confortáveis e seguros.' WHERE id = 11";
if ($conn->query($sql) === TRUE) {
        echo "top";
      }else{
        echo "não top";
      }
?>