<?php

    namespace Classes;
    use PDO;
    use Instances\instance_person;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Person {

        private $pdo;

        //Ver a classe instance_person
        //O objeto PDO é recebido via SINGLETON
        public function __construct($pdo){

            $this->pdo = $pdo;

        }

        public function getUser($arrData = array(), $where, $op){

            $sql = "SELECT `id`,`username`, `pass`, `user_photo` FROM usuarios $where";

            $stmt = $this->pdo->prepare($sql);

            if($op == "LOGIN"){

                $stmt->bindParam(":username", $arrData['username']);

            }else if($op == "CHECK_EMAIL"){

                $stmt->bindParam(":email", $arrData['email']);

            }else if($op == "CHECK_CODE"){

                $stmt->bindParam(":code", $arrData['code']);

            }

            $stmt->execute();
            
            //rowCount retorna o número de linhas afetadas pela instrução SQL
            if($stmt->rowCount() == 1){

                //Se a operação for de login, retorna o StatmentObject, se não retorna true
                return $op == "LOGIN" ? $stmt: $stmt->fetch();

            }else{

                //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                return false;

            }

        }

        //Por padrão o $file_data é igual a null, pois no cadastro a foto é opcional
        public function setUser($username, $password, $email, $file_data = null){

            //Senha deve ser inserida no banco criptografada
            $pass = password_hash($password, PASSWORD_BCRYPT); 

            $sql = "INSERT INTO usuarios (`username`, `pass`, `user_email`) VALUES (:username, :senha, :email)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":senha", $pass);
            $stmt->bindParam(":email", $email);
            if($stmt->execute()){

                //Com o INSERT realizado com sucesso, retornamos true caso $file_data for null
                if($file_data == null){
                    
                    return true;
                
                //Se não for null, uma foto foi enviada no cadastro
                //Nesse caso, até aqui, o registro tem um username, uma senha, e a foto padrão que deve ser substituída pela enviada
                }else{

                    //É retornado o retorno do método de atualização da foto
                    //Uma melhoria de segurança seria, acho, recuperar o id do registro inserido, via SELECT, e utiliza-lo para o UPDATE
                    return $this->updateUserPhoto($username, $file_data);

                }

            }else{

                return false;

            }

        }

        public function updatePass($new_password, $code, $id){

            $pass_crypt = password_hash($new_password, PASSWORD_BCRYPT); 

            $sql = "UPDATE usuarios SET `pass` = :pass WHERE `reco_pass_key` = :code";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":pass", $pass_crypt);
            $stmt->bindParam(":code", $code);
            if($stmt->execute()){

                return $this->keyGeneration(null, "temp", $id);

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

        public function keyGeneration($email, $code, $id = null){

            $sql = "UPDATE usuarios SET `reco_pass_key` = :code WHERE `user_email` = :email OR `id` = :id";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":code", $code);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);
            if($stmt->execute()){

                return $arrData = array("code" => $code);  

            }else{

                return false;

            }

        }

        //Guia que utilizei: https://www.youtube.com/watch?v=wI_Z8U2j5PM
        //Servidor utilizado: https://mailtrap.io
        public function sendCodeEmail($code, $username){

            $mensagem = "<p>O seu código é: <b>$code</b></p><br>";
            $mensagem .= "<p>Acesse este link para ser redirecionado para a página de alteração da senha:</p>";
            $mensagem .= "<p>http://localhost/projetosphp/recuperar_senha_email/password_alter.php?code=$code</p>";

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {

                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = '648a4a4efc6533';                     //SMTP username
                $mail->Password   = 'b31153e05efddc';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                $mail->CharSet = 'UTF-8';

                //Remetente
                $mail->setFrom('fulano@gmail.com', 'Fulano Rem');
                
                //Destinatário
                $mail->addAddress('beltrano@gmail.com', 'Beltrano Des');     
            
                //Content
                $mail->isHTML(true);                               
                $mail->Subject = "Requisição de alteração da senha do usuário $username";
                $mail->Body    = $mensagem;
                $mail->AltBody = "Não responda a este email!";
            
                $mail->send();

                return true;

            } catch (Exception $e) {

                return false;

            }

        }

    }


?>