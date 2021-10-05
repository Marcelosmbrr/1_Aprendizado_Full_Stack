<?php
require_once 'Pessoa_superclasse.php';
class Funcionario_classe extends Pessoa_superclasse {
    
    private $setor;
    private $trabalhando;
    
    /*Construct*/
    function Funcionario_classe($setor, $trabalhando) {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    
    /* Métodos primários*/
    function mudar_setor($novo_setor){
        $this->setor = $novo_setor;
    }
    
    
    
    /* Métodos Secundários, GETTERS e SETTERS*/
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor): void {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }




}
