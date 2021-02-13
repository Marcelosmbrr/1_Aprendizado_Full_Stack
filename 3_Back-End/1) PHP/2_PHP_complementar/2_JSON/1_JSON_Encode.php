<?php

   //JSON  (JavaScript Object Notation - Notação de Objetos JavaScript) é uma formatação leve de troca de dados. 
   //Para seres humanos, é fácil de ler e escrever. Para máquinas, é fácil de interpretar e gerar. Seu objetivo-mor é a interoperabilidade de sistemas
   //É utilizado no desenvolvimento de API's e Webservices

    $pessoas = array();
    
    array_push($pessoas, array(
        'nome'=> "Joao",
        'idade'=> 18
    ));
    
    //Transformamos o array $pessoas em JSON e o atribuímos a variável $arquivo_json
    $arquivo_json = json_encode($pessoas);
    echo $arquivo_json;
    
   

    
    
    
    
