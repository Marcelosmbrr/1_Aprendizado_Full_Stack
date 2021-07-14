<?php
    
require_once 'Pessoa.php';
require_once 'Interface_livro.php';


class Livro implements Interface_livro { /* Interface_livro = "Publicação" do diagrama*/
    
    private $titulo;
    private $autor;
    private $total_paginas;
    private $pag_atual;
    private $aberto;
    private $leitor;
    
    public function detalhes(){
        echo "<p>O título do livro é {$this->titulo}.</p>";
        echo "<p>O autor do livro é {$this->autor}.</p>";
        echo "<p>O total de páginas do livro é de {$this->total_paginas}.</p>";
        echo "<p>{$this->leitor} está na página {$this->pag_atual}.</p>"; 
    }
    
    /* Definição inicial dos valores dos atributos do objeto */
    function Livro($titulo, $autor, $totalpag, $pag_atual, $aberto, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->total_paginas = $totalpag;
        $this->pag_atual = $pag_atual;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }
    
    /* Métodos secundários, Getters e Setters*/
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotal_paginas() {
        return $this->total_paginas;
    }

    function getPag_atual() {
        return $this->pag_atual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setAutor($autor): void {
        $this->autor = $autor;
    }

    function setTotal_paginas($total_paginas): void {
        $this->total_paginas = $total_paginas;
    }

    function setPag_atual($pag_atual): void {
        $this->pag_atual = $pag_atual;
    }

    function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    
    
    /* Métodos Terciários, da Interface */
    function abrir() {
        $this->aberto = true;
    }
    
    function fechar() {
       $this->aberto = false;
    }
    
    function avançar_pagina() {
        if($this->pag_atual == $this->total_paginas){
            echo "<p> Não há como avançar qualquer página, dado o fato de que está na última.</p>";
        }
        else{
        $this->pag_atual ++;
        }
    }
    function voltar_pagina() {
        if($this->pag_atual == 0){
            echo "<p> Não há como voltar qualquer página, dado o fato de que sequer está na primeira.</p>";
        }else{
        $this->pag_atual --;
        }
    }
    function folhear() {
        $this->setPag_atual(random(0, $this->getTotal_paginas())); /* número aleatório entre 0 e o número total de páginas*/
        }
    }


    