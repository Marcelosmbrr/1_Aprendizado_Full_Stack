<?php

/*

==================== CONTROLADOR DO SISTEMA INTERNO ====================

- Esse controlador serve para controlar o sistema interno 
- Ele recebe a rota atual, e renderiza as suas Views adequadas - que é o Layout padrão e o conteúdo da página
- Ele se comunica com o Model para preencher nutrir essas Views com os dados necessários

*/

namespace App\Controllers;
use App\Models\Person;

class renderController{

    private object $model;
    private string $pageFile;
    private string $layoutFile;

    public function __construct(string $pageFile, string $layoutFile){
        $this->model = new Person();
        
        $this->pageFile = $pageFile;
        $this->layoutFile = $layoutFile;
    }

    public function processRequest(){

        $this->renderRouteLayout();  
        
    }

    private function renderRouteLayout(){

        require_once($_SERVER["DOCUMENT_ROOT"]."/../App/Views/".$this->layoutFile."Layout.phtml");

    }

    public function renderPageContent(){

        require_once($_SERVER["DOCUMENT_ROOT"]."/../App/Views/pages/".$this->pageFile.".phtml");

    }

    
}