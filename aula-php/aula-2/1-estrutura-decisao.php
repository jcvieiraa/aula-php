<?php 

/*



Estrutura de Decisão

- Estrutura simples -> é dada por uma única decisão.
ex:
if($idade >=18) {
    echo "Pode dirigir";
}

- Estrutura Composta -> é dada por uma única decisão e uma saída.
ex:
if($idade >= 18){
     echo "Pode dirigir";
} else {
    echo "Não Pode dirigir";
}

-- Estrutura compacta -> retira das chaves nos blocos de código do if. Opcional quando há apenas uma linha no bloco de código.
ex:
if($idade >= 18)
    echo "Pode dirigir";
else
    echo "Não Pode dirigir";    

-- Estrutura Ternário -> forma reduzida do if.
$pode = "Pode dirigir";
$naoPode = "Não Pode dirigir";

ex: ($idade>=18) ? $pode : $naoPode;   

melhorando o ternário-> $permissao = ($idade>=18) ? "Pode dirigir" : "Não Pode dirigir"; 

- Estrutura Encadeada -> é dada por ter mais de uma decisão e uma saída padrão.
ex:
$materia = "php";

if(materia == "javascript") {
    echo "Liguagem multiplataformas";
} else if($materia == "php") {
    echo "Liguagem para web";
} else if($materia == "java") {
    echo "Liguagem Robusta";
} else if($materia == "python") {
    echo "Liguagem performática";
} else {
    echo "Liguagem desconhecida";
}    

-- Estrutura Multipla -> é dado para escolher uma opção após o teste.  
ex: 

$opcao = 2;

switch($opcao) {
    case 1:
        echo "Valor 1";
        break;
    case 2: 
        echo "Valor 2";
        break;
    case 3: 
        echo "Valor 3";
        break;
    default: 
        echo "Opção Inválida";
        break;            
};


