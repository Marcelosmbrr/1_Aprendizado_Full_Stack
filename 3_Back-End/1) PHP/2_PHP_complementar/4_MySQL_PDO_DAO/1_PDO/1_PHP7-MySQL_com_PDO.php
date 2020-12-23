<?php
    
    $username = "root";
    $pass = '';
    
    //$conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
    $conn = new PDO('mysql:host=localhost;dbname=dbphp7', $username, $pass);
    
    //PDO :: prepare - Prepara uma instrução SQL para execução no banco, e retorna um objeto de instrução
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");
    
    //Executa a instrução preparada
    $stmt->execute();
    
    //Existe o fetch e o fetchAll, que retornam, ambos, dados do banco em forma de estruturas
    //O fetch retorna uma unica row da consulta, em forma de vetor, o que é ideal para poder utilizar em consultas como login, que retorna somente um resultado
    //o fetchAll retorna um array com todas as linhas da consulta, ideal para uma busca por nome ou por endereço
    //PDO::FETCH_ASSOC é o estilo do dado retornado - um array associativo
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //Ler linha/vetor do array $results
    foreach($results as $row){
        //A dada linha/vetor do array possui índices ($key), sendo cada um campo cada um, e cujo valor é contido é $value
        foreach($row as $key => $value){
            //Imprimir o valor contido em cada índice da linha
            echo "<strong>". $key . ":</strong>" . $value . "</br>";
        }

        echo "===============================================<br>";
    }
   
    
   
    
    //$conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
    $conn = new PDO('mysql:host=localhost;dbname=dbphp7', $username, $pass);
    
    //PDO :: prepare - Prepara uma instrução SQL para execução no banco, e retorna um objeto de instrução
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");
    
    //Executa a instrução preparada
    $stmt->execute();
    



    $username = "root";
    $pass = '';
    
    $conn = new PDO('mysql:host=localhost;dbname=dbphp7', $username, $pass);
    
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");
    
    $stmt->execute();
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);