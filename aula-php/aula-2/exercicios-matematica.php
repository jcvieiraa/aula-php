<?php
/*
        2 -  Fazer um programa que imprima a média dos números 11, 19 e 7
    */
    echo "Exercicio 02 <br>";
    $valor1 = 11;
    $valor2 = 19;
    $valor3 = 7;

    $media = ($valor1 + $valor2 + $valor3)/3;

    echo "A média é: " . $media;

    echo "<br>--------------------------------------------------------<br>";

    /**
     * 3  - Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. 
     * A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), 
     * onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. 
     * Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. 
     * Faça um programa que calcula e escreva a média deste aluno.     * 
     */
    echo "Exercicio 03 <br>";
     $n1 = 8;
     $n2 = 7.5;
     $n3 = 10;
     $n4 = 9;

     $mediaPonderada = ($n1*1 + $n2*2 + $n3*3 + $n4 * 4) / (1+2+3+4);

     echo "A média ponderada é: " . $mediaPonderada;