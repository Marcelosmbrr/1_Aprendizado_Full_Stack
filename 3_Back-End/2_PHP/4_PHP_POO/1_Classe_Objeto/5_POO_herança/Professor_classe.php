<?php
require_once 'Pessoa_superclasse.php';
class Professor_classe extends Pessoa_superclasse {
    
    private $especialidade;
    private $salario;
    
    /*Construct*/
    function Professor_classe($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    
    /* Métodos primários*/
    function receber_aumento($aumento){
        $this->salario = $this->getSalario() + $aumento;
    }
    
    
    /* Métodos Secundários, GETTERS e SETTERS*/
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario): void {
        $this->salario = $salario;
    }




    
    
    
    
    
    
    
    
    
    
    
}
