<?php

require_once 'Animal_class_raiz.php';

class Reptil_class extends Animal_class_raiz {
    
    private $cor_escamas;
    
    /*Construct*/
    function Réptil_class($cor_escamas) {
        $this->cor_escamas = $cor_escamas;
    }
    
    /* Métodos Secundários*/
    function getCor_escamas() {
        return $this->cor_escamas;
    }

    function setCor_escamas($cor_escamas): void {
        $this->cor_escamas = $cor_escamas;
    }


}
