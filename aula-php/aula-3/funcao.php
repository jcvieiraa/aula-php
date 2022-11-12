<?php

/*
Função: é um bloco de códigos que tem como finalidade uma determinda tarefa. 
A função reduz a repetição de códigos numa aplicação, pos ela poderá ser reaproveitada em vários lugares.  
Poderá ter parâmetros ou não.

function nomeDaFuncao() {
    ....;
}

ex:
function subsequente() {
    for($quantidade = 0; $quantidade < 10; $quantidade++) {
        echo $quantidade."<br/>";
    }

    echo "<hr/>";
}
subsequente(); //chamando a função (necessário para entrar no bloco).

Poderá repetir para reproveitar a função.
subsequente();
subsequente();
subsequente();


Parâmetros:
- Definição normal

ex: 
function somar( $n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}
soma = somar(10, 5);
echo "Total: " . $soma;

OBS: tudo que acontece dentro da função fica dentro dela. 

ex: 
function somar( $n1, $n2) {
    $total = $n1 + $n2;    
}
somar(10, 5);
echo "Total: " . $total; 
// Terá um erro. $total ficará como indefinida, pois não é a mesma variável
que está dentro da função.

OBS: uma variável poderá receber uma função com valor.

- Tipo e valor padrão

ex:
function soma($n1,$n2,$n3=0) {
   $total = $n1 = $n2 + $n3;
   return $total;
}

$x = soma(1, 3);
$y = soma(5, 3);
$w = soma($x, $y);

echo $w;

OBS: $n3 é um parâmetro opcional. Por padrão o valor dele será 0.

-- Receber tipo de parâmetros. (Recurso Novo)
 function soma(int $n1, int $n2, int $n3=0) {
    $total = $n1 + $n2 + $n3;
    return $total;
 }

 -- Passagem de parâmetros por valor ou por Referência

 --- POr valor:
 ex: 
function somar( $n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$x = 3;
$y = 2;
$soma = somar($x, $y); // a função está passando o valor das variáveis. 

echo "Total: ".$soma;

OBS: Por valor é a maioria dos casos.

--- Por Referência: 
ex:

function somar( $n1, $n2, &$total) {
    $total = $n1 + $n2;    
}

$x = 3;
$y = 2;
$soma = 0;

somar($x, $y, $soma); //a função está passando os valores da variáveis $x e $y 
                      //  e passando a variável $soma(Referência). Isso por causa do &.

echo "Total: ".$soma;

--Funções Anônimas: Função não tem nome. Poderão ser usadas de 2 formas: armazenado dentro de variavel
ou passando como parâmetro para outra função.

ex:

$descontoDezPorcento = function($valor) {
    return $valor * 0.1;
}
$funcao = $descontoDezPorcento;

echo "O valor a ser descontado é: R$ ".$funcao(82);

pode ser usada desta forma também:
    $funcao = function() {
        ....;
    };

    ou 

    algumaFuncao(10, function() {
        .....
    })


-- Funções Nativas matemáticas:
 - round: arredonda.
 - floor: arredonda para baixo.
 - ceil: arredonda para cima.
 - rand: número aleatório.
 - max: maior numero da lista.
 - min: menor número da lista.

 -- Funções Nativas de String:
  - str_replace: troca uma string pela outra. 
    ex: 
    $nome = 'Rafaela';
    echo str_replace('a','@', $nome);

   -Trim: retira os espaços;
   -strlen: quantidade de caracteres. tamanho da string.
   -strtolower: palavras em caixa baixa - minusculas.
   -strtoupper: palavras em caixa alta - maiusculas.
   -explode: divide uma string e transforma a separação em um array.
   -implode: inverso da função explode. 

-- Função Nativa do Array
- count: total de elementos num array.
- array_pop: extrai e retorna o valor do último elemento, diminuindo o array em um elemento.
- array_shift:  retira o primeiro elemento de array e o retorna, diminuindo array em um elemento e 
                movendo todos os outros elementos para trás. Todas as chaves numéricas serão 
                alteradas para começar a contar a partir de zero, enquanto chaves literais não serão 
                afetadas.
ex:
        $tecnologias = ["php","js","html","java","C#","css"];

        $tec = array_shift($tecnologias);

        print_r($tecnologias);               
            
- in_array: verifica se uma valor existe no array.
- sort: coloca os itens de um array em ordem crescente.
- array_diff: Compara array com um ou mais arrays e retorna os valores no array que não 
            estão presentes em nenhum dos outros arrays.
    
    
 - isset: Determina se uma variável foi declarada e é não vazia.   

 $idade = 30;
 if(isset($idade)){
    echo "Tem idade";
 } else {
    echo "Não tem idade";
 }
*/




$tecnologias = ["php","js","html","java","C#","css"];

$tec = array_shift($tecnologias);

print_r($tecnologias);

echo "<br/>";

//$idade = 30;
if(isset($idade)){
   echo "Tem idade";
} else {
   echo "Não tem idade";
}

echo "<br/>";

//Crie uma aplicação que sorteia números aleatórios de 1 a 50.
$numeroSorteado = rand(1,50);
echo "O número sorteado é: $numeroSorteado"; 

echo "<br/>";

function cpfSemFormato($cpf) {
   $cpfSemPontos = explode(".", $cpf);
   $resultCpf  = implode('', $cpfSemPontos);
   return $resultCpf;
}

$cpf = "123.123.123.12";
$resultado = cpfSemFormato($cpf);
echo "cpf sem pontos: $resultado";

