<?php

    class Clientes{

        private $conexao;

        //O construtor é a instanciação do objeto PDO
        function __construct($host, $db_nome, $root, $pass){

            try{
                $this->conexao = new PDO("mysql:host={$host};dbname={$db_nome}", "{$root}", "{$pass}");
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

        function getClientes(){

            $sql = "SELECT * FROM clientes";

            $stmt = $this->conexao->prepare($sql);

            $stmt->execute();

            $retorno = $stmt->fetchAll();

            //Retorna o array de registros buscados no banco
            return $retorno;
        }

        function setClientes($nome, $cpf, $sexo, $idade){

            $sql = "INSERT INTO `clientes`(`nome`, `cpf`, `sexo`, `idade`) VALUES (:nome, :cpf, :sexo, :idade)";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":sexo", $sexo);
            $stmt->bindParam(":idade", $idade);

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