<?php

    // ==== SOBRE CAMINHO ABSOLUTO E RELATIVO ==== //

    //https://phpdelusions.net/articles/paths

    // Digamos que hipoteticamente a pasta atual é a "atual/"

    //Caminho absoluto: Um caminho absoluto é aquele que começa na raiz do sistema
    require($_SERVER["DOCUMENT_ROOT"]."/atual/logs/arquivo.txt");
    require(__DIR__."/atual/logs/arquivo.txt");

    //Caminho relativo: Se o caminho for construído a partir da localização do arquivo em questão, ele é chamado de relativo - relativo à posição atual 
    require("../logs/arquivo.txt");


?>

