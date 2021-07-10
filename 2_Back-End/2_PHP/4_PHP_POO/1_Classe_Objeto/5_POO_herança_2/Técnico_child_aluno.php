<?php
require_once 'Aluno_child_raíz.php';

    final class Técnico_child_aluno extends Aluno_child_raíz{ /* É uma classe final/folha*/
    
    private $registro_profissional;
    
    /* Construct*/
    function Técnico_child_aluno($bolsa) {
        $this->bolsa = $bolsa;
    }
    
    
    
    /* Método primário*/
    function praticar(){
        
    }
    
    /* Métodos Secundários*/
    function getRegistro_profissional() {
        return $this->registro_profissional;
    }

    function setRegistro_profissional($registro_profissional): void {
        $this->registro_profissional = $registro_profissional;
    }


    
}
