<?php

require_once 'Reptil_class.php';

final class Tartaruga_class extends Reptil_class {
    
    
    /* Construct*/
    function Tartaruga_class() {
        
    }
    
    /* Método Primário*/
    function locomover() {
        echo "<p> A tartaruga passou a se movimentar...muito lentamente, passo a passo...utilizando suas perninhas...</p>";
    }
    
    function emitir_som() {
        echo "<p> A tartaruga emite um som de....tartaruga</p>";
    }

}
