<?php

require("ConnectionCreator.php");

class Model{

    private PDO $pdo;

    public function __construct(){

        // A melhor prática seria armazenar esses dados em um arquivo .env, ao invés de deixa-los expostos no código
        // Veja aqui: https://www.youtube.com/watch?v=rhI4Jy7T_SY
        $this->pdo = ConnectionCreator::createConnection(array("mysql", $_SERVER["SERVER_NAME"], "db_pdo_example", "root", "root"));

    }

    public function getData() :array {

        $query = "SELECT * FROM example";

        // Inicia uma transação
        $this->pdo->beginTransaction();

        // Prepara uma instrução para execução e retorna a declaração da instrução
        // Statment é um PDOStatment
        $statment = $this->pdo->prepare($query);

        // Se a execução por si só for realizada com sucesso
        if($statment->execute()){

            // Se a quantidade de linhas afetadas for maior do que zero
            if($statment->rowCount() > 0){

                // A transação é confirmada 
                $this->pdo->Commit();

                // FetchAll() agrupa e retorna várias linhas de uma única vez
                // O Fetch() retorna apenas uma linha por vez
                // O modo do Fetch, neste caso FETCH_ASSOC, cria um array associativo dos dados
                $data = $statment->fetchAll(PDO::FETCH_ASSOC);

                // Retornar a estrutura 
                return array("status"=>true, "data"=>$data);

            }else{

                // A transação é cancelada
                $this->pdo->rollback();

                // Se a quantidade de linhas não for maior do que zero
                // Não existem dados na tabela
                return array("status"=>false);
    
            }
            
        }
    }

    public function setData(array $data){

        // Os valores de uma query PDO são marcas
        // A síntaxe de uma marca é :nome
        $query = "INSERT INTO example(id, string, decimal, integer, date) VALUES (DEFAULT, :string, :decimal, :integer, :date)";

        // Inicia uma transação
        $this->pdo->beginTransaction();

        // Prepara uma instrução para execução e retorna a declaração da instrução
        // Statment é um PDOStatment
        $statment = $this->pdo->prepare($query);

        // Essa função, bindParam, serve para vincular uma marca e uma variável - o endereço dela
        $statment->bindParam(":string", $data["string_value"]);
        $statment->bindParam(":decimal", $data["decimal_value"]);
        $statment->bindParam(":date", $data["actual_date"]);

        // Essa função, bindValue, serve para vincular uma marca e uma cópia de um valor em si
        $statment->bindValue(":integer", 500);

        // Se a inserção for realizada com sucesso
        if($statment->execute()){

            // A transação é confirmada 
            $this->pdo->Commit();

            // No caso do insert com status true, é enviado ainda o valor do último ID inserido
            // Uma informação útil para, por exemplo, um sistema de logs
            return array("status"=> true, "last_ID"=>$this->pdo->lastInsertId()); 

        }else{

            // A transação é cancelada
            $this->pdo->rollback();
            return array("status"=>false);
        }

    }

}






