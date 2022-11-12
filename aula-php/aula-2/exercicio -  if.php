<?php 

$idade = 16;


//Carteira de habilitação
if($idade>=18) {
    echo "Pode tirar a CNH - Habilitação";
} else {
    echo "Não pode tirar a habilitação";
}
echo "<br />";

/* 
 Faça um programa que mostre se Eleitor pode ou não votar e mostre quando esse voto for facultativo.
 -  menor de 16 anos não pode votar;
 - Entre 16 e 17 anos ou acima de 70, o voto é facultativo;
 - Entre 18 e 70 anos, o voto é obrigatório.

*/
$eleitor = 71;

if($eleitor >= 18 && $eleitor < 70) {
    echo "voto obrigatório";
} else if($eleitor < 16) {
    echo "Nõa pode votar";
} else {
    echo "Voto facultativo";
}


//Transforme o exercício de Carteira de habilitação em um if ternário.