<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Celular
 *
 * @author lcmar
 */
class Celular implements Interface_celular{
    
    /* Atributos bases do celular */
    private $bateria;
    private $ligado;
    private $volume;
    private $touch;
    
    function __construct($bateria, $ligado) {
        $this->bateria = $bateria; /* máximo é 100 */
        $this->ligado = $ligado; /* true ou false*/
        $this->volume = $volume; /* máximo é 100 */
        $this->touch = $touch; /* true ou false */
    }
    
    /* Processos programados que recuperam dados privados */
    /* Estes só podem ser acessados pelos métodos da interface */
    function getBateria() {
        return $this->bateria;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getVolume() {
        return $this->volume;
    }

    function setBateria($bateria): void {
        $this->bateria = $bateria;
    }

    function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    function setVolume($volume): void {
        $this->volume = $volume;
    }
    function getTouch() {
        return $this->touch;
    }
    function setTouch($touch) {
        return $this->touch;
    }
    
    
    /* Processos da interface que o usuário manipula */
    /* Colamos aqui os processos da interface para depois descrever suas tarefas*/
    
    public function ligar_desligar(){
        if($this->getLigado() == true){
            echo "Desligando....</br>"; /* pois o botão de ligar e desligar é o mesmo*/
        }
        else if($this->getLigado() == false){
            echo "Ligando....</br>";
            $this->setLigado(true);
        }
    }

    public function aumentar_volume(){
        if($this->getLigado() == true && $this->getVolume() == 100){
            echo "Está no volume máximo.. </br>";
            }
        else if($this->getLigado() == true && $this->getVolume() < 100){
            $this->setVolume($this->getVolume() + 10);
            echo "O volume foi aumentado em 10 pts.. </br>";
        }
    }
    
    public function diminuir_volume(){
        if($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - 10);
            echo "O volume foi baixado em 10 pts.. </br>";
            }
        else if($this->getLigado() == true && $this->getVolume() == 0){
            echo "O valor de volume é nulo.. </br>";
        }
    }

    public function touch(){
       if($this->getLigado() == true){
           $this->setTouch(true);
           echo "Sistema touch está mapeando a movimentação...</br>";  
       }
    }

    
    
    

    
    
    
    
 

}
