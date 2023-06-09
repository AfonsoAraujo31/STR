<?php 
 require_once '/wamp64/www/STR/configurations/dbconnection.php';
 $sql = "INSERT INTO `familias_doacaoespecial` (`nome_familia`, `representante`, `agregado_familiar`, `data_chegada`, `descricao`, `historia`, `origem`, `email`, `telemovel`, `adultos`, `criancas`)
 VALUES ('Ivanova', 'Olga Ivanova', '4', 'Set 15, 2022', 'Somos os Ivanova, devido á mais recente guerra na ucraniana tivemos que escapar e procurar refúgio num lugar seguro.', 'A família Ivanova foi forçada a deixar sua casa na Ucrânia devido à guerra e à violência em seu país. A mãe, Olga, tomou a difícil decisão de fugir com seus três filhos para buscar segurança e uma nova vida. Agora, eles enfrentam desafios para se adaptar a um ambiente desconhecido e recomeçar suas vidas longe da violência.', 'Ucrânia', 'olga.ivanova@email.com', '123456789', '1', '3')";
 if ($conn->query($sql) === TRUE) {
         echo "top";
       }
?>

<?php 
// require_once '/wamp64/www/STR/configurations/dbconnection.php';   
// $sql = "UPDATE familias_doacaoespecial SET descricao = 'Somos mãe e filha, vindas da Nigéria, mas bastantes resilientes. Deixamos para trás a nossa terra em busca de um futuro melhor e em segurança. Com amor e determinação, mantemos viva a esperança de uma vida cheia de oportunidades.' WHERE id = 26";
// if ($conn->query($sql) === TRUE) {
//         echo "top";
//       }else{
//         echo "não top";
//       }
?>