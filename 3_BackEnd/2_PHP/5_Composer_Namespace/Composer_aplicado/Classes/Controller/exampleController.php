<?php

// ==== SOBRE O PAPEL DO NAMESPACE E COMO UTILIZA-LO ==== //
/*

- Uso do namespace serve para que a classe seja localizada pelo autoloader
- Se o arquivo atual estiver em uma subpasta da pasta nomeada com o namespace no manifesto...
- O namespace deverá ser [namespace do manifesto]\[caminho até a pasta atual]

- Neste caso, no manifesto foi utilizado o namespace "Classes" para o local "Classes/", e esta classe está em "Classes/Controller/"
- Assim, seu namespace será Classes\Controller - sim, para o namespace se utiliza a barra invertida

*/

namespace Classes\Controller;

class exampleController{

    private int $value;

    public function __construct(){
        $this->value = 1000;
    }

    public function printData(){
        echo "Controller attribute is equal to: {$this->value}\n";
    }

}