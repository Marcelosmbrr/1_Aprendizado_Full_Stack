<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/book.curl.php

    //cURL permite que você se conecte e se comunique com diferentes tipos de servidores usando diferentes tipos de protocolos
    //Em breves palavras, é o AJAX do PHP

    //API CEP
    //https://viacep.com.br/

    $cep = "96015160";
    $link_api = "https://viacep.com.br/ws/01001000/json/";

    //Inicializa uma sessão cURL, sendo o argumento uma URL
    $ch = curl_init($link);

    //Seta uma option para a execução do procedimento 
    //Leia mais em: https://www.php.net/manual/pt_BR/function.curl-setopt.php

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Terão dados no retorno, e não um ouput imediato //Neste caso, um JSON espera-se um JSON
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); //Para fins de segurança, requita um certificado SSL da entidade comunicada

    //Executa a sessão cURL
    //Retorna true em caso de sucesso ou false em caso de falha
    //Se setada a opção CURLOPT_RETURNTRANSFER, retornará os dados esperados se true, ou false em caso de falha
    $response = curl_exec($ch);

    //Fecha uma sessão cURL
    curl_close($ch);

    //Decodificação da string JSON retornada
    //Quando true, o objeto retornado será convertido em array associativo
    $data = json_decode($response, true);

    //Impressão do array de dados
    print_r($data);
