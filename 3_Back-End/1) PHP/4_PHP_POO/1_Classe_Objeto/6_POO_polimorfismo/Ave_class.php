<?php

require_once 'Animal_class_raiz.php';

class Ave_class extends Animal_class_raiz {
    
    private $cor_penas;
    
    /*Construct*/
    function Ave_class($cor_penas) {
        $this->cor_penas = $cor_penas;
    }

    /* Método Primário*/
    function fazer_ninho(){
        
    }
    
    /* Método Secundário*/
    function getCor_penas() {
        return $this->cor_penas;
    }

    function setCor_penas($cor_penas): void {
        $this->cor_penas = $cor_penas;
    } 
    
}
