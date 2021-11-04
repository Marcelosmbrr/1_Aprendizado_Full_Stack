<?php

// ESSE ARQUIVO POSSUI A CONFIGURAÇÃO DAS ACTIONS

namespace App\Controllers;

use MF\Controller\Action;
use App\Models\Product;

class indexController extends Action{

    // Action "index" da rota "/"
    // Instância ocorre no Bootstrap.php
    public function index(){

        $modelProduct = new Product();

        $where = null;
        $order = null;
        $limit = null;

        $ret = $modelProduct->getProducts($where, $order, $limit);

        // StdClass do Action.php
        $this->viewData->dbMessage = $ret["message"];
        $this->viewData->dbData = $ret["data"];

        // Chama o método de renderização
        // O parâmetro indica a view a ser renderizada, e o layout a ser utilizado
        $this->render("index", "layout");

    }

    // Action "aboutUs" da rota "/aboutUs"
    // Instância ocorre no Bootstrap.php
    public function aboutUs(){

        //Dados variáveis

        // Chama o método de renderização
        // O parâmetro indica a view a ser renderizada, e o layout a ser utilizado
        $this->render("aboutUs", "layout");

    }

}