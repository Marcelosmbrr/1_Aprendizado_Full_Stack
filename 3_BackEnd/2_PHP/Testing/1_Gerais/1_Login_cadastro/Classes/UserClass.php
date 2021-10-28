<?php

    class User{

        private $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        //Recebe o nome de usuário digitado no input, a senha, e o hash
        function getUsuario($username, $senha){

            $sql = "SELECT * FROM usuario WHERE username = :username";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            
            //rowCount retorna o número de linhas afetadas pela instrução SQL
            if($stmt->rowCount() > 0){

                //Neste caso o rowCount é superior a 0
                //Significa que existe um registro cujo campo "username" é igual ao valor passado no input

                //Fetch() transforma a linha afetada em um array, o que é ideal para aplicações de login //Seu alternativo é Fetch_all()
                $registro = $stmt->fetch();

                //Se a senha do input for compatível com o hash salvo no campo "senha", do registro..
                if(password_verify($senha, $registro["senha"])){

                    //Criamos uma sessão para recuperar cada valor de cada campo do registro do BD, exceto a senha, claro
                    $_SESSION['id'] = $registro['id'];
                    $_SESSION['nome_usuario'] = $registro['username'];
                        
                    //Retornamos true para indicar que o usuário e senha estão corretos
                    return true;

                }

            }else{
                //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                return false;
            }
        }

        function setUsuario($username, $senha){

            //Senha deve ser inserida no banco criptografada
            $pass = password_hash($senha, PASSWORD_BCRYPT); 

            $sql = "INSERT INTO usuario VALUES (DEFAULT, :username, :senha)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":senha", $pass);
            if($stmt->execute()){

                //Com o INSERT realizado com sucesso, retornamos true
                return true;

            }else{

                return false;

            }


        }

    }

    
    

















?>