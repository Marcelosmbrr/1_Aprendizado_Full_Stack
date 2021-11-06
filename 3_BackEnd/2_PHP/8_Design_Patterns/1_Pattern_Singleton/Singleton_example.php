<?php

    // O padrão Singleton serve para evitar instâncias múltiplas - se já houver uma, ela é utilizada
    // Na prática, uma classe intermediária é criada para retornar a instância de outra
    // Essa classe intermediária verifica se já existe uma instância; se não existir, cria e retorna, e se existir apenas retorna
    class Singleton{

        //Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a classe
        //https://www.php.net/manual/pt_BR/language.oop5.static.php
        // Esse atributo recebe a instância da classe PDO
        private static $instance;

        public static function ConnectionCreator(){

            //$this é diferente de self //https://pt.stackoverflow.com/questions/575/quando-usar-self-vs-this-em-php
            // Se o atributo não tiver sido inicializado...
            if(!isset(self::$instance)){
                
                // ...A classe PDO ainda não foi instânciada
                try{

                    // A instância do PDO é realizada, e atribuída ao atributo, que se torna um objeto PDO - o que configura também a inicialização dele
                    // O atributo é retornado
                    return self::$instance = new PDO("mysql:host=localhost;dbname=db_name", "root", "root");
                }
                catch(PDOException $e){
                    echo "Erro com o banco de dados:" .$e->getMessage();
                    echo "Código de erro: " .$e->getCode();
                }
                catch(PDOException $e){
                    echo "Erro genérico:" .$e->getMessage();
                    echo "Código de erro: " .$e->getCode();
                } 
            
            // Se o atributo tiver um valor, existir, ou tiver sido inicializado..
            }else{ 

                // ...Ele é apenas retornado
                return self::$instance;
            }
        }
    }

?>