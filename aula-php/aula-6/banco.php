<?php 

$db_name = "db_tarefas";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
//$pdo = new PDO("mysql:dbname=tarefas;host=localhost","root","");

//fazer uma consulta no banco
$sql = $pdo->query('SELECT * FROM tbl_tarefas');

//fetch-pegar os dados. All= todos. PDO::FECTH_ASSOC -> constante PDO que defini uma associação para os dados. Tira a duplicidade de dados de uma consulta.
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "Total: ".$sql->rowCount();

echo '<pre>';

print_r($dados);

?>
