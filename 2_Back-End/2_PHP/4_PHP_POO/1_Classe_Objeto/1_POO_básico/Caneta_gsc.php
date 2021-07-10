<?php

class Caneta_gsc {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;
    
    /* Esta função pré definida sempre é executada quando um objeto é criado */
    /* Existe outra forma de criar um construtor "artificial", que não irei citar (com parametros pela instanciação) */
    public function __construct() { 
        $this->cor = "Preta";
        $this->ponta = 0.5;
        $this->tampar();
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    
    
    public function getModelo(){
        return $this->modelo; /* retorna para a chamada o modelo atual */
    }
    public function setModelo($m){
        $this->modelo = $m; /* atribui o parametro recebido para o modelo */
    }
    public function getPonta(){
        return $this->ponta; /* retorno para a chamada a ponta atual */
    }
    public function setPonta($p){
        $this->ponta = $p; /* atribui o parametro recebido para a ponta */
    }
    public function getCor(){
        return $this->cor; /* retorna para a chamada a cor atual */
    }
    public function setCor($c){
        $this->cor = $c; /* atribui o parametro recebido para a cor */
    }
    
}
