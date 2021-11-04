<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/book.sodium.php

    //Sodium é uma biblioteca de software moderna e fácil de usar para criptografia, descriptografia, assinaturas, hashing de senha e muito mais 
    //Seu objetivo é fornecer todas as operações básicas necessárias para construir ferramentas criptográficas de alto nível

    //Verificar se o SODIUM está habilitado
    //Se não estiver, a dll deve ser ativada no php.ini
    var_dump(SODIUM_LIBRARY_VERSION);

    $mensagem = "Juízo sintético a priori";

    //Na codificação, uma chave especifica a transformação do texto puro em texto cifrado, ou vice-versa
    //Ou seja, a chave privada é, de fato, como uma "chave" revelar uma criptografia
    $chave = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);

    //Arquivo para guardar a chave da criptografia
    //O arquivo deve ser retirado do servidor, pois, do contrário, pode ser roubado pela URL. Ex: site.com/chave.key
    file_put_contents("./chave.key", $chave);

    //Em criptografia, um nonce é um número aleatório que só pode ser usado uma vez
    //É utilizado para que a criptografia gerada para um valor seja sempre, pelo menos, 50% diferente da anterior
    $nounce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

    //Criptografar o valor
    //Parâmetros: o valor, o nounce, e a chave criptográfica
    $mensagemCifrada = sodium_crypto_secretbox($mensagem, $nounce, $chave);

    //Para trafegar a criptografia, deve ser codificada com base64() para que não haja perda de bytes
    //A base64() codifica binários para ASCII //https://www.php.net/manual/pt_BR/function.base64-encode.php
    $mensagem = base64_encode($mensagemCifrada);

    $mensagemDecifrada = sodium_crypto_secretbox_open(base64_decode($mensagem), $nounce, $chave);

    //RESUMO EXPLICADO

    //A chave da criptografia varia a cada execução, e por isso deve ser armazenada quando gerada
        //Quando gerada, deve ser armazenada em um arquivo seguro
    //O valor de nounce, um valor que varia, e que sempre deve variar, garante que a criptografia gerada seja sempre diferente
    //A criptografia, para ser trafegada, como pela URL, deve ser em um formato codificado para que não haja perda de bits ou bytes
        //Usar a função base64_encode() para codificar, e base64_decode() para decodificar
