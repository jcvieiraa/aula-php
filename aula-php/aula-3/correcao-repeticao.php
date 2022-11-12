<?php

//1- Construir um programa que conte até 20 e exiba essa contagem na tela.

for($i=0;$i<=20;$i++){
    echo "Número : $i <br/>";
}

echo "<br>====================================<br/>";

for($i=10; $i>=0;$i--){
    if($i == 0) {
        echo "Decolando!";
    } else {
        echo $i."<br/>";
    }
}