<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre> <!-- Tag de formatação -->
        <?php
        /* */
        
        require_once 'Caneta_gsc.php';
        
        $caneta3 = new Caneta_gsc();
        print_r($caneta3); /* Será de cor preta e tampada, pois o construct é chamado logo após a criação do objeto */
        
        $caneta3->setModelo("Compactor"); /* Chamamos método de inserção de valor*/
        $caneta3->setPonta(0.3);
        $caneta3->setCor("Rosa");
        print_r($caneta3);
        print "Tenho uma caneta do modelo {$caneta3->getModelo()} de ponta {$caneta3->getPonta()}, e cor {$caneta3->getCor()}.";
        
        
        ?>
        </pre>
    </body>
</html>



