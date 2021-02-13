<?php
require_once 'Pessoa_superclasse.php';

class Aluno_classe extends Pessoa_superclasse {
    
    private $matricula;
    private $curso;
    
    /*Construct*/
    function Aluno_classe($matricula, $curso) {
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    /* Métodos primários*/
    function cancelar_matricula(){
        $this->matricula = false;
    }
    
    
    /* Métodos Secundários GETTERS e SETTERS*/
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
