<?php

    class User{

        private $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        //Recebe o nome de usuário digitado no input, a senha, e o hash
        function getUsuario($username, $pass_hash){

            //
            $sql = "SELECT * FROM usuario WHERE username = :username AND senha = :senha";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":senha", $pass_hash);
            $stmt->execute();
            
            //rowCount retorna o número de linhas afetadas pela instrução SQL
            //Se o número de linhas for superior a 0
            if($stmt->rowCount() > 0){

                //Fetch() transforma a linha afetada em um array //Ideal para aplicações de login
                //Seu alternativo, Fetch_all(), serve para quando o retorno da instrução é de mais de uma linha
                $registro = $stmt->fetch();

                //Criamos uma sessão para recuperar cada valor de cada campo do registro do BD, exceto a senha, claro
                $_SESSION['id'] = $registro['id'];
                $_SESSION['nome_usuario'] = $registro['username'];
                    
                //Retornamos true para indicar que o Get foi bem sucedido
                return true;

            }else{
                
                //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                return false;
            }
        }


    }

    
    

















?>