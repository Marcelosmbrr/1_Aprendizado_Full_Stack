<html>
    <head>
        <meta charset="UTF-8">
        <title> Polimorfismo </title>
    </head>
    <body>
        <h1> Polimorfismo </h1>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        require_once 'Animal_class_raiz.php';
        require_once 'Mamifero_class.php';
        require_once 'Reptil_class.php';
        require_once 'Ave_class.php';
        require_once 'Humano_class.php';
        require_once 'Canguru_class.php';
        require_once 'Tartaruga_class.php';
        
        $tartaruga = new Tartaruga_class();
        $tartaruga->setPeso(600);
        $tartaruga->setIdade(190);
        $tartaruga->setMembros(4);
        $tartaruga->setCor_escamas("Escamas esverdeadas");
        $tartaruga->locomover;
        $tartaruga->emitir_som();
        print_r($tartaruga);
        
        $humano = new Humano_class("Immanuel Kant", "Pele branca");
        $humano->setPeso(64);
        $humano->setIdade(78);
        $humano->setMembros(4);
        $humano->setCor_pelo("Pelos castanhos esbranquiçados");
        $humano->locomover();
        $humano->emitir_som();
        print_r($humano);
        
        
        
        
            
       
        
        ?>
        </pre>
         
    </body>
</html>






























        