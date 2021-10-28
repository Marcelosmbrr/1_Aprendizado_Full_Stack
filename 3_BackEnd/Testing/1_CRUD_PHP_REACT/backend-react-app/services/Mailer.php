<?php 

namespace Services;

// ==== Composer Autoload ==== //
require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// https://github.com/PHPMailer/PHPMailer
// https://mailtrap.io/inboxes/1390056/messages = serviço testes com e-mail
class Mailer{

    private $mail;
    private $data = array();

    public function __construct(){

        // Cria uma instância da classe PHPMailer
        // Valor "true" ativa as exceptions
        $this->mail = new PHPMailer(true);

    }

    public function setServerSettings($data = array()){

        //Server settings
        $this->mail->SMTPDebug = 0;                      
        $this->mail->isSMTP();                                            
        $this->mail->Host       = $data["server"]["host"];                     
        $this->mail->SMTPAuth   = true;                                   
        $this->mail->Username   = $data["server"]["username"];                     
        $this->mail->Password   = $data["server"]["password"];                               
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
        $this->mail->Port       = $data["server"]["port"]; 
        $this->mail->CharSet = 'UTF-8';                                   

    }

    public function setRecipientSettings($data){

        $this->mail->setFrom($data["sender"]["email"], $data["sender"]["name"]);
        $this->mail->addAddress($data["recipient"]["email"], $data["recipient"]["name"]);     

    }

    public function setAttachments($data){

        $this->mail->addAttachment('/var/tmp/file.tar.gz');         
        $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    }

    public function setMailContent($data){

        $this->mail->isHTML($data["html"]);                                  
        $this->mail->Subject = $data["subject"];
        $this->mail->Body    = $data["body"];
        $this->mail->AltBody = $data["altbody"];

    }

    public function SendEmail(){

        try{

            $this->mail->send();

            return array("status" => true);

        }catch (Exception $e) {

            return array("status" => false, "error" => "send email", "message" => "A mensagem não foi enviada. Erro: {$this->mail->ErrorInfo}");

        }

    }

}