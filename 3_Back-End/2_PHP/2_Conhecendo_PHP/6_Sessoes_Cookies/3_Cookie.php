<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/features.cookies.php

    //Cookies são um mecanismo para armazenar dados no navegador remoto e assim rastrear ou identificar usuários que retornam

    //Criar COOKIE
    //setcookie(nome_cookie, valor, duracao_cookie)
    setcookie("email_usuario", "fulano@gmail.com", time()+3600); //time()+3600 = até 3600 segundos a partir de agora
    setcookie("ultima_pesquisa", "Camiseta Adidas", time()+3600); //time()+3600 = até 3600 segundos a partir de agora

    //Uma vez que os cookies foram setados, eles podem ser acessados no próximo carregamento da página através do array $_COOKIE
    //Isto é possível porque o COOKIE é armazenado na máquina do usuário, o que pode ser verificado na aba "Cookies", nas configurações do seu navegador
    //Isto também significa que os Cookies são armazenados no diretório de instalação do navegador

    //Para apagar um $_COOKIE, basta adicionar uma data no passado
    setcookie("meu_cookie", "", time()-3600);

    //Para que um Cookie tenha uma validade "infinita", basta setar uma data de um futuro muito distante
    //O valor máximo é 2147483647 segundos, para burlar isso pode ser utilizado a multiplicação de valores
    setcookie("meu_cookie", "", time()+ (10 * 365 * 24 * 60 * 60)); // Irá expirar em 10 anos


