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
    private $tableData;

    public function __construct(string $pageFile, string $layoutFile){
        $this->model = new Person();
        
        $this->pageFile = $pageFile;
        $this->layoutFile = $layoutFile;
        $this->tableData = $this->getPageData();
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

    private function getPageData(){

        $ret = $this->model->loadAllPersonsRecords();
        
        $tableData = $this->constructTable($ret["data"]);

        return $tableData;
        
    }

    private function constructTable($records){

        $table = "";

        foreach($records as $key => $value){

            $table .= "<tr>
                <th scope='row'>{$records[$key]['id']}</th>
                <td>{$records[$key]['email']}</td>
                <td>{$records[$key]['username']}</td>
                <td><button>Editar</button><button>Excluir</button></td>
            </tr>";
            
        }

        return $table;

    }

    
}