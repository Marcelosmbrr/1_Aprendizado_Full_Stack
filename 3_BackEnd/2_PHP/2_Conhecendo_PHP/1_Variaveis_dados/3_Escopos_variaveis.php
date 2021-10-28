<?php

    
    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.variables.scope.php

    //ESCOPO DE VARIÁVEIS
    //O escopo de uma variável é o contexto onde foi definida

    //Escopo Global
    $variavelA = "Valor A";

    function escopoFuncao(){

        //Escopo Local, ou da função
        $variavelB = "Valor B";

        //Escopo Global
        global $varGlobal;
        $variavelC = "Valor C";

    }

    echo $variavelA; // Valor A
    echo $variavelB; // Undefined
    echo $variavelC; //Valor C

    class EscopoClasse{

        //Escopo Local
        public $variavelD = "D"; //Acessível externamente apenas por meio de uma instância (objeto)
        protected $variavelE; //Acessível apenas pela própria classe, ou para uma classe filha - isto é, por herança
        private $variavelF = "E"; //Acessível apenas dentro da própria classe


    }

    echo $variavelD; // Undefined
    echo $variavelE; // Undefined
    echo $variavelF; // Undefined








