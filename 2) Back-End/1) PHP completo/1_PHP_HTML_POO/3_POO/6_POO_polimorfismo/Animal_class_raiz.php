<?php


 abstract class Animal_class_raiz {
    
     protected $peso;
     protected $idade;
     protected $membros;
    
    /* Métodos primários*/
    function locomover(){}
    function alimentar(){}   
    function emitir_som(){}
        
    /* Métodos Secundários*/
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setMembros($membros): void {
        $this->membros = $membros;
    }


}
