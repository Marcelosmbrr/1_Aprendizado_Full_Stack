<?php

class Carro {
    
    private $fabricante;
    private $modelo;
    private $cor;
    private $preço;
    
    /* Abaixo um constructor artificial, pois é chamado no próprio "new" do objeto */
    public function Carro($fab,$mod,$cor){ 
        $this->fabricante = $fab;
        $this->modelo = $mod;
        $this->cor = $cor;
    }
    
    /* Métodos para retornar valores atuais dos atributos do objeto*/
    function getFabricante() {
        return $this->fabricante;
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPreço() {
        return $this->preço;
    }
    
    /* Métodos para atribuir valores aos atributos do objeto*/
    function setFabricante($f): void {
        $this->fabricante = $f;
    }

    function setModelo($m): void {
        $this->modelo = $m;
    }

    function setCor($c): void {
        $this->cor = $c;
    }

    function setPreço($p): void {
        $this->preço = $p;
    }




    
}
