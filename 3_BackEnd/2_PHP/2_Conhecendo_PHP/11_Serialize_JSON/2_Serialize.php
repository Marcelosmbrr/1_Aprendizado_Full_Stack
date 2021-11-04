<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/function.serialize.php

    //A serialização é semelhante ao JSON, exceto que é dedicada ao ambiente PHP
    //Serve para transportar dados entre aplicações PHP mantendo suas configurações nativas do PHP
    //Por exemplo, com serialize a visibilidade dos atributos de uma classe são mantidas - o que não ocorre com JSON

    class teste{

        private $dadoA;
        private $dadoB;
        public $dadoC;

        //Método Mágico __construct()
        public function __construct(){

            $this->dadoA = "123";
            $this->dadoB = "456";
            $this->dadoC = "789";

        }

        //Método Mágico __toString()
        //Quando a instância é antecedida de um echo, toString imprime seu conteúdo
        public function __toString(){

            serialize(array(

                "dadoA"=>$this->dadoA,
                "dadoB"=>$this->dadoB,
                "dadoC"=>$this->dadoC

            ));
        }
    }

    $obj = new teste();
    echo $obj; //Os valores privados serão asteriscos, e os públicos serão visíveis normalmente

