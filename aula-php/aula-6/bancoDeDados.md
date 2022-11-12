Aula-6

-Ensinar o PDO:

BANCO DE DADOS COM PDO

PDO - é uma classe do PHP para manipulação de Banco de Dados.

 //Inserção de dados 
 //Para conexã precisamos informar o tipo de SGBD (mysql), o nome do banco, o endereço de onde o banco de dado se encontra (localhost), usuário e senha de conexão ao banco de dados

  $conect = new PDO("mysql:dbname=db_aula06;host=localhost", "root", "");

  //Definindo as variáveis
    $nome = "Joao Muniz";
    $cpf = "00000000999";

    //Preparar o comando sql(query) para cadastro de dados
    //O resultado é armazenado dentro da variáveç query
    $query = $conect->prepare("INSERT INTO tb_clientes(nome,cpf) VALUES(:NOME,:CPF)");

    //Fazendo a associação dos campos VALUES(:NOME,:CPF)
    $query->bindParam(":NOME",$nome);
    $query->bindParam(":CPF", $cpf);

    //Executar
    $query->execute();
    echo "Será que funfou? :[";

    -Add o banco ao projeto tarefas.

    -Fala sobre o metodos $_POST.

    