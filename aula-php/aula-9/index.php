<?php
    session_start();
    ob_start(); //limpa o buffer de saída. Usado no redirecionamento.
    require 'head.php';
    require 'config.php';

    if(isset($_SESSION['nome'])) {
        header('location:Home.php');
        exit;
   }

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    if(!empty($dados['SendLogin'])){

        // $expiracao = time() +(3600 * 2); //dura 2 minutos
        // setcookie('nome', $_SESSION['nome'],$expiracao);
    
        $sql = $pdo->prepare("SELECT * FROM tbl_login WHERE email = :email");
        $sql->bindParam(':email', $dados['email'], PDO::PARAM_STR); //PDO::PARAM_STR só aceitará string para passar para banco.
        
        $sql->execute();
        //Verifica se tem algum email e conta a quantidade de linhas achadas deste email.
        if(($sql) && ($sql->rowCount() != 0)){
            $resultado = $sql->fetch(PDO::FETCH_ASSOC);
            //var_dump($resultado);
            if(password_verify($dados['password'], $resultado['senha'])){
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['nome'] = $resultado['nome'];
                header('Location: home.php');
                exit;
            } else {
                $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
            }
        } else {
            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            //Destroi a mensagem para não imprimir na tela novamente
            unset($_SESSION['msg']);
        }
    }
?>

<div class="container">
    <h1>Login</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">
                Email: <br/>
                <input
                 type="email" 
                 name="email" 
                 class="form-control" 
                 value="<?php if(isset($dados['email'])){ echo $dados['email']; } ?>"
                >
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                Senha: <br/>
                <input type="password" name="password" class="form-control">
            </label>
        </div>

        <input type="submit" value="Salvar" name="SendLogin" class="btn btn-primary" />
    </form>
    <h5><a type="button" class="btn btn-link" href="inscrever.php">Inscrever</a></h5>

</div>


    
<?php include 'footer.php'; ?>