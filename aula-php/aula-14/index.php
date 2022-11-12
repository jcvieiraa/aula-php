<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

ob_start();

?>

<?php

    require 'config.php';
    include 'head.php';

    $lista = [];

    $sql = $pdo->query("SELECT * FROM tbl_pesquisa");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchall(PDO::FETCH_ASSOC);
    }

    $nome = filter_input(INPUT_GET, 'nome');
    $sobrenome = filter_input(INPUT_GET, 'sobrenome');
    $idade = filter_input(INPUT_GET, 'idade');
    $cargo = filter_input(INPUT_GET, 'cargo');

    $lista = $pdo->query("SELECT * FROM tbl_pesquisa WHERE nome LIKE '%$nome%' and sobrenome LIKE '%$sobrenome%' and idade LIKE '%$idade%' and cargo LIKE '%$cargo' ")

?>

    <div class="container mt-3">

        <h1>Pesquisa</h1>

        <div class="d-flex">

            <form action="" method="get">

                <input type="search" name="nome" id="" placeholder="Buscar por nome...">

                <input type="search" name="sobrenome" id="" placeholder="Buscar por sobrenome...">

                <input type="search" name="idade" id="" placeholder="Buscar por idade...">

                <input type="search" name="cargo" id="" placeholder="Buscar por cargo...">

                <input class="btn btn-primary" type="submit" value="Buscar">

            </form>

        </div>

        <table class="table">

            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
                <th>Cargo</th>

            </tr>

            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td> <?= $usuario['nome']; ?> </td>
                    <td> <?= $usuario['sobrenome']; ?> </td>
                    <td> <?= $usuario['idade']; ?> </td>
                    <td> <?= $usuario['cargo']; ?> </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>

</body>
</html>