<?php

    //For //Serve principalmente para iterar sobre arrays indexados
    //Sua estrutura estabelece um contador com valor inicial, uma condição verdadeira, e um operador de incremento ou decremento
    //Quando a condição for falsa, a repetição é encerrada
    $arrIndexado = ["A", "B", "C", "D", "E", "F", "FIM"];

    //Valor do contador; verificação da condição; pós-incremento do contador
    //O valor incrementado do contador é utilizado no loop seguinte
    for($contador = 0; $contador <= 6; $contador++){
        
            echo $contador; //Irá imprimir o intervalo 0-6
            echo "<br>";
    } 

    for($cont = 0; $cont <= 6; $cont++){
        
        if($arrIndexado[$cont] != "FIM"){

            echo "Letra Atual: ".$arrIndexado[$cont]."<br>";

        }elseif($arrIndexado[$cont] == "FIM"){

            echo "Chegamos ao ".$arrIndexado[$cont];
        }

    } 

    //Foreach também serve para iterar sobre arrays, mas sem a necessidade de um contador
    //Pode ser utilizado tanto para arrays indexados, quanto para associativos
    $arrAssoc = array("chave_A"=>"Carro", "chave_B"=>"Moto","chave_C"=>"Avião");
    foreach($arrAssoc as $chave => $valor){

        echo "Na chave $chave existe o valor $valor";
        echo "<br>";

    }

    //Iterar sobre arrays multidimensionais
    $arrMulti[0] = ["A", "B", "C"];
    $arrMulti[1] = ["C", "D", "E"];
    $arrMulti[2] = ["F", "G", "H"];

    for($linha = 0; $linha < count($arrMulti); $linha++){ //Loop das linhas
        for($coluna = 0; $coluna < count($arrMulti[0]); $coluna++){ //Loop das colunas

            echo "| {$arrMulti[$linha][$coluna]}"; //Imprime os itens da atual linha

        }

        echo "<br>"; //Antes de iterar sobre a próxima linha, realizar uma quebra de linha
    }

    
