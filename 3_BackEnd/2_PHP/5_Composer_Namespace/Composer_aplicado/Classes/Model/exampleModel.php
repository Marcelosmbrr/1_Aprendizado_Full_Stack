<?php

// ==== SOBRE O PAPEL DO NAMESPACE E COMO UTILIZA-LO ==== //
/*

- Uso do namespace serve para que a classe seja localizada pelo autoloader
- Se o arquivo atual estiver em uma subpasta da pasta nomeada com o namespace no manifesto...
- O namespace deverá ser [namespace do manifesto]\[caminho até a pasta atual]

- Neste caso, no manifesto foi utilizado o namespace "Classes" para o local "Classes/", e esta classe está em "Classes/Model/"
- Assim, seu namespace será Classes\Model - sim, para o namespace se utiliza a barra invertida

*/

namespace Classes\Model;

class exampleModel{

    private int $value;

    public function __construct(){
        $this->value = 500;
    }

    public function printData(){
        echo "Model attribute is equal to: {$this->value}\n";
    }

}















?>