<?php

/* 

    Array 
    => um tipo de variável que armazena um ou mais valores. Conhecido como vetor e matriz.
- usa colchetes [] ou parenteses ()
ex: 
$nomes = ["Ricardo","Ana", "José", "Maria"];  ou 
$lista = array("Ricardo","Ana", "José", "Maria");

- usar ínidice e valor (no PHP é com uso de flecha '=>')
ex: $lista["nome" => "Ricardo"];

-Separa os elementos por vírgula dentro do array.
ex: $lista[
    "nome" => "Ricardo",
    "idade" => 41,
    "habilitado" => true
];

Funções que imprimi o array em tela

print_r($lista);
var_dump($lista);

Exibindo um índice
ex: echo $lista["nome"]; //resultado: Ricardo

-- Outras formas de ler o array 

$meses = array( "Janeiro", "Fevereiro" , "Março" , "Abril", "Maio" );
    echo $meses[3];

    echo "<br />";


for($i = 0; $i < count($meses); $i ++) {
    echo "Mes: ".$meses[$i]."<br/>";    
}

// função count retorna o tamanho do array (quantidade total de elementos do array). 

echo "<br/>==============<br/>";

foreach($meses as $indice => $conteudo){
    echo "Mes: " . $conteudo . "<br>";
}

Função sort ordena os itens no array.
sort($variavel);
ex:
$numeros = [5,4,3,2,1];
sort($numeros); // resultado: 1,2,3,4,5

*/

$numeros = [5,4,3,2,1];
print_r($numeros); //
echo "<br>";
sort($numeros); // resultado: 1,2,3,4,5

print_r($numeros);