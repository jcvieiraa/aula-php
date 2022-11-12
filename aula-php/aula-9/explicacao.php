<?php
    require 'head.php';

    $senha = '1234';

    /**
     * password_hash é uma função nativa que gera senhas criptografadas e é recomentada para 
     * as versões mais atuais do PHP. 
     * A constante PASSWORD_DEFAULT gera o tipo de hash mais adequando e/ou mais atual do PHP. 
     * Pode chgar até 255 caracteres.
     * A cada atualização do navegador, a função gera um novo hash para mesma senha.
     * Tem outras formas de criptografar: o PASSWORD_BCRYPT, uma constante, ou seja, não mudará; 
     * e temos a função md5.  
     */
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    echo "SENHA ORIGINAL: " . $senha. "<br/>";
    echo "HASH: " . $hash . "<br/>";

    $hash_verify = '$2y$10$tyJjrBbsCylYyK8tVNl5geN7vGGy1p.YP.2t/RVYPuxbq6NRdkeTK';

    if(password_verify($senha, $hash_verify)){
        echo 'senha correta';
    } else {
        echo 'senha incorreta';
    }
?>



    
<?php include 'footer.php'; ?>