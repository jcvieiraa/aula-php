<?php
/*
um formulário serve para
enviarmos os dados para algum lugar.

Vamos criar o form do Gerenciador de Tarefas:
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

Entrada de dados na web

Se você já programou algum software para desktop ou scripts para a
linha de comando, já deve ter lidado com entrada de dados do usuário.
Neste software, você para o processamento e pedi
para o usuário informar um valor, e então seguir em frente usando o valor
fornecido.

Na web, o PHP não pode ser parado para perguntar algo para o usuário, então os dados já devem existir
para o PHP quando o script começar a rodar. Uma maneira diferente de entrada de dados. 
Ex: Na url, tem o trecho nome=Estudar+PHP. que serve para inserir uma informação para o 
PHP(o nome da tarefa). Sendo assim, quando o script tarefa.php começar a executar, 
ele já terá esta informação.
Por isso, na web devemos sempre pensar na entrada de dados usando
os formulários que irão enviar os dados para a próxima página.

Vamos usar a superglobal $_GET que é um array e o PHP pega o que está na url e insere no $_GET. 
É o metodo padrão quando não é especificado.

Podemos usar, também, o $_POST para enviar dados sem usar a url. Isso traz mais segurança, pois não é possível 
ver o que está sendo enviado. 

Vamos construir o Gerenciador de tarefas utilizando os conceitos já estudados:
 - Primero, vamos verificar se tem dados sendo passados na url e, se existir, exiba logo após o form. 
 Use a função isset.

 - Adicione os dados de $_GET(dados recebidos na url) no array $listaTarefas.

 - Crie uma tabela para exibir todas as tarefas já cadastradas.

 - Faça o teste: adicione várias tarefas e veja o que acontece...

 - Percebeu que as novas tarefas apagam a anterior? 
 PHP trabalha principalmente com web e neste caso o que acontece
a cada nova requisição que fazemos, seja pedindo uma página, seja en-
viando dados, é que o PHP interpreta tudo de novo e devolve apenas
HTML para o navegador.

 - Como resolver?

*/