<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.constants.php

    define("NOME", "José Carlos");
    define("NOMES", ["Fulano", "Beltrano"]);

    echo "Seu nome é ".NOME."<br>";
    echo "Seus nomes são: ".NOME[0]." e ".NOME[1];

    function exibeNome(){

        //Constantes possuem escopo Global
        echo NOME;

    }

    exibeNome(); //Fulano









?>