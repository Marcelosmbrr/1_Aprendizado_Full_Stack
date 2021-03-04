<?php

    class Conexao{

        //Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a classe
        //https://www.php.net/manual/pt_BR/language.oop5.static.php
        private static $instance;

        public static function getConn(){

            //$this é diferente de self //https://pt.stackoverflow.com/questions/575/quando-usar-self-vs-this-em-php
            //Quando não existir uma instância
            if(!isset(self::$instance)){
                
                //É criada uma
                try{
                    self::$instance = new PDO("mysql:host=localhost;dbname=db_name", "root", "root");
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
                return self::$instance;
            }
        }
    }

?>