<?php

/*

==== PADRÃO DEPENDENCY INJECTION ====

- Esse padrão serve para flexibilizar as dependências das classes, e torna-las mais reaproveitáveis
- Neste caso foi utilizado um modelo com o padrão DAO
- Sua dependência é a instância da classe PDO, mas que, ao invés de criada no __construct(), é recebida

*/

    use PDO;
    
    class DAOSql extends PDO{

        private PDO $conn;

        public function __construct(PDO $connection){

            $this->conn = $connection;

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