<?php

    abstract class Pessoa_raíz { /* É uma classe abstrata*/
    
    protected $nome;
    protected $idade;
    protected $sexo;
    
    /* Método primário*/
    function fazer_aniversario(){
        $this->idade ++;
    }
    
    
    
    
    /* Métodos secundários, GETTERS e SETTERS*/
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


    
}
