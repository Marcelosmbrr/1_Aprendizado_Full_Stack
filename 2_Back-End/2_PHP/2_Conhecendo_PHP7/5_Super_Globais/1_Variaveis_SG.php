<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.variables.superglobals.php

    //Várias variáveis pré-definidas no PHP são "superglobais", que significa que elas estão disponível em todos escopos para todo o script. 
    //Não há necessidade de fazer global $variable; para acessá-lo dentro de funções ou métodos.

    //$GLOBALS //Serve para referenciar variáveis no escopo global
    //$_SERVER //Um array com chaves pré-definidas, tendo cada uma um dado sobre o servidor e o ambiente de execução
    //$_GET //Recupera variáveis HTTP enviadas via método GET
    //$_POST //Recupera variáveis HTTP enviadas via método POST
    //$_FILES //Um array com chaves pré-definidas, tendo cada uma um dado sobre o arquivo enviado via método POST
    //$_COOKIE //Um array associativo de variáveis passadas para o atual script via HTTP Cookies //COOKIE é um arquivo que o servidor armazena no computador do usuário
    //$_SESSION //Uma sessão é uma forma de armazenar informações (em variáveis) a serem usadas em várias páginas //São diferentes dos COOKIES porque não permanecem na máquina
    //$_REQUEST //Recupera variáveis HTTP enviadas via GET, POST ou COOKIE 
    //$_ENV //O $_ENV é um array associativo onde cada uma das suas chaves é uma variável de ambiente do SO apontando para o seu valor //OBS: são dados sensíveis



    