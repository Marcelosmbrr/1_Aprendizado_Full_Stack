<?php

require_once 'Animal_class_raiz.php';

class Mamifero_class extends Animal_class_raiz {
    
    private $cor_pelo;
    
    /*Construct*/
    function Mamífero_class($cor_pelo) {
        $this->cor_pelo = $cor_pelo;
    }
    
    /* Métodos Secundários*/
    function getCor_pelo() {
        return $this->cor_pelo;
    }

    function setCor_pelo($cor_pelo): void {
        $this->cor_pelo = $cor_pelo;
    }

    
}
