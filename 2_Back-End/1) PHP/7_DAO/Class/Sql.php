<?php

    //Essa classe é acessível por esse namespace
    namespace Classes;

    //ESTA É A CLASSE INTERMEDIÁRIA PARA ACESSO AOS DADOS
    //É NESTE ARQUIVO QUE OS DADOS SÃO MANIPULADOS DIRETAMENTE NO BANCO, POIS EXTENDE A PDO, QUE É NATIVA DO PHP

    class Sql extends PDO{

        private $conn; 

        public function __construct(){

            $this->conn = new PDO("mysql:host=localhost;dbname=dao_teste", "root", "root");

        }

        ////////////////////////MÉTODOS QUE RECEBEM E PROCESSAM AS QUERIES CRUD/////////////////////////
        //Estes métodos recebem a query, seja qual for, e a processam

        private function setParametros($statment, $parametros){

            foreach($parametros as $chave => $valor){

                $this->conn->setParametro($chave, $valor, $statment);

            }

        }

        private function setParametro($chave, $valor, $statment){

            $statment->bindParam($chave, $valor);

        }

        //O processamento começa a partir deste método, que recebe o SQL e os parâmetros, que são as especificações da Query
        //Os parâmetros podem ser vários, ou um só, e por isso deve ser um array
        private function queryInit($rawQuery, $parametros = array()){

            $stmt = $this->conn->prepare($rawQuery);

            $this->conn->setParametros($stmt, $parametros);

            return $stmt->execute();

        }

        ////////////////////////MÉTODOS PARA RECUPERAR AS QUERIES CRUD//////////////////////////////////////////
        //Este métodos servem para repassar a query para o processamento
        //Eles não são chamados diretamente pelo usuário, mas pelos métodos das Classes de mais alto nível que porfim são 

        /////MÉTODO SELECT/////
        //Este método é chamado de forma direta pela classe de Usuário
        public function select($rawQuery, $parametros = array()){

            $stmt = $this->queryInit($rawQuery, $parametros);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }













    }






















?>