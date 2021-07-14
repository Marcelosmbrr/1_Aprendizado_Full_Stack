<?php

    //Uma função recursiva chama a si mesmo
    function recursiva($valor){

        if($valor < 5){

            echo "O valor {$valor} é menor que cinco, ainda\n";
            $valor++;

            recursiva($valor);

        }else{

            echo "O valor {$valor} é igual a 5. Fim.";

        }
        
    }

    $valor = 1;

    recursiva($valor);











?>