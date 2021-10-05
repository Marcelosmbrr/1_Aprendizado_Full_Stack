<?php 

namespace Services;

// ==== Composer Autoload ==== //
require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// https://github.com/PHPMailer/PHPMailer
class Mailer{

    private $mail;

    public function __construct(){

        // Cria uma instância da classe PHPMailer
        // Valor "true" ativa as exceptions
        $this->mail = new PHPMailer(true);

    }

    public function setServerSettings($data = array()){

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $data["server"]["host"];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $data["server"]["username"];                     //SMTP username
        $mail->Password   = $data["server"]["password"];                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = $data["server"]["port"];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    }

    public function setRecipientSettings(){

        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     
        $mail->addAddress('ellen@example.com');               
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

    }

    public function setAttachments(){

        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    }

    public function setMailContent($data){

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    }

    private function SendEmail(){

        try{

            $this->mailInstance->send();

            echo "A mensagem foi enviada";

        }catch (Exception $e) {

            echo "A mensagem não foi enviada. Erro: {$mail->ErrorInfo}";

        }

    }


}