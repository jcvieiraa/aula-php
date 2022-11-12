<?php
    session_start();
    ob_start();
    require 'head.php';

    if((!isset($_SESSION['id'])) && (!isset($_SESSION['nome']))){
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
        header("Location: index.php");
        exit;
    } 
?>
<h1>Home</h1>
<h2>Bem-vindo, <?php echo $_SESSION['nome'] ?></h2>
<a href="sair.php">Sair</a>

<?php include 'footer.php'; ?>