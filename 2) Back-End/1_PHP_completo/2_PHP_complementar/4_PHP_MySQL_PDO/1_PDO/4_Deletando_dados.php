<?php
    
    $username = 'root';
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbphp7';
    
    $conn = new PDO($dsn, $username, $password);
    
    //Poderíamos inserir os valores já, mas vamos usar identificadores
    $stmt = $conn->prepare("DELETE FROM `tb_usuarios` WHERE id_usuario = :ID");
    
    $id = 1;
    
    $stmt->bindParam(":ID", $id);
    
    $stmt->execute();
    
    echo "Dados deletados!";
    
   
    
    

