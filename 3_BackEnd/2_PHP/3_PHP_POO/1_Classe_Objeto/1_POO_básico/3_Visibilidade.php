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
        
        <pre> <!-- Tag de formatação -->
        <?php
        /* Visibilidade em POO é sobre as possibilidades de acesso aos elementos internos de uma classe */
        /* Tanto métodos, quanto atributos, podem ser públicos(+), privados(-) ou protegidos(#)*/
        /* Atributos e métodos públicos podem ser vistos e utilizados livremente */
        /* Atributos e métodos privados podem ser vistos e utilizados apenas pela sua classe, e ainda exigem formas especiais para qualquer uso externo */ 
        /* Atributos e métodos protedigos podem ser vistos e utilizados apenas pelas subclasses de sua classe - relação "child e parent" */
        
        require_once 'Caneta_visibilidade.php';
        $caneta2 = new Caneta_visibilidade();
        $caneta2->modelo = "Castel";
        $caneta2->cor = "Vermelha";
        print_r($caneta2);
        $caneta2->rabiscar(); /* Por ser público, este método pode ser chamado */
        $caneta2->tampar(); /* Podemos modificar o atributo "tampada", que é protegido, chamando o método público "tampar" */
        print_r($caneta2); /* O atributo protegido "tampada" mudará para "true" */
        
        ?>
        </pre>
    </body>
</html>