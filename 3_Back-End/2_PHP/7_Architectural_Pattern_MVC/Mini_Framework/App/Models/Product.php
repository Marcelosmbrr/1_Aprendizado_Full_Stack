<?php

namespace App\Models;
use MF\Model\Model;
use PDO;

class Product extends Model{

    public function getProducts($where, $order, $limit){

        $query = "SELECT `id`, `name`, `price` FROM `miniframework_mvc`.`tb_produtos` $where $order $limit";

        $this->pdo->beginTransaction();

        $statment = $this->pdo->prepare($query);

        if($statment->execute()){

            if($statment->rowCount() > 0){

                $data = $statment->fetchAll(PDO::FETCH_ASSOC); 

                $response = array("status"=> true, "data"=> $data, "message"=>"Foram encontrados {$statment->rowCount()} produtos cadastrados.");

                return $response;

            }else{

                $response = array("status"=> false, "data"=> null, "message"=>"Não existem produtos cadastrados.");

                return $response;

            }

        }else{

            $response = array("status"=> false, "data"=> null, "message"=>"A operação de pesquisa falhou.");

            return $response;

        }
    }
}