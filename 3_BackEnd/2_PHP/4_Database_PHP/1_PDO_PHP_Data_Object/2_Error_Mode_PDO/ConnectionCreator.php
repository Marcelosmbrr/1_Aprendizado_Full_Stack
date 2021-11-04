<?php

class ConnectionCreator{

    private static $instance;

    public static function createConnection(array $data){

        if(!isset(self::$instance)){

            try{

                self::$instance = new PDO("{$data[0]}:host={$data[1]};dbname={$data[2]}", "{$data[3]}", "{$data[4]}");

                // Alteração do modo de tratamento de erro do PDO
                // Função setAttribute do PDO: https://www.php.net/manual/en/pdo.setattribute.php
                self::$instance->setAttribute(attribute:PDO::ATTR_ERRMODE, value:PDO::ERRMODE_EXCEPTION);

            }
            catch(PDOException $e){

                echo "Erro com o banco de dados:" .$e->getMessage();
                echo "Código de erro: " .$e->getCode();

            }
            catch(Exception $e){

                echo "Erro genérico:" .$e->getMessage();
                echo "Código de erro: " .$e->getCode();

            }
            
        }else{

            return self::$instance;
        }
    
    }

}
?>