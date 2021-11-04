<?php

// ==== COMO UTILIZAR AS CLASSES MAPEADAS ==== //

// Require de todas as dependências e classes mapeadas
require ("vendor/autoload.php");

// Acesso aos recursos das classes
// A síntaxe é: use [namespace utilizado na classe]\[nome da classe]
// Opcionalmente pode ser utilizado um alias para instanciar a classe. A síntaxe se torna: use [namespace utilizado na classe]\[nome da classe] as [apelido]

use Classes\Controller\exampleController as Controller; //Uso do alias "Controller"
use Classes\Model\exampleModel; // Sem uso de alias

$controller = new Controller(); //Instância utilizando o alias
$model = new exampleModel(); // Instância sem alias - pelo nome da classe

$controller->printData();
$model->printData();

// ==== COMO UTILIZAR AS DEPENDÊNCIAS EXTERNAS MAPEADAS ==== //

// A documentação da dependência externa sempre informa a organização do "use" para acesso ao recurso
// A lógica é a mesma do uso das classes internas, mas neste caso são classes externas, criadas por outros desenvolvedores
use Cocur\Slugify\Slugify;

// Essa classe converte uma string em um slug
// Veja aqui: https://packagist.org/packages/cocur/slugify
$slugify = new Slugify();
echo $slugify->slugify('Hello World!'); // Hello-World

















?>