<?php

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=crud_modelo", "root", "root");
    }
    catch(PDOException $e){
        echo "Erro com o banco de dados:" .$e->getMessage();
        echo "Código de erro: " .$e->getCode();
    }
    catch(PDOException $e){
        echo "Erro genérico:" .$e->getMessage();
        echo "Código de erro: " .$e->getCode();
    }

?>