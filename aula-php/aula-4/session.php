<?php

/* 
Session:
$_SESSION — Variáveis de sessão

Um array associativo contendo variáveis de sessão disponíveis para o atual script. 
Uma sessão serve para mantermos uma variável especial que irá existir em todas as
nossas requisições.

Como funcionam as sessões?
Se colocamos os dados na sessão, por que eles não aparecem quando
usamos outro navegador?
Para o PHP saber qual usuário é o dono de uma sessão, ele guarda

algumas informações nos Cookies do navegador. Na verdade, a infor-
mação mais importante fica em um cookie chamado PHPSESSID, que
guarda um código único de identificação da sessão daquele usuário que
está acessando a aplicação PHP.
Nós também podemos usar os Cookies para guardar informações que
serão mantidas entre as requisições. Para isso, basta usar uma outra super
global do PHP chamada $_COOKIE. Esta super global também é um
array, assim como a $_SESSION.

Outra definição: 
Sessões são conexões estabelecidas entre o servidor e o usuário. Elas servem para identificar 
cada acesso de forma individual. São usadas tambem para proteção das páginas dos sites.

ex:
    //Iniciar sessão
    session_start();

    //Ao iniciar uma sessão temos acesso a um  array superglobal
    $_SESSION['email'] = 'ricardo@email.com';
    $_SESSION['nivel'] = 'adm';
    $_SESSION['mensagem'] = 'Seja bem vindo!';

ex-2:
    //Iniciar a sessão
    session_start();

    if($_SESSION['email'] == 'ricardo@email.com'){
        echo $_SESSION['mensagem'];
        echo "Usuário administrador";
    }else{

        echo "Area restrita!";
        session_destroy();
    }

session_start() - Inicia uma nova sessão ou resume uma sessão existente

Vamos mostrar na prática na parte de desenvolvimento do Gereciador de tarefas.

Para mais informação, veja a documentação das funções de Sessão.


$_COOKIE

- É um arquivo pequeno que servidor salva no navegador que identifica o usuário. A cada solicitação de página,
o navegador também enviará o cookie. 

- Você poderá criar e recuperar os valores do cookie com o php.

- o cookie é criado com a função setcookie() no início da página (igual a session). Poderá passar, como 
parâmetros o nome, valor, tempo para espirar, o caminho, domínio, segurança e somente http.

sintaxe: setcookie(name, value, expire, path, domain, secure, httponly)

ex:
$cookie_name= "user";
$cookie_value= "Ricardo";
setcookie(cookie_name, cookie_value, time() + (86400*30),'/'); //86400 = 1 dia.


<?php
$cookie_name= "usuário";
$cookie_value= "Ricardo";
setcookie($cookie_name, $cookie_value, time() + (86400*30),'/'); //86400 = 1 dia.
?>

<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "O Cookie do '" . $cookie_name . "' não existe!";
              } else {
                echo "Cookie '" . $cookie_name . "' existe!<br>";
                echo "O valor é: " . $_COOKIE[$cookie_name];
              }
        ?>

        <h2>Recarregue a página para ver o valor do cookie </h2>
    </body>
</html>

*/



 //Iniciar sessão
//  session_start();

//  //Ao iniciar uma sessão temos acesso a um  array superglobal
//  $_SESSION['email'] = 'ricardo@email.com';
//  $_SESSION['nivel'] = 'adm';
//  $_SESSION['mensagem'] = 'Seja bem vindo!';

//  if($_SESSION['email'] == 'ricardo@email.com'){
//     echo $_SESSION['mensagem'];
//     echo "Usuário administrador";
// }else{

//     echo "Area restrita!";
//     session_destroy();
// }
?>
<?php
$cookie_name= "usuário";
$cookie_value= "Ricardo";
setcookie($cookie_name, $cookie_value, time() + (86400*30),'/'); //86400 = 1 dia.
?>

<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "O Cookie do '" . $cookie_name . "' não existe!";
              } else {
                echo "Cookie '" . $cookie_name . "' existe!<br>";
                echo "O valor é: " . $_COOKIE[$cookie_name];
              }
        ?>

        <h2>Recarregue a página para ver o valor do cookie </h2>
    </body>
</html>

