<?php

    header('Content-Type: application/json');

    //PRIMEIRO FILTRO
    $nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $comment = filter_input(INPUT_POST, "comentario", FILTER_SANITIZE_STRING);

    //SEGUNDO FILTRO //PARA IMPEDIR XSS
    //O "f" no final denota que foram "filtrados"
    $nomef = strip_tags($nome);
    $commentf = strip_tags($comment);

    $pdo = new PDO("mysql:host=localhost;dbname=ajax_php", "root", "root");

    $stmt = $pdo->prepare('INSERT INTO usuarios VALUES (DEFAULT, :nome, :comentario)');

    $stmt->bindParam(":nome", $nomef);
    $stmt->bindParam(":comentario", $commentf);
    $stmt->execute();

    if($stmt->rowCount() >= 1){

        echo json_encode("JSON Response: Dados salvos com sucesso");
        
    }else{

        echo json_encode("JSON Response: Falha ao inserir dados no banco");
        
    }

?>