<?php 

/*


Estrutura de Repetição

- While: é o laço que estará execultando enquanto a expressão for verdadeira. 
Precisa incrementar e decrementar no final para não gerar looping infinito.

ex: 
$i = 0;

while (i<10) {
    echo $i;
    $i ++;
}

-Do While: é similar ao while com a difernça de execultar o bloco uma vez 
antes de passar pela condição do while.

ex: 
$num = 10;

do {
    echo $num . "<br>";
    $num--;
} while($num > 0);

-For: Similar ao while, o for necessita receber a variável, a condição e o incremento ou decremento com
parâmetro. Com isso, não o risco de causar um looping infinito.

ex:
$notas = [8,7,9,10];

for($x = 0; $x < count($notas); $x++) {
    echo "Sua nota: $notas[$x] <br/> ";
}

OBS: a função count($notas) pega o total de itens do array.

-foreach: espécie de forma reduzida do for, ele pega um elemento do array e passa para uma variável. 

$array = [1,2,3,4];
print_r($array);

echo "<br/>";

//pegando o valor do array:
foreach($array as $numero){
    echo "Valor: $numero <br>";
}

//pegando a chve e o valor do array:
foreach($array as $chave => $numero){
    echo "A chave: $chave e o valor: $numero <br>";
}

Exercício:
1- Constriur um progrma que conte ate 20 e exiba essa contagem na tela.

2- Construir um programa que faça a contagem regressiva.

*/


// for ($i = 0; $i <20; $i++){
//     for ($x = 0; $x <= $i; $x++){       

//         echo "-";
//     }
//         echo "<br/>";
// }


$array = [1,2,3,4];
print_r($array);
echo "<br/>";

//pegando o valor do array:
foreach($array as $numero){
    echo "Valor: $numero <br>";
}

//pegando a chve e o valor do array:
foreach($array as $chave => $numero){
    echo "A chave: $chave e o valor: $numero <br>";
}

// Digit characters behave differently
// echo '== Digits ==';
// echo "<br/>";

// $d = 'A8';
// for ($n=0; $n<6; $n++) {
//     echo ++$d . PHP_EOL;
// }
// echo "<br>=======<br/>";
// $d = 'A08';
// for ($n=0; $n<6; $n++) {
//     echo ++$d . PHP_EOL;
// }

