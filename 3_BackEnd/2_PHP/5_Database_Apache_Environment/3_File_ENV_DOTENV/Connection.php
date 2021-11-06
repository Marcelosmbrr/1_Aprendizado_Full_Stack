<?php

namespace Root;

class Connection{

    private static $instance;

    public static function createConnection(){

        if(!isset(self::$instance)){

            try{

                return self::$instance = new PDO("mysql:host=".getenv('HOST').";dbname=".getenv('DATABASE_NAME'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'));

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