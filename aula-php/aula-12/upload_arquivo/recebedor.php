<?php
echo "<pre>"; //tag html que organiza o array. Exibe com quebras de linhas.
print_r($_FILES); //verifica o que a superglobals $_FILES está trazendo. 

/* variável recebe o nome original do arquivo recebido. 
Não é muito legal usar o nome do arquivo direto porque, conforme ele é reinviado, será sobre escrito. 
*/
//$nome = $_FILES['arquivo']['name'];

/* 
    Para resolver o problema, você gera um número aleatório usando um hash.
*/
//$nome = md5(time().rand(0, 1000).'.jpg');
//move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome); //move o arquivo da pasta temporária do servidor(tmp_name) para pasta física na raiz do sistema.

/**
 * Tratamento para especificar o tipo de extensão do arquivos aceitos. Exemplo: jpg, jpeg, png serão aceitos. 
 * Array $permitidos lista as extensões e o if confere se type do arquivo enviado está dentro da lista de extensões permitidas através da função in_array. 
 */
$permitidos = array('image/jpg','image/jpeg','image/png');

 if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome = md5(time().rand(0, 1000).'.jpg');
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

    echo 'Arquivo salvo com sucesso';
 } else {
    echo 'Arquivo não permitido';
 }