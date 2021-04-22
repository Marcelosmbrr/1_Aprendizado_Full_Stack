<?php

    require_once("index.php");

    class DBArquivo{

        private $conn;

        function conectar(){

            try{
                $this->conn = new PDO("mysql:host=localhost;dbname=upload_teste", "root", "root");
            }

            catch(PDOException $e){
                echo "Erro com o banco de dados:" .$e->getMessage();
                echo "Código de erro: " .$e->getCode();
            }
        
            catch(Exception $e){
                echo "Erro genérico:" .$e->getMessage();
                echo "Código de erro: " .$e->getCode();
            }

        }

        //Essa função serve para enviar o arquivo para o banco de dados 
        //Ela recebe um sql de inserção e o executa
        public function set_arquivo($sql){

            $stmt = $this->conn->prepare($sql);

            //Por ser um INSERT, não há estrutura para ser retornada
            //Enviamos apenas um true, para caso de sucesso de execução, e um false, para caso de falha
            if($stmt->execute()){
                return true;
                }
            else{
                return false;  
            }  


        }














    }














?>