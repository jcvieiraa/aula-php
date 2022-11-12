<?php
    require 'config.php';

    $name = filter_input(INPUT_POST, 'name'); //input_post porque o método é post
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); // FILTER_VALIDATE_EMAIL é uma filtro de validação de email.

    //verificar se o nome e o email são válidos
    if($name && $email) {

        //poderia, mas é vulnerável
        //$pdo->query("INSERT INTO usuarios(nome, email) VALUES ('$name','$email')");

        $sql = $pdo->prepare( "INSERT INTO tbl_usuario (nome,email) VALUES (:name, :email)" );
        $sql->bindValue(':name', $name); //bindValue pega o valor e add o valor no item :name. pode ser bindParament que pegará o parametro.
        $sql->bindParam(':email', $email); //Passa a variável como parâmetro. Caso a a variável seja alterada depois, o parâmetro também mudará  
        $sql->execute();

        header("Location: index.php");

    } else {
        header('Location: adicionar.php'); //caso contrário, vai retorna para página adicionar.php e não registra.
        exit;
    }