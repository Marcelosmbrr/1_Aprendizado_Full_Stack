<?php

    //cURL na documentação PHP: https://www.php.net/manual/pt_BR/book.curl.php
    //O cURL é uma ferramenta para criar requisições em diversos protocolos (incluindo HTTP, HTTPS e FTP, entre muitos outros) e obter conteúdo remoto
    //É uma ferramenta para transferir dados de/para um servidor, usando um dos protocolos suportados 
    //API consumida: https://viacep.com.br/

    $cep = "96015-160";
    $link = "https://viacep.com.br/ws/$cep/json/";

    //INICIALIZAÇÃO//////////////////////

    //https://www.php.net/manual/pt_BR/function.curl-init.php
    //Inicializar uma sessão cURL

    //Parâmetro deve ser uma URL
    $ch = curl_init($link);

    //DEFINIÇÕES DO PROCEDIMENTO//////////

    //https://www.php.net/manual/pt_BR/function.curl-setopt.php //Esta função serve para definirmos "opções" de transferência
    //Parâmetros, por ordem: o retorno do curl_init, o modo, 1 ou 0 para ativar ou desativar o modo 

    //O modo ali passado define que deve haver um retorno
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //Este modo faz com que não seja necessário haver uma validação de SSL da URL
    //Talvez em outras situações, por questões de segurança, isto seja necessário, mas não neste caso
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //EXECUÇÃO//////////////

    //https://www.php.net/manual/pt_BR/function.curl-exec.php
    //Executar uma sessão cURL

    $response = curl_exec($ch);

    //FINALIZAÇÃO//////////

    //https://www.php.net/manual/en/function.curl-close.php
    //Fecha uma sessão cURL e libera todos os recursos

    curl_close($ch);

    //Por ser uma API, o retorno é um JSON
    print_r($response); //Obj JSON
    $data = json_decode($response, true); //Converter o JSON para um array associativo

    echo "<br>";

    foreach($data as $chave => $valor){

        echo "<br> O <strong>$chave</strong> é: $valor";
    }








    














?>










