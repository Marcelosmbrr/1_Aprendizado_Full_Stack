<?php

    //Referencial utilizado:
    //https://www.homehost.com.br/blog/tutoriais/php/enviar-email-php-com-phpmailer-smtp/

    //Importamos a classe PHPMailer e outras funções importantes
    require_once ("../Biblioteca_PHPMailer/PHPMailer-master/src/PHPMailer.php");
    require_once ("../Biblioteca_PHPMailer/PHPMailer-master/src/Exception.php");
    require_once ("../Biblioteca_PHPMailer/PHPMailer-master/src/SMTP.php");

    //Instanciamos e passamos o parâmetro true que, de acordo com a fonte, habilita Exceptions
    $mailer = new PHPMailer(true);

    try{

        //DEFINE QUE SERÁ USADO SMTP
        $mailer->isSMTP();

        //DEFINE A CODIFICAÇÃO
        $mailer->Charset = 'UTF-8';

        //CONFIGURAÇÕES DE SEGURANÇA DO E-MAIL
        $mailer->SMTPAuth = true; //Habilita autenticação SMTP
        $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  //Habilita TLS encryption

        //CONFIGURAÇÕES DO SERVIDOR
        $mailer->Host = 'mail.meusitemodelo.com'; //Nome do servidor
        $mailer->Port = 465; //Porta de saída de email

        //CONFIGURAÇÕES DO E-MAIL DE SAÍDA //LOGIN
        $mailer->Username = 'my_email@gmail.com'; //SMTP username                  
        $mailer->Password = 'email_password'; //SMTP password

        //CONFIGURAÇÕES DO E-MAIL REMETENTE - AQUELE QUE IRÁ ENVIAR
        $mail->setFrom('my_email@gmail.com', 'Remetente_name'); //Endereço de email e nome do remetente

        //CONFIGURAÇÃO DA MENSAGEM QUE SERÁ ENVIADA
        $mail->isHTML(false); //Habilita ou não que a mensagem seja em formato HTML
        $mail->Subject = 'Título da mensagem - Assunto'; //Assunto da mensagem
        $mail->Body = 'Conteúdo em formato HTML do email - portanto apenas usado se for HTML'; //Conteúdo ou corpo da mensagem em formato HTML
        $mail->AltBody = 'Conteúdo em formato de texto do email - portanto apenas usado se não for HTML';

        //ANEXOS - SE EXISTIREM
        $mailer->AddAttachment("pasta/documento.pdf", "documento.pdf"); //Caminho do arquivo e seu nome

        //CONFIGURAÇÕES DO DESTINATÁRIO
        $mail->addAddress('fulano@gmail.com', 'Fulano'); //Endereço de email e nome do destinatário

        //ENVIO DO E-MAIL
        $mail->send();
        echo 'Mensagem enviada com sucesso!';
    }

    catch(Exception $e){
        echo "A mensagem não pode ser enviada. Erro: {$mailer->ErrorInfo}";
    }

?>