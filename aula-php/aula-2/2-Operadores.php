<?php

/*
Operadores Aritméticos
Exemplo	    Nome	                Resultado
+$a	        Identidade	            Conversão de $a para int ou float conforme apropriado.
-$a	        Negação	                Oposto de $a.
$a + $b	    Adição	                Soma de $a e $b.
$a - $b	    Subtração	            Diferença entre $a e $b.
$a * $b 	Multiplicação	        Produto de $a e $b.
$a / $b	    Divisão	                Quociente de $a e $b.
$a % $b	    Módulo	                Resto de $a dividido por $b.
$a ** $b	Exponencial         	Resultado de $a elevado a $b. Introduzido no PHP 5.6.

Operadores Lógicos
Exemplo	        Nome	Resultado
$a and $b	    E	    Verdadeiro (true) se tanto $a quanto $b são verdadeiros.
$a or $b	    OU	    Verdadeiro se $a ou $b são verdadeiros.
$a xor $b	    XOR	    Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
! $a	        NÃO	    Verdadeiro se $a não é verdadeiro.
$a && $b	    E	    Verdadeiro se tanto $a quanto $b são verdadeiros.
$a || $b	    OU	    Verdadeiro se $a ou $b são verdadeiros.


Operadores de comparação
Exemplo	    Nome	        Resultado
$a == $b	Igual	        Verdadeiro (true) se $a é igual a $b.
$a === $b	Idêntico	    Verdadeiro (true) se $a é igual a $b, e eles são do mesmo tipo.
$a != $b	Diferente	    Verdadeiro se $a não é igual a $b.
$a <> $b	Diferente	    Verdadeiro se $a não é igual a $b.
$a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).
$a < $b	    Menor que	    Verdadeiro se $a é estritamente menor que $b.
$a > $b	    Maior que	    Verdadeiro se $a é estritamente maior que $b.
$a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.
$a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.

Operadores de Incremento/Decremento
Exemplo	Nome	        Efeito
++$a	Pré-incremento	Incrementa $a em um, e então retorna $a.
$a++	Pós-incremento	Retorna $a, e então incrementa $a em um.
--$a	Pré-decremento	Decrementa $a em um, e então retorna $a.
$a--	Pós-decremento	Retorna $a, e então decrementa $a em um.

OBS: 
- Operadores incremento/decremento afetam apenas números e strings. Arrays, objetos e recursos não são afetados.
- Decrementar null não gera efeito, mas incrementar resulta em 1.
*/