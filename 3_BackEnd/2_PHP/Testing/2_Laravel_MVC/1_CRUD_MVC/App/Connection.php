<?php  

    // CONEXÃO COM O BANCO DE DADOS - RETORNA UM OBJETO PDO
    // PADRÃO SINGLETON
    
    namespace App;
    use PDO;

    class Connection{

        //Serve para a condicional
        private static $connection;

        private function __construct(){}

        public static function getConnection(){

            //$this e self //https://pt.stackoverflow.com/questions/575/quando-usar-self-vs-this-em-php
            //Quando não existir uma instância
            if(!isset(self::$connection)){
                
                //É criada uma
                try{

                     self::$connection = new PDO("mysql:host=localhost;dbname=miniframework_mvc", "root", "");
                     return self::$connection;
                    
                }
                catch(PDOException $e){
                    echo "Erro com o banco de dados:" .$e->getMessage();
                    echo "Código de erro: " .$e->getCode();
                }
                catch(PDOException $e){
                    echo "Erro genérico:" .$e->getMessage();
                    echo "Código de erro: " .$e->getCode();
                } 

            }else{ 
                 //Se existir, a mesma é retornada
                return self::$connection;
            }
        }
        
    }

?>