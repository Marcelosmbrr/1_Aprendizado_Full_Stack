<?php
require_once 'Interface_encapsulamento.php';

class ControleRemoto implements Interface_controle{
    private $ligado;
    private $volume;
    private $tocando;
    
    function __construct() {
        $this->ligado = false;
        $this->volume = 50;
        $this->tocando = false; 
    }
    /* Estes métodos o usuário não tem acesso*/
    /* São os métodos que alteram diretamente os atributos do controle*/ 
    /* É como se fossem os processos da programação do controle*/
    function getLigado() {
        return $this->ligado;
    }

    function getVolume() {
        return $this->volume;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setLigado($ligado){
        $this->ligado = $ligado;
    }

    function setVolume($volume){
        $this->volume = $volume;
    }

    function setTocando($tocando){
        $this->tocando = $tocando;
    }
    
    /* Métodos do arquivo Interface que o usuário tem acesso*/
    /* É chamando estes métodos que o usuário altera os valores dos atributos*/
    /* O usuário clica botões e estes ativam circuitos e processos*/
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "Está ligado?" . $this->getLigado() ? "<br>Status...ligado" : "<br>Status...desligado";
        echo "Está desligado?" . $this->getTocando() ? "<br>Status...tocando" : "<br>Status...não está tocando";
        echo "</br>Volume: {$this->getVolume()}";
        for($i = 0; $i <=5; $i++){
            echo "|";
        }
    }
    public function fecharMenu() {
        echo "<br>Fechando o Menu...";
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if($this->getLigado() && $this->getVolume() >= 5){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    public function play() {
        if($this->getLigado() && ($this->getTocando == false())){
            $this->setTocando(true);
        }
    }
}
