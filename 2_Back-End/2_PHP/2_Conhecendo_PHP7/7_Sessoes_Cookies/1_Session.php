<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/book.session.php

    //Uma sessão é uma forma de armazenar informações (em variáveis) a serem usadas em várias páginas, e cada uma possui um ID único
    //Por padrão, as variáveis ​​de sessão duram até que o usuário feche o navegador
    //Então; As variáveis ​​de sessão contêm informações sobre um único usuário e estão disponíveis para todas as páginas em um aplicativo
    //Uma sessão pode ser propagada pela URL, ou, ainda, utilizando COOKIES

    session_start(); //Uma sessão é iniciada com a função session_start()

    //Variáveis ​​de sessão são definidas com a variável global $ _SESSION
    //Se existir um session_start() em outro arquivo, do mesmo diretório raíz, um echo $_SESSION['mensagem'] irá imprimir este mesmo valor
    $_SESSION['mensagem'] = "Usuário ou senha incorretos!"; 

    //Todas as sessões em si iniciadas possuem um ID único
    //Diferente do valor da super global $_SESSION, este valor de ID é invariável e criado automaticamente
    //Também é propagado entre os arquivos
    echo session_id();

    session_unset();

    



