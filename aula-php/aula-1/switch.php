<?php

$tipo = 'texto';

switch($tipo) {
    case 'foto':
        echo 'Exibindo Foto';
     break;
    case 'video': 
        echo 'Exibindo Video';
        break;
    case 'texto':
        echo 'Exibindo texto';
        break;        
}