<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.variables.php

    /* PHP É UMA LINGUAGEM QUE NÃO REQUER A DEFINIÇÃO DOS TIPOS DE VARIÁVEIS ***********************************************************************/ 
    $stringExemplo = "Fulano"; //string
    echo $stringExemplo;

    $stringExemplo = "Fulano Ciclano"; //string
    print $stringExemplo;

    $inteiroExemplo = 123; //int
    $floatExemplo = 12.3; //float
    $boolExemplo = true; //bool

    /* PADRÃO PARA ESCRITA DE VARIÁVEIS - CAMEL-CASE - CASE SENSITIVE ***********************************************************************/ 
    $palavraPalavra;

    /* USO DAS VARIÁVEIS EM TEXTO ***/
    $nomePessoa = "Pedro";
    echo "O nome da pessoa é $nomePessoa";
    echo "O nome da pessoa é ".$nomePessoa;

    /* VARIÁVEL VARIÁVEL ***/
    $valorExemplo = "ValorA";
    $$valorExemplo = "ValorB";

    echo $valorA; //Irá imprimir "ValorB"












?>