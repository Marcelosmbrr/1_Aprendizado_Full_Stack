<?php

class Lutador_classe {
    
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    function Lutador_classe($no, $na, $id, $al, $pes, $cat, $vit, $der, $empt) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pes;
        $this->categorias = $cat;
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empates = $empt;
    }
    
    
    /* Métodos primários, de modificação direta dos atributos */
    function getNome(){
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }
    function getEmpates(){
        return $this->empates;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function setPeso($peso): void { /* Mudamos o valor do atributo peso, e em seguida a categoria */
        $this->peso = $peso;
        if($this->getPeso() < 60){
            $this->setCategoria("Inválido");
        }
        if($this->getPeso() >= 60 && $this->getPeso() < 75){
            $this->setCategoria("Leve");
        }
        else if($this->getPeso() > 75 && $this->getPeso() <= 80){
            $this->setCategoria("Médio");
        }
        else if($this->getPeso() > 80 && $this->getPeso() <= 120){
            $this->setCategoria("Pesado");
        }
        else if($this->getPeso() > 120){
            $this->setCategoria("Inválido");
        }
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    
    function setEmpates($empate){
        $this->empates = $empate;
    }
    
    
    /* Métodos secundários */
    function apresentar(){
        echo "<p>Nome: {$this->nome}</p>";
        echo "<p>Nacionalidade: {$this->nacionalidade} </p>";
        echo "<p>Idade: {$this->idade} </p>";
        echo "<p>Altura: {$this->altura} </p>";
        echo "<p>Peso: {$this->peso} </p>";
        echo "<p>Categoria: {$this->categoria} </p>";
        echo "<p>Vitórias: {$this->vitorias}</p>";
        echo "<p>Derrotas: {$this->derrotas}</p>";
        echo "<p>Empates: {$this->empates}</p>"; 
         
    }
    
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
        
            
            
            
            
            
            
            
            
            
            
            
            
            
    
    
}
