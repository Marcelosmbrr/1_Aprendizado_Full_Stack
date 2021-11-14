<?php

// CONTROLADOR "CORE"
// REUTILIZAÇÃO PARA ARQUIVOS CONTROLLER - SERVE PARA EXECUTAR AS ACTIONS
// A CLASSE ABSTRATA É "INICIALIZADA" QUANDO É HERDADA

namespace MF\Controller;

use stdClass;

abstract class Action {

    protected $viewData;

    // O construtor cria um objeto vazio // É construído dinâmicamente
    // stdClass: https://www.php.net/manual/pt_BR/reserved.classes.php
    public function __construct(){

        $this->viewData = new stdClass();

    }

    // Renderização dinâmica das Views 
    protected function render($view, $layout){

        // A variável $view recebe o nome da view a ser carregada
        // Esse dado é enviado das actions do controlador
        // Ex: a action index() envia "index" como valor

        // A variável $layout recebe o nome do layout a ser utilizado na página
        // Esse dado é enviado das actions do controlador

        $this->viewData->page = $view;

        // Em layout.phtml o método content é chamado
        require_once("../App/Views/". $layout .".phtml");
        
    }

    protected function setLayoutContent(){

        // A variável $actualClass serve para definir a pasta onde estão as Views adequadas
        // O primeiro nome do controlador de uma rota é usado na pasta que contém as suas Views 
        // Ex: indexController possui actions que renderizam determinadas Views, certo? Essas views estarão na pasta index da camada Views (Views/index)
        // Então se a rota for outra, o controlador será outro, e as actions irão procurar em outra pasta da camada Views (Views/[primeiro nome do controlador])

        $actualClass = get_class($this);
        $actualClass = str_replace("App\\Controllers\\", "", $actualClass); // Recuperar string "indexController"
        $actualClass = str_replace("Controller", "", $actualClass); // Tornar "indexController" apenas "index"

        // Require dinâmico da View
        require_once("../App/Views/". $actualClass ."/". $this->viewData->page .".phtml");

    }

}