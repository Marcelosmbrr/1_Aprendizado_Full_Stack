<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* Cada objeto é estruturado segundo elementos que compõem uma "classe" */
        /* Estes elementos são os atributos, métodos e estado do objeto */
        /* Canetas diferentes, por exemplo, poderiam ser objetos definidos pela classe caneta */
        /* Seriam diferentes porque seus atributos teriam valores diferentes */
        /* Já os "métodos", seriam como tarefas que esses objetos podem desempenhar, e que no código são escritas como funções */
        /* Por último, o "estado", seria a expressão do objeto; (i) como é em si, e (ii) como está em dado momento */
        
        echo "Primeiros passos com classes e objetos </br>";
        require_once 'Caneta.php'; /* Conectamos ao arquivo caneta.php, que contém a classe "Caneta" */ /* Ver include, include_once, require e require_once */
        
        /* Abaixo criamos um objeto da classe "Caneta" e definimos os valores dos seus atributos*/
        $caneta1 = new caneta;
        $caneta1->modelo = "BIC";
        $caneta1->cor = "Azul";
        $caneta1->ponta = 0.5;
        $caneta1->tampada = false;
        
        /* Imprimimos o objeto em forma de array, com print_r */
        print_r($caneta1);
        
        /* Chamamos os métodos/funções da classe do objeto, que é "Caneta"*/
        $caneta1->rabiscar();
        $caneta1->tampar();
        $caneta1->rabiscar();
        $caneta1->destampar();
        ?>
    </body>
</html>