<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.types.php

    /* DADOS ESCALARES ***********************************************************************/ 

    //String
    $stringExemplo = "Fulano";

    if(is_string($stringExemplo))
        echo "É uma string";
    else
        echo "Não é uma string";

    //Booleano
    $booleanExemplo = TRUE;

    if(is_bool($boolExemplo))
        echo "É um valor booleano";
    else
        echo "Não é um valor booleano";

    //Inteiro
    $intExemplo = 10;

    if(is_int($boolExemplo))
        echo "É um valor inteiro";
    else
        echo "Não é um valor inteiro";

    //Float
    $floatExemplo = 10.2;

    if(is_float($floatExemplo))
        echo "É um valor float";
    else
        echo "Não é um valor float";

    //Numérico
    $numericoExemplo = 1;
    $numericoSExemplo = "1";

    if(is_numeric($numericoExemplo) && is_numeric($numericoSExemplo))
        echo "São numéricos";
    else
        echo "Não são numéricos";

    /* DADOS COMPOSTOS ***********************************************************************/ 

    //Array 
    $arrayA = array("A", "B", "C"); //Array indexado criado criado com array()
    echo "{$arrayA[0]}, | {$arrayA[1]}, {$arrayA[2]}";

    $arrayB = ["A", "B", "C"]; //Array indexado criado com colchetes
    echo "{$arrayA[0]}, | {$arrayA[1]}, {$arrayA[2]}";

    //Objeto
    class Cliente{

        public $nome; //atributo público, acessível fora da classe (pelo objeto)

        //Método chamado na instanciação da classe
        public function __construct($novo_nome){
            $this->nome = $novo_nome; //Atributo nome recebe o valor do argumento
        }

        //Método chamado pelo objeto da classe
        public function novoNome($novo_nome){
            $this->nome = $novo_nome; //Atributo nome recebe o valor do argumento
        }
    }

    $objetoInstancia = new Cliente("Nome Default"); //Objeto/Instância da classe //O método construct é chamado
    echo $objetoInstancia->nome; //Nome Default 
    $objetoInstancia->novoNome("Novo Nome");
    echo $objetoInstancia->nome; //Novo Nome

    if(is_object($objetoInstancia))
        echo "É um objeto";
    else
        echo "Não é um objeto";

    //Especiais //NULL e Resource
    $vazio = null; 
    $recurso = empty($vazio);
    echo get_resource_type($recurso);

    if(is_null($vazio))
        echo "É do tipo null";
    else
        echo "Não é do tipo null";

        if(is_resource($recurso))
        echo "É um recurso";
    else
        echo "Não é um recurso";


    //Recursos para string
    //https://www.php.net/manual/pt_BR/ref.strings.php

    /*
    strtoupper() //Letras maiúsculas
    strtolower() //Letras minúsculas
    substr() //Subtrai elementos da string
    str_pad() //Preenche uma string para um certo tamanho com outra string
    str_repeat() //Repete uma string
    strlen() //Conta os caracteres de uma string
    str_replace() //Substitui elementos da string por outro
    strpos() //Procura por elementos em uma string
    */

    //Recursos para números
    /*
    number_format() //Formatação do número; por exemplo, trocar vírgulas por pontos
    round() //Arredonda um número
    ceil() //Arredonda frações para cima
    floor() //Arredonda frações para baixo
    rand() //Cálcula e retorna números aleatórios
    */







    

    
    
   











?>