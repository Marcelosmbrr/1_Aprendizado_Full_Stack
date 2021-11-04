<?php

// A partir da versão 7.4 passou a ser possível tipar atributos de classes

class Example{

    private string $nome;
    private string $sexo;
    private int $idade;

    public function __construct($data){

        $this->nome = $data[0];
        $this->sexo = $data[1];
        $this->idade = $data[2];

    }

    public function printData(){
        echo "Nome: {$this->nome} | Sexo: {$this->sexo} | Idade: {$this->idade}";
    }

}

$obj = new Example(["Fulano", "Masculino", 30]);
$obj->printData();