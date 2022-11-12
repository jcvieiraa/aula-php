<?php 

$idade = 16;


//Carteira de habilitação
if($idade>=18) {
    echo "Pode tirar a CNH - Habilitação";
} else {
    echo "Não pode tirar a habilitação";
}
echo "<br />";

//Eleitor
if($idade>=18) {
    echo "Voto obrigatório";
} else if($idade < 18 && $idade > 70) {
    echo "Voto Facultativo";
} else {
    echo "Não pode votar";
}
