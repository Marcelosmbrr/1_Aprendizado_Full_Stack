<?php

    //EXISTEM CONSTANTES DO PRÓPRIO PHP
    //Exemplo
    echo DIRECTORY_SEPARATOR;

    //COMO CRIAR UMA CONSTANTE 
    define("NOME", 123123);
    echo "\n".NOME;

    //ARRAY CONSTANTE
    define("DATA_BASE", [

        "127.0.0.1",
        "root",
        "pass",
        "db_teste"

    ]);

    echo "\n";

    print_r(DATA_BASE);
    echo DATA_BASE[1];













?>