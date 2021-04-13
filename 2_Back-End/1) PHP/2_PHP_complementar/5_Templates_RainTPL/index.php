<?php

    require_once("vendor/autoload.php");

    //Namespace
    use Rain\Tpl;

    // Config
    $config = array(
        "tpl_dir"       => "template/", //Pasta onde está o Template base
        "cache_dir"     => "cache/" //Pasta onde está o Template cacheado
    );

    //Atribuição das configurações acima, de localização da pasta de Templates e de cache
    Tpl::configure( $config );

    // Add PathReplace plugin (necessary to load the CSS with path replace)
    Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

    // Instanciar o objeto TPL
    $tpl = new Tpl;

    // Criação de variáveis para uso no Template //Primeiro parâmetro é a variável, e o segundo o seu valor
    $tpl->assign( "titulo", "Aprendendo o uso de templates" );
    $tpl->assign( "texto", "Templates servem para isolar o código PHP do HTML" );

    // Criação de arrays para uso no Template
    //$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

    //Aplicar as definições acima em que Template? No index.html, existente na pasta definida (templates/)
    $tpl->draw( "index.tpl" ); //Poderia ser HTML, e de fato, por padrão, seria


?>