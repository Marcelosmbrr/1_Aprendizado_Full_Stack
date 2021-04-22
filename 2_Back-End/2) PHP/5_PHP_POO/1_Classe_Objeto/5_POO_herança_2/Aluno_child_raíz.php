<?php
require_once 'Pessoa_raíz.php';
class Aluno_child_raíz extends Pessoa_raíz {
    
    private $matricula;
    private $curso;
    
    /* Construct*/
    function Aluno_child_raíz($matricula, $curso) {
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
  
    /* Métodos primários*/
    function pagar_mensalidade(){
        echo "<p> Pagando mensalidade do aluno {$this->nome}...</p>"; 
        /* Para este comando direto, ao invés de "getNome" a classe "Pessoa" deve ter atributos acessíveis*/
        /* Por isso as definimos como protected, ao invés de private*/
    }
    
    /* Métodos secundários, GETTERS e SETTERS*/
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }

}
