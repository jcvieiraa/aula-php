<?php 

/* 
Funções Nativas do PHP para tratamento de datas com suas formatações. 
Datas e horas são tratados em milesegundos contados a partir de 01/01/1970.
O total de milisegundo é mostrado pela função time();

A função date pode ser formato conforme nosso modelo. 
ex: $data = date('d/m/Y');

OBS: Se hora estiver errada, provavelmente o servidor está com o horário de Greenwich (UTC).
Brasil é -3h(UTC). Pode ser configurado no arquivo php.ini buscando date.timezone. 
Troque o valor por America/Sao_Paulo 

OBS: Na formatação da função date, o w são os dias da semana em número que começa no domingo com 0.
Veja todas as formatações na documentação do PHP.

ex: echo date('w');

ex: pegando a data do banco e formatando para o formato brasileiro de data:
  $entrada = '2022-10-12';
echo date('d/m/Y', strtotime($entrada));

Documentação: https://www.php.net/manual/pt_BR/book.datetime.php

*/




//Exibir data no formato brasileiro e trazendo o dia da semana. Usar a função date().
$dia = date('w');
  
$data = date('d/m/Y');

switch($dia) {
  case 0;
    echo $data." - Domingo";
    break;
  case 1;
    echo $data." - Segunda-feira";
    break;
  case 2;
    echo $data." - Terça-feira";
    break;
  case 3;
    echo $data." - Quarta-feira";
    break;
  case 4;
    echo $data." - Quinta-feira";
    break;
  case 5;
    echo $data." - Sexta-feira";
    break;
  case 6;
    echo $data." - Sábado";
    break;
}
echo "<br/>";
// $hora = strtotime('2022-10-12 21:31');
// $agora = strtotime("now");
// echo "Entrada: $hora <br/>";
// echo "Saída: $agora <br/>";
// $intervalo = (($agora - $hora)/1000);
// echo $intervalo;
// $intervalo = date_diff($agora, $hora);
// echo $intervalo;


echo "<br/>";
$entrada = '2022-10-12 21:55:06';
$datetime1 = new DateTime($entrada);//start time
$datetime2 = new DateTime('now');//end time
$interval = $datetime1->diff($datetime2);
echo $interval->format('%d dias %H horas %i minutos %s segundos');//00 years 0 months 0 days 08 hours 0 minutes 0 seconds
$intervalo = $interval->format('%d, %H, %i,%s');//00 years 0 months 0 days 08 hours 0 minutes 0 seconds
echo "<br/> $intervalo";
$tabelaPreco = explode(',', $intervalo);
echo "<br/>";
print_r($tabelaPreco);

echo "<br/>";
$entrada = '2022-10-12 21:55:06';
echo date('H:i:s', strtotime($entrada))."<br/>";

