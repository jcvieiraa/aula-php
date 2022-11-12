
<?php


//Crie uma aplicação que sorteia números aleatórios de 1 a 50. <br/>
$numeroSorteado = rand(1,50); 
echo "O número sorteado é: $numeroSorteado"; 


echo "<br/>";

// 2- Crie uma função que trate o dado "cpf" para que fique só números (sem os pontos). 
//ex: De cpf = "123.123.123-12" para 12312312312 

function cpfSemFormato($cpf) {
   $cpfSemPontos = explode(".", $cpf);
   $resultCpf  = implode('', $cpfSemPontos);
   return $resultCpf;
}

$cpf = "123.123.123.12";
$resultado = cpfSemFormato($cpf);
echo "cpf sem pontos: $resultado";

