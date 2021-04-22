<?php

    $nome = "Fulano";
    $evento = "Fulano andou de bicicleta";

    //Informa a quantidade de letras da string
    echo strlen($nome);

    echo "<br>";

    //Tornas as letras maiúsculas
    echo strtoupper($nome);

    echo "<br>";

    //Torna as letras minusculas
    echo strtolower($nome);

    echo "<br>";

    //Substitui uma letra por outra, no valor de uma variável definida
    echo str_replace("o", "a", $nome);

    echo "<br>";

    //Informa a posição de determinada palavra da string
    echo strpos($evento, "bicicleta");

    echo "<br>";









?>