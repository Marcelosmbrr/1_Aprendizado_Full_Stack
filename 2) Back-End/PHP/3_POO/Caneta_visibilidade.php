<?php

class Caneta_visibilidade {
    
    /* É apenas para exemplo, não há um "porquê" de ter escolhido um ou outro
    
    /* Atributos da classe com visibilidade definida*/
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    /* Métodos da classe */
    public function rabiscar(){
        if($this->tampada == true){ /* $this = objeto da classe que executar este método */
            echo "<p> Não há como rabiscar, pois está tampada </p>";
        }
        else{
            echo "<p> Estou rabiscando...</p>";
        }
    }
    public function tampar(){ /* O método é público*/
        $this->tampada = true; /* Mas o atributo modificado é protegido...neste caso, dará certo*/
        echo "<p> A caneta foi tampada </p>";
    }
    public function destampar(){
        $this ->tampada = false;
        echo "<p> A caneta foi destampada </p> ";
    }
}

