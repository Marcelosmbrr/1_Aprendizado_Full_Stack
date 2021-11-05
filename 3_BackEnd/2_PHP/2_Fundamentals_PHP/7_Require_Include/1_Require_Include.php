<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/function.require.php
    //https://www.php.net/manual/pt_BR/function.include.php

    //INCLUDE*********************************************************************************************************************/

    include("arquivo_X.php");
    //A declaração include inclui e avalia o arquivo informado
    //Os arquivos são incluídos baseando-se no caminho do arquivo informado

    //Quando um arquivo é incluído, o código herda o escopo de variáveis da linha que a inclusão ocorrer
    function foo(){

        $pessoa = "Fulano";
        global $pessoa;

        //Imagine que no arquivo_X.php existe uma variável $frase  de valor "morreu";
        include("arquivo_X.php"); 

        echo "O $pessoa $frase"; 

    }

    foo(); //Irá imprimir "O Fulano morreu"
    echo "O $pessoa $frase"; //Irá imprimir "O Fulano"

    //Todas as funções e classes definidas no arquivo incluído estarão no escopo global
    //Ou seja, as funções e classes serão acessíveis em qualquer local do arquivo que recebe

    //É recomendado usar o include_once, porque isto impede que seja incluído mais de uma vez
    //Dispensa verificações da existência de inclusões
    include_once("arquivo_X.php");

    //REQUIRE*********************************************************************************************************************/

    //A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR
    //Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue
    require("arquivo_X.php"); 
    require_once("arquivo_X.php");
