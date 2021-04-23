<?php

    header('Content-Type: application/json');

    $pdo = new PDO("mysql:host=localhost;dbname=ajax_php", "root", "root");

    $stmt = $pdo->prepare('SELECT * FROM usuarios');

    $stmt->execute();

    if($stmt->rowCount() > 0){

        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        
    }else{

        echo json_encode(false);
        
    }

    













?>