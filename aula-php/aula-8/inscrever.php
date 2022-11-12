<?php
    session_start();
    ob_start();
    require 'head.php'; 

    
?>
<div class="container">
    <h1>Adicionar Usuário</h1>
    
    <?php if(isset($_SESSION['msg'])): ?>
            <div class="alert alert-danger" role="alert">
            <?php    
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
            </div>
    <?php endif; ?>
       
   
    <form action="cadastrar_login.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">
                Nome: <br/>
                <input type="text" name="name" class="form-control">
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                E-mail: <br/>
                <input type="email" name="email" class="form-control">
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                Senha: <br/>
                <input type="password" name="password" class="form-control">
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                Confirmar a Senha: <br/>
                <input type="password" name="password_confirm" class="form-control">
            </label>
        </div>
        
        <input type="submit" value="Adicionar" class="btn btn-primary"/>
    </form>
</div>

<?php require 'footer.php'; ?>