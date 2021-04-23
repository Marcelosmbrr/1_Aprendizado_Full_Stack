<?php

    //TANTO O INCLUDE, QUANTO O REQUIRE, SERVEM PARA INCLUIR ARQUIVOS EM OUTROS 
    //Isto é, tanto com um, quando com outro, podemos utilizar recursos de um arquivo em outro, ao invés de ter que os reescrever toda vez que forem necessários
    //A diferença entre um, e outro, se dá no tratamento dos erros
    //Se existirem erros no arquivo, o require gera um fatal_error e paralisa a aplicação, enquanto o include permite o seu funcionamento sem os recursos do arquivo que seria incluido

    require("../exemplo.php");

    include("../exemplo.php");

    //Quando na presença do complemento “_once”, só é permitida a inclusão do arquivo uma única vez na página

    require_once("../exemplo.php");

    include_once("../exemplo.php");

    //Qual utilizar? No geral, deve-se utilizar o require_once()


    













?>