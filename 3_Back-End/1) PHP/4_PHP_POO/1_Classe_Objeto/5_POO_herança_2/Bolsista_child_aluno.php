<?php
require_once 'Aluno_child_raíz.php';

    final class Bolsista_child_aluno extends Aluno_child_raíz{ /* É uma classe final/folha*/
    
    private $bolsa;
    
    /* Construct*/
    function Bolsista_child_aluno($bolsa) {
        $this->bolsa = $bolsa;
    }

    
    /* Métodos primários*/
    function renovar_bolsa(){
        echo "<p> A bolsa do bolsista {$this->nome} foi renovada </p>";
    }
    function pagar_mensalidade(){ 
        echo "<p> {$this->nome} é bolsista, então tem direito a um desconto...Pagando mensalidade do aluno...</p>"; 
        /* Aqui irá ocorrer sobreposição, pois este método já existe na superclasse Aluno*/
        /* Quando o aluno for também um bolsista, o método de pagar mensalidade será este, ao invés daquele outro*/
        
    }
    
    /* Métodos Secundários*/
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
