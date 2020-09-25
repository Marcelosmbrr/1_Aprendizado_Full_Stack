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
        
        require_once 'Carro.php';
        $carro1 = new Carro("Protótipo", "hatch", "Prata");
        print_r($carro1);
        $carro1->setFabricante("Ford");
        $carro1->setModelo("Sedan");
        $carro1->setCor("Preto");
        $carro1->setPreço("20k");
        print_r($carro1);
        if($carro1->getFabricante() == "Ford" && $carro1->getModelo() == "Sedan"){
            echo " <p> O preço do mesmo carro, na China, custa {$carro1->getPreço()} mais 11.000 de impostos </p> ";
        }
        
        
        
        
        ?>
        </pre>
    </body>
</html>
