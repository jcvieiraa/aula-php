<?php
    echo ("<h1>Correção dos exercícios de array </h1>");

/* 1 - Faça um programa que leia um vetor numérico de 5 posições. Depois, ordene o vetor em ordem crescente e 
apresente os elementos ordenados.  */

echo "<h1> Exercício 01 </h2>";

$vetor = [4, 2, 7, 9, 1];
sort($vetor);

print_r($vetor);

echo "<hr>";

/* 2 – Escreva um algoritmo que leia os estados do Sudeste, Sul, Nordeste, Norte e CentroOeste 
e em seguida imprima na tela todos os estados em ordem alfabética.  */

$estados = array("Minas Gerais", "Espírito Santo", "Rio de janeiro", "Porto Alegre", "Natal");
sort($estados);

foreach($estados as $i => $divisória){
    echo "Divisoria " . $i . " / " . $divisória . "<br>";
}

echo "ou"; 

foreach($estados as $divisória){
    echo  $divisória . "<br>";
}

echo "<hr>";

/* 3 – Escreva um algoritmo em php que solicite 5 nomes de pessoas e exiba na tela o nome em ordem alfabética. */

$pessoas = array("Marcelo","Filipe","Danilo","Lucas","Emerson");
sort($pessoas);

foreach($pessoas as $pessoa){
    echo "Nome: " . $pessoa . "<br>"; 
}

?>