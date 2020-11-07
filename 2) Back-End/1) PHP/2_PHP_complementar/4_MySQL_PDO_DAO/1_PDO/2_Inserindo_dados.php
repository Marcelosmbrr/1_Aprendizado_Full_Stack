<?php
    
    $username = 'root';
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbphp7';
    
    $conn = new PDO($dsn, $username, $password);
    
    //Poderíamos inserir os valores já, mas vamos usar identificadores
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(:LOGIN, :PASSWORD)");
    
    $login = "Mario Rogers";
    $pass = "cogumelo1010";
    
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $pass);
    
    $stmt->execute();
    
    echo "Dados inseridos!";
    
   
    
    

