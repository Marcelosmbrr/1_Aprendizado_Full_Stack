<?php

    //O objeto PDO criado neste arquivo, será utilizado em outros, a partir de um require (ou require_once)

    try{

        $conexao = new PDO("mysql:host={$host};dbname={$db_nome}", "{$root}", "{$pass}");

    }

    catch(PDOException $e){
        echo "Erro com o banco de dados:" .$e->getMessage();
        echo "Código de erro: " .$e->getCode();
    }

    catch(Exception $e){
        echo "Erro genérico:" .$e->getMessage();
        echo "Código de erro: " .$e->getCode();
    }








?>