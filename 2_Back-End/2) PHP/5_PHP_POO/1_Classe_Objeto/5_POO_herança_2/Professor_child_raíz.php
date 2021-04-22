<?php
require_once 'Pessoa_raíz.php';
class Professor_child_raíz extends Pessoa_raíz {
    
    private $especialidade;
    private $salario;
    
    /* Construct*/
    function Professor_child_raíz($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    
    
  
    /* Método primário*/
    function receber_aumento(){
        $this->salario ++;
    }
    
    /* Métodos secundários, SETTERS e GETTERS*/
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
