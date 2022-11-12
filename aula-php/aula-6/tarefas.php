<?php
    session_start();
    include_once "head.php";     
        //só cria a tarefa quando tiver se gerada alguma tarefa          
        if(isset($_GET['nome']) && $_GET['nome'] != ''){     
            $tarefas = array();

            $tarefas['nome'] = $_GET['nome'];

            if(isset($_GET['descricao'])) {
                $tarefas['descricao'] = $_GET['descricao'];
            } else {
                $tarefas['descricao'] = ' ';
            }

            if(isset($_GET['prazo'])) {
                $tarefas['prazo'] = $_GET['prazo'];
            } else { 
                $tarefas['prazo'] = ' ';
            }
           
            $tarefas['prioridade'] = $_GET['prioridade'];

            if(isset($_GET['concluida'])) {
                $tarefas['concluida'] = $_GET['concluida'];
            } else {
                $tarefas['concluida'] = ' ';
            }

             //$listaTarefas = array();
             $_SESSION['listaTarefas'][] = $tarefas;
             if(isset($_SESSION['listaTarefas'])) {
                $listaTarefas = $_SESSION['listaTarefas'];
            }
        }             
           
        include "template.php";
?>
