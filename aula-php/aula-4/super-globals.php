<?php
/*
Superglobais — Variáveis nativas que estão sempre disponíveis em todos escopos. Ou seja, você 
pode acessá-las em qualquer lugar do seu código e elas estarão disponíveis.
ex: Pode acessá-las dentro de funções, dentro de laços, dentro de classes e etc.

Várias variáveis pré-definidas no PHP são "superglobais", que significa que elas estão disponível em todos escopos para todo o script. Não há necessidade de fazer global $variable; para acessá-lo dentro de funções ou métodos.

Estas variáveis superglobais são:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV

OBS: Por padrão, todas as superglobais estão disponíveis, mas há diretivas que afetam esta 
disponibilidade. Para mais informação, consulte na documentação sobre variables_order.

Superglobais não podem ser usadas como variável dentro de função ou métodos de classes.

$_GET -> Um array associativo de variáveis passadas para o script atual via os parâmetros da URL 
(também conhecidos como query string). Note que o array não é preenchido apenas para solicitações GET, 
mas também para todas requisições com uma query string.

ex: http://exemplo.com.br/?nome=Ricardo&idade=41

Obs: query string são dados recebidos na url após o ponto de interrogação -?.

$_POST -> Um array associativo de variáveis passados para o script atual via método HTTP POST 
quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do 
cabeçalho HTTP Content-Type na requisição.

$_FILES -> Um array associativo de items enviado através do script atual pelo método HTTP POST.
Usado para envio de arquivos (upload). Veremos em aula mais para frente.

$_REQUEST -> Um array associativo que por padrão contém informações de $_GET, $_POST e $_COOKIE.

$_SESSION -> Um array associativo contendo variáveis de sessão disponíveis para o atual script. 
Veja a documentação das funções de Sessão para mais informação em como usar isto. 
Veremos mais detalhes nesta aula.

$_COOKIE -> Um array associativo de variáveis passadas para o atual script via HTTP Cookies.