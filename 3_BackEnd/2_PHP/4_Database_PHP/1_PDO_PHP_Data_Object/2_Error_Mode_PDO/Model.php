<?php

require("ConnectionCreator.php");

use PDO;

class Model{

    private PDO $pdo;

    public function __construct(){

        $this->pdo = ConnectionCreator::createConnection(array("mysql", "localhost", "db_pdo_example", "root", "root"));

    }

    public function getData() :array {

        // Exemplo de erro
        $query = "SELECT * FROM tabela_errada";

        try{

            $this->pdo->beginTransaction();

            $statment = $this->pdo->prepare($query);

            // Com PDOException esse if se torna opcional
            // Porque se falhar, o código "salta" para tratamento do Catch()
            if($statment->execute()){

                if($statment->rowCount() > 0){

                    $this->pdo->Commit();

                    $data = $statment->fetchAll(PDO::FETCH_ASSOC);

                    return array("status"=>true, "data"=>$data);

                }else{

                    $this->pdo->rollback();

                    return array("status"=>false);
    
                }
            }

        }catch(\PDOException $e){

            // PDOException
            // Tratamentos: https://www.php.net/manual/pt_BR/class.pdoexception.php

            // O erro é impresso como mensagem
            echo $e->getMessage();

            // É informada a linha do erro
            echo $e->getLine();

            // A transação é cancelada
            $this->pdo->rollBack();

        }

    }

}






