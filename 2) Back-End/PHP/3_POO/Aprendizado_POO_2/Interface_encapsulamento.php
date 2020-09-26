<?php

interface Interface_encapsulamento {
    
    /* Métodos de interface que conversam com o usuário*/
    
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
    
}
