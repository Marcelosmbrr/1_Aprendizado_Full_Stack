<?php
    
    $username = 'root';
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbphp7';
    
    $conn = new PDO($dsn, $username, $password);
    
    //Poderíamos inserir os valores já, mas vamos usar identificadores
    $stmt = $conn->prepare("UPDATE `tb_usuarios` SET `des_login`= :LOGIN,`des_senha`= :PASSWORD WHERE `id_usuario`= :ID");
    
    $login = "Stephen Hawking";
    $pass = "blackholes";
    $id = 2;
    
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $pass);
    $stmt->bindParam(":ID", $id);
    
    $stmt->execute();
    
    echo "Dados alterados!";
    
   
    
    

