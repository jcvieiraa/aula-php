<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereciador de tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="centralizado">
        <h1>Gerenciador de Tarefas</h1>

    </div>
    <div class="centralizado">

        <form >
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                </label>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
    <div class="centralizado">
        <?php
            //Verificando se está recebendo os dados da url e imprimindo em tela
           
                // if (isset($_GET['nome'])) {
                // echo "Nome informado: " . $_GET['nome'];
                // }
                     

            $listaTarefas = array();
            //add valor na listaTarefas
            // if(isset($_GET['nome'])) {
            //     $listaTarefas[] = $_GET['nome'];
            // }

             //adicionando a session
             if(isset($_GET['nome'])) {
                $_SESSION['listaTarefas'][] = $_GET['nome'];
            }
            // add o valor da session para listaTarefas
            if(isset($_SESSION['listaTarefas'])) {
                $listaTarefas = $_SESSION['listaTarefas'];
            }

            
        ?>
    </div>
    <div class="centralizado">
        <table >
            <tr>
                <td>Tarefas</td>
            </tr>
    
            <?php foreach ($listaTarefas as $tarefa ) : ?>
                <tr>
                    <td>
                        <?php echo $tarefa; ?>
                    </td>
                </tr>
            <?php endforeach?>

        </table>
    </div>
    
</body>
</html>