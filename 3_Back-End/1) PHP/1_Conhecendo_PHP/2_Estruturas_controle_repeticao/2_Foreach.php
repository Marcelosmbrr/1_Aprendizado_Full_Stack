<?php

    $array = array("A", "B", "C", "D", "E", "F", "G");

    //FOREACH PARA PERCORRER VALORES
    foreach($array as $valor){

        echo "\nValor: ".$valor;
    }

    //FOREACH PARA PERCORRER VALORES E ÍNDICES
    foreach($array as $indice => $valor){

        echo "\nNo índice {$indice} há o valor {$valor}";
    }


?>