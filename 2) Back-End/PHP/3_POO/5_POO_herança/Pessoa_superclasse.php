<?php

/* Em todas as outras classes haviam atributos que repetiam, bem como métodos*/
/* Estes são idade, sexo e nome, e o método fazer_aniversário*/
/* Colocamos todos estes nesta, e definimos que todos irão herdar estes desta*/

class Pessoa_superclasse {
   
    private $nome;
    private $idade;
    private $sexo;
    
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
