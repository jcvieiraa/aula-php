<?php
    session_start();
    ob_start();
    require 'config.php';
    require 'head.php';

    if((!isset($_SESSION['id'])) && (!isset($_SESSION['nome']))){
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
        header("Location: login.php");
        exit;
    } 
    $id = $_SESSION['id'];
    $sql = $pdo->query("SELECT * FROM usuarios WHERE id = $id");
    $banco = $sql->fetch(PDO::FETCH_ASSOC);    
?>

 <header>        
        <h2>Bem-vindo, <?php echo $_SESSION['nome'] ?></h2>
        <a href="sair.php">Sair</a>
    </header>
<div class="container">
   
    <div class="avatar">
        <img src="arquivos/<?=$banco['avatar']; ?>" alt="">
    </div>
    <div class="mudar">
        <h1>Trocar Avatar</h1>
        <form action="recebedor.php" method="post" enctype="multipart/form-data" />
            <input type="file" name="arquivo" />
            <input type="submit" value="Enviar">
        </form>
    </div>

</div>

    
<?php include 'footer.php'; ?>

   
