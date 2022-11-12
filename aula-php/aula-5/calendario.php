<?php
    include_once "head.php";
    
    function linha($semana){
        echo "<tr>";
        
        for($i = 0; $i <=6; $i++){
            if(isset($semana[$i])) {
                echo "<td>{$semana[$i]}</td>";
            } else {
                echo "<td></td>";
            }
        }    
        echo "</tr>";        
    }

    function calendario() {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
            array_push($semana, $dia);
            
            if(count($semana) == 7) {
                linha($semana);
                $semana = array();
            }
            
            $dia++;
        }
        linha($semana);
    }

    $hora = date('H');
    $mensagem = '';

    if ($hora >=0 && $hora < 12) {
        $mensagem = 'Bom dia';
    } else if($hora >= 12 && $hora < 18) {
       $mensagem = 'Boa tarde';     
    } else {
        $mensagem = 'Boa noite';
    }
    
?>


<body>
   <?php include_once 'header.php'; ?>

   <div class="titulo">
        <h1><?php echo "Calendário"; ?></h1>
   </div>

   <div class="ano">
    <h3><?php echo "Estamos em ". date('Y'); ?></h3>
   </div>

   <div class="horas">
        <p>
            <?php echo $mensagem; ?>! Agora são <?php echo date('H'); ?> horas e 
            <?php echo date('i'); ?> minutos.
        </p>
   </div>

    <div class="tabela">
        <table border="1">
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
            </tr>
            <?php calendario(); ?>
        </table>
    </div>
    
</body>
</html>