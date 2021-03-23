<?php

    //Esta classe contém os métodos propriamente ditos do que seria a idealizada classe "SQL", que processaria as queries
    //A Classe SQL_instance serve para retornar instâncias desta, seguindo o padrão SINGLETON

    namespace Classes;
    use Classes\Conexao_instance;
    use PDO;

    class Sql_DAO{

        //Para diferenciar os retornos a variável "query_type" será usada
        //Isso é necessário porque esse algoritmo trabalha de forma igual todas as queries
        private function queryInit($query_type, $query, $params = array()){

            //Conexao_instance::getConn() retorna a instância da classe PDO gerada pela classe Conexao_instance
            $instância_pdo = Conexao_instance::getInstance();

            $statment = $instância_pdo->prepare($query);

            if($params != null){

                foreach($params as $chave => $valor){

                    $this->setParams($chave, $valor, $statment);
    
                }

            } 
            
            //Se for um select, irá retornar um array associativo, se não, apenas irá retornar true
            //Surge a necessidade da variáveil "query type" aqui, como um outro referencial para o tratamento do retorno
            if($statment->execute()){

                if($statment->rowCount() > 0 && $query_type == "select"){

                    //Retorna um array associativo dos dados
                    $data = $statment->fetchAll(PDO::FETCH_ASSOC);
                    return $data;

                } else if($query_type == "create" || $query_type == "delete" || $query_type == "update") {

                    return true;

                }

            }else{

                return false;

            }
        }

        private function setParams($chave, $valor, $statment){

            $statment->bindParam($chave, $valor);
            
        }

        //////////////////////////////////////////////////////////////////////////////////////////////////

        public function select($query, $params = array()){

            $query_type = "select";
            
            $exec_return = $this->queryInit($query_type, $query, $params);

            if($exec_return){

                //Retorna o array associativo dos dados
                return $exec_return;

            }else{

                return false;

            }
        }   
    }

?>