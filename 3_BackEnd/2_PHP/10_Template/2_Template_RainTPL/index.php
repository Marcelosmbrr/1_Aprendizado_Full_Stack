<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

// Variável de configuração do RainTPL
$config = array(
    "tpl_dir"       => "template/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

$t = new Tpl;

$t->assign('titulo','Hello!');
$t->assign('paragrafo','Teste com RainTPL');
$t->draw("index");

