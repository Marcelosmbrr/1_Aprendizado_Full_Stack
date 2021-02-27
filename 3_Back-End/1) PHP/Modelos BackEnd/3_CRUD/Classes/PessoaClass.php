<?php

    class Pessoa{

        private $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        function getPessoas(){

            $sql = "SELECT * FROM pessoas";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            //rowCount retorna o número de linhas afetadas pela instrução SQL
            if($stmt->rowCount() > 0){

                //Neste caso o rowCount é superior a 0
                //Significa que existem registros no banco de dados

                //FetchAll() retorna diversos registros
                $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }else{
                //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                return false;
            }
        }

        function setPessoa($nome, $telefone, $email){

            $sql = "INSERT INTO pessoas VALUES (DEFAULT, :nome, :telefone, :email)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":telefone", $telefone);
            $stmt->bindParam(":email", $email);
            if($stmt->execute()){

                //Com o INSERT realizado com sucesso, retornamos true
                return true;

            }else{ //Se o INSERT falhar

                return false;

            }

        }

        function deletePessoa($id){

            $sql = "DELETE FROM pessoas WHERE id = :id";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            if($stmt->execute()){

                //Com o DELETE realizado com sucesso, retornamos true
                return true;

            }else{ //Se o DELETE falhar

                return false;

            }

        }

        

    }

    
    

















?>