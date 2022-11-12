<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php"; ?>

    <main>
        <div class="centralizado">
            <h2>Gerenciador de Tarefas</h2>
        </div>
        <div class="centralizado">
            <form method="POST" action="tarefas_action.php">
                <fieldset>
                    <legend>Nova Tarefa</legend>
                    <label>
                        Tarefa:
                        <input type="text" name="nome" />
                    </label>
                    <label>
                        Descrição (Opcional):
                        <textarea name="descricao"></textarea>
                    </label>
                    <label>
                        Prazo (Opcional):
                        <input type="date" name="prazo" />
                    </label>
                    <fieldset id="prioridades">
                        <legend>Prioridade: </legend>
                        <label>
                            <input type="radio" name="prioridade" value="baixa" checked />
                            Baixa
                            <input type="radio" name="prioridade" value="media"  />
                            Media
                            <input type="radio" name="prioridade" value="alta">
                            Alta
                        </label>
                    </fieldset>
                    <div>
                        <label>
                            Tarefa Concluída:
                            <input id="concluida" type="checkbox" name="concluida" value="sim" />
                        </label>

                    </div>
                   
                    <input type="submit" value="Cadastrar">
                </fieldset>
            </form>
        </div>
        <?php 
                 
        
        ?>
        <div class="centralizado">
                <table class="tabela">
                    <tr>
                        <th>Tarefas</th>
                        <th>Descrição</th>
                        <th colspan="2">Prazo</th>
                        <th colspan="2">Prioridade</th>
                        <th colspan="2">Concluída</th>
                    </tr>
                    <?php if(isset($listaTarefas)) : ?>
                        <?php  foreach($listaTarefas as $tarefa) : ?>
                            <tr>
                                <td>
                                    <?php echo $tarefa['nome']; ?>
                                </td>
                                <td>
                                    <?php echo $tarefa['descricao']; ?>
                                </td>
                                <td colsapn="2">
                                    <?php echo $tarefa['prazo']; ?>
                                </td>
                                <td colspan="2">
                                    <?php echo $tarefa['prioridade']; ?>
                                </td>
                                <td colspan="2">
                                    <?php echo $tarefa['concluida']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    <?php endif; ?>
                    
                </table>
            </div>

    </main>

</body>
</html>