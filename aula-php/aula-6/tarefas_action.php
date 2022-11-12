<?php 
    require 'banco.php';

    $nome = filter_input(INPUT_POST, 'nome'); //input_post porque o método é post
    $descricao = filter_input(INPUT_POST, 'descricao');
    $prazo = filter_input(INPUT_POST, 'prazo');
    $prioridade = filter_input(INPUT_POST, 'prioridade');
    $concluida = filter_input(INPUT_POST, 'concluida');
        

    if(isset($nome)) {

        $sql = $pdo->prepare(
            "INSERT INTO tbl_tarefas(nome,descricao,prazo,prioridade,conclusao) VALUES (:nome, :descricao, :prazo, :prioridade, :concluida)"
        );

        //bindValue pega o valor e add o valor no item :name. pode ser bindParament que pegará o parametro.
        $sql->bindValue(':nome', $nome);
        //Passa a variável como parâmetro. Caso a a variável seja alterada depois, o parâmetro também mudará  
        $sql->bindParam(':descricao', $descricao); 
        $sql->bindValue(':prazo', $prazo);
        $sql->bindValue(':prioridade', $prioridade);
        $sql->bindValue(':concluida', $concluida);
        $sql->execute();

        header('Location:tarefas.php');
    } else {
        header('Location:tarefas.php');
    }