<?php

class Pessoa {
    
    private $nome;
    private $idade;
    private $sexo;
    
    /* Definição inicial dos valores dos atributos do objeto*/
    function Pessoa($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    /* Método primário */
    function fazer_aniversario(){
        $this->idade ++;
        echo "<p> A pessoa cujo nome é {$this->getNome()} fez aniversário! </p>";
    }
    

    /* Métodos secundários Getters e Setters */
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
