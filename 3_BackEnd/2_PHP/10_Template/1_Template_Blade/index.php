<?php

require_once("vendor/autoload.php");

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

// Teste de rotas
switch($_SERVER['REQUEST_URI']){

    // Carrega home.blade.php // Na view: variável desc => valor
    case "/":
        echo $blade->make('home', ['desc' => "Essa é a página home"])->render();
    break;
    
    // Carrega contato.blade.php // Na view: variável desc => valor
    case "/contato":
        echo $blade->make('contato', ['desc' => "Essa é a página contato"])->render();
    break;
    
    // Carrega nf.blade.php // Na view: variável desc => valor
    default:
        echo $blade->make('nf', ['desc' => "Essa é a página error 404"])->render();
    break;
}

