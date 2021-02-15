<?php

/* Criação da classe "Caneta" abaixo */
class Caneta {
    
    /* Atributos da classe*/
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    /* Métodos da classe */
    function rabiscar(){
        if($this->tampada == true){ /* $this = objeto da classe que executar este método */
            echo "<p> Não há como rabiscar, pois está tampada </p>";
        }
        else{
        echo "<p> Estou rabiscando...</p>";
        }
    }
    function tampar(){
        $this->tampada = true;
        echo "<p> A caneta foi tampada </p>";
    }
    function destampar(){
        $this ->tampada = false;
        echo "<p> A caneta foi destampada </p> ";
    }
}
