<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Lutadores </h1>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        require_once 'Lutador_classe.php';
        require_once 'Luta_classe.php';
        for($cont = 1; $cont <= 2; $cont++){
            if($cont == 1){
               $lutador[$cont] = new Lutador_classe("Batimá", "Brasil", 22, 1.80, 60, "Leve", 20, 0, 0 );
            }
            else if($cont == 2){
                $lutador[$cont] = new Lutador_classe("Jóquer", "Rússia", 33, 1.80, 63, "Leve", 15, 7, 2 );
            }
        }
        for($cont = 1; $cont <= 2; $cont++){
            echo "<h2>{$cont}º lutador: </h2>";
            $lutador[$cont]->apresentar();
        }
        
        /*Criamos objeto Luta */
        $luta1 = new Luta_classe();
        $luta1->marcar_luta($lutador[1], $lutador[2]);
        $luta1->lutar();

        
        

        
        
        
        
            
        ?>
        </pre>
         
    </body>
</html>