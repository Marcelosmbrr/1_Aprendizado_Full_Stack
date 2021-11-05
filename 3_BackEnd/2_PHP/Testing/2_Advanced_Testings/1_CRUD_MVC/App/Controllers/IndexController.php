<?php

// ESSE ARQUIVO POSSUI A CONFIGURAÇÃO DAS ACTIONS

namespace App\Controllers;

use Core\Controller\Action;
use App\Models\Product;

class IndexController extends Action{

    // Action "index" da rota "/"
    // Instância ocorre no Bootstrap.php
    public function login(){

        // Chama o método de renderização
        // O parâmetro indica a view a ser renderizada, e o layout a ser utilizado
        $this->render("login", "outsideLayout");
    }

    // Action "index" da rota "/registration"
    // Instância ocorre no Bootstrap.php
    public function registration(){

        // Chama o método de renderização
        // O parâmetro indica a view a ser renderizada, e o layout a ser utilizado
        $this->render("registration", "outsideLayout");
    }

    // Action "index" da rota "/system/dashboard"
    // Instância ocorre no Bootstrap.php
    public function dashboard(){

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
        $this->render("dashboard", "insideLayout");

    }

    // Action "newproduct" da rota "/system/newproduct"
    // Instância ocorre no Bootstrap.php
    public function newproduct(){

        //Dados variáveis

        // Chama o método de renderização
        // O parâmetro indica a view a ser renderizada, e o layout a ser utilizado
        $this->render("newproduct", "insideLayout");

    }

}