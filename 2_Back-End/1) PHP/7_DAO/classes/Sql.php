<?php

    namespace Classes;
    use PDO;

    class Sql extends PDO{

        private $conn;

        //Método mágico de construção
        public function __construct(){

            $this->conn = new PDO("mysql:host=localhost;dbname=dao_teste", "root", "root");

        }

        public function queryInit($query, $params = array()){

            $statment = $this->conn->prepare($query);

            foreach($params as $chave => $valor){

                $this->setParams($chave, $valor, $statment);

            }

            //Retorna os dados em forma de array associativo, sendo um ou vários registros
            if($statment->execute()){

                if($statment->rowCount() > 0){

                    //Retorna um array associativo dos dados
                    $data = $statment->fetchAll(PDO::FETCH_ASSOC);
                    return $data;

                }

            }else{

                return false;

            }
        }

        public function setParams($chave, $valor, $statment){

            $statment->bindParam($chave, $valor);
            
        }

        public function select($query, $params = array()){

            $exec_return = $this->queryInit($query, $params);

            if($exec_return){

                //Retorna o array associativo dos dados
                return $exec_return;

            }else{

                return false;

            }

        }

    }

?>