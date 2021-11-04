<?php


// Classe para criar e retornar a conexão
// Se o PDO já existir, ele é retornado
// Se não existir uma instância do PDO, ela é criada e retornada
class ConnectionCreator{

    // Atributo estático
    private static $instance;

    // Método estático
    public static function createConnection(array $data){

        // Se o atributo da classe não tiver sido inicializado
        if(!isset(self::$instance)){

            // É criada uma instância do PDO, e retornada
            try{

                return self::$instance = new PDO("{$data[0]}:host={$data[1]};dbname={$data[2]}", "{$data[3]}", "{$data[4]}");

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
            // Se já tiver sido inicializado, só é retornado

            return self::$instance;
        }
    
    }

}
?>