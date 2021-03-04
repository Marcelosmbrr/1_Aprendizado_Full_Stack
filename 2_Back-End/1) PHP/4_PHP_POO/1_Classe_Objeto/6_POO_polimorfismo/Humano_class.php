<?php

require_once 'Mamifero_class.php';

final class Humano_class extends Mamifero_class {
    
    private $nome;
    private $cor_pele;
    
    /*Construct*/
    function Humano_class($nome, $cor_pele) {
        $this->nome = $nome;
        $this->cor_pele = $cor_pele;
    }
    
    /*Métodos primários*/
    function falar(){
        if($this->nome == "Immanuel Kant"){
        echo "<p> Então emitiu os seguintes sons: Seria a metafísica uma ciência possível e capaz de realizar juízos sintéticos a priori? </p>"; 
        }
    }
    
    function emitir_som() {
        $this->falar();
    }

    function escrever(){
        
    }
    
    function locomover(){
        echo "<p> O ser humano passou a se movimentar...passo a passo...utilizando suas pernas...</p>";
    }
    
    /* Métodos Secundários*/
    function getNome() {
        return $this->nome;
    }

    function getCor_pele() {
        return $this->cor_pele;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setCor_pele($cor_pele): void {
        $this->cor_pele = $cor_pele;
    }
    
    


    

}
