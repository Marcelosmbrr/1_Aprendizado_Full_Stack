<?php

    class Person {

        private $pdo;

        public function __construct($pdo){

            $this->pdo = $pdo;

        }

        public function getUser($username, $senha){

            $sql = "SELECT `id`,`username`, `pass` FROM usuarios WHERE `username` = :username";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            
            //rowCount retorna o número de linhas afetadas pela instrução SQL
            if($stmt->rowCount() > 0){

                //Fetch() transforma a linha afetada em um array, o que é ideal para aplicações de login //Seu alternativo é Fetch_all()
                $registro = $stmt->fetch();

                print_r($registro);

                //Se a senha do input for compatível com o hash salvo no campo "senha", do registro..
                if(password_verify($senha, $registro["pass"])){

                    //Criamos uma sessão para recuperar cada valor de cada campo do registro do BD, exceto a senha, claro
                    $_SESSION['iduser'] = $registro['id'];
                    $_SESSION['user'] = $registro['username'];
                        
                    //Retornamos true para indicar que o usuário e senha estão corretos
                    return true;

                }

            }else{
                //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                return false;
            }


        }

        //Por padrão o $file_data é igual a null, pois no cadastro a foto é opcional
        public function setUser($username, $password, $file_data = null){

            //echo $file_data; die();

            //Senha deve ser inserida no banco criptografada
            $pass = password_hash($password, PASSWORD_BCRYPT); 

            $sql = "INSERT INTO usuarios (`username`, `pass`) VALUES (:username, :senha)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":senha", $pass);
            if($stmt->execute()){

                //Com o INSERT realizado com sucesso, retornamos true caso $file_data for null
                if($file_data == null){
                    
                    return true;
                
                //Se não for null, uma foto foi enviada no cadastro
                //Nesse caso, até aqui, o registro tem um username, uma senha, e a foto padrão que deve ser substituída pela enviada
                }else{

                    //É retornado o retorno do método de atualização da foto
                    return $this->updateUserPhoto($username, $file_data);

                }

            }else{

                return false;

            }

        }

        public function updateUserPhoto($username, $file_data){

            $sql = "UPDATE usuarios SET `user_photo` = :file_data WHERE `username` = :username";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":file_data", $file_data);
            if($stmt->execute()){

                return true;  

            }else{

                return false;

            }

        }

    }

























?>