<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.types.array.php

    //Arrays indexados //Se dão com índices são sequenciais: 0, 1, 2, 3, ...
    $arrIndexado = array("A", "B", "C"); //Array indexado criado com o recurso array()
    echo "{$arrIndexado[0]}, | {$arrIndexado[1]}, | {$arrIndexado[2]}";

    $arrIndexado = ["A", "B", "C"]; //Array indexado criado com colchetes
    echo "{$arrIndexado[0]}, | {$arrIndexado[1]}, | {$arrIndexado[2]}";

    //Arrays associativos //Se dão com chave-valor
    $arrAssoc = array("primeiro"=>"A", "segundo"=>"B", "terceiro"=>"C"); //Array associativo criado com o recurso array()
    echo "{$arrAssoc['primeiro']}, | {$arrAssoc['segundo']}, | {$arrAssoc['terceiro']}";

    $arrAssoc = ["primeiro"=>"A", "segundo"=>"B", "terceiro"=>"C"]; //Array associativo criado com colchetes
    echo "{$arrAssoc['primeiro']}, | {$arrAssoc['segundo']}, | {$arrAssoc['terceiro']}";

    //Arrays multidimensionais
    $arrMatriz = array( //Matriz 3x3 com o recurso array()

        "primeira_linha"=> array("A", "B", "C"),
        "segunda_linha"=> array("D", "F", "G"),
        "terceira_linha"=> array("H", "I", "J")
    );

    echo "{$arrMatriz['primeira_linha'][2]}"; // Coordenada da letra C

    //Matriz 3x3 com colchetes
    $arrMatriz[0] = ["A", "B", "C"];
    $arrMatriz[1] = ["D", "F", "G"];
    $arrMatriz[2] = ["H", "I", "J"];

    echo "{$arrMatriz[1][2]}"; // Coordenada da letra G

    $arrMulti = array( //Matriz 3x3 com o recurso array()

        "primeira_linha"=> array("Letra A"=>"A", "XXX"=>[200, 100=>"AQUI"], "Letra C"=>"C"),
        "segunda_linha"=> array(22=>"D", "F", "G"),
        "terceira_linha"=> array("H", "I", 900=>"J")
    );
    
    echo "{$arrMulti['primeira_linha']['XXX'][0]}"; // Coordenada do valor 200
    echo "{$arrMulti['primeira_linha']['XXX'][1]}"; // Coordenada do valor AQUI

    //Array com índice implicito
    $arrExemplo[0] = "A";
    $arrExemplo[1] = "B";
    $arrExemplo[] = "C"; //Considera o índice anterior e incrementa 1

    echo "{$arrExemplo[2]}\n"; //Valor C
    echo count($arrExemplo); // Contador de elementos de um array //Valor 3

    //Recursos para arrays
    //https://www.php.net/manual/pt_BR/ref.array.php
    
    /*
    is_array($array) = verifica se uma determinada variável é um array.
    in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
    array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
    array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
    array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
    array_pop($array) = exlui a ultima posição do array.
    array_shift($array) = exclui a primeira posição do array.
    array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
    array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
    array_combine($keys, $values) = mescla os dois arrays passados.
    array_sum() = calcula a soma dos elementos de array.
    explode("/", "20/01/2001") = transforma strings em array.
    implode("-", $array) = transforma array em string.
    */












?>