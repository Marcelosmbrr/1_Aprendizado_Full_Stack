<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

    <!--

        COOKIE É UM ARQUIVO DE TEXTO CRIADO NO COMPUTADOR DO USUÁRIO
        SERVE PARA ARMAZENAR INFORMAÇÕES DO ACESSO DO USUÁRIO

        UTILIDADES:
        Pode ser usado para verificar se o usuário já logou no site, anteriormente
        Pode ser usado para recuperar os produtos que colocou, em outro acesso, no carrinho de compras
        Se já realizou uma ação, como votação em uma enquete
        E muito mais

    -->

    <?php

    //Para criar o Cookie
    //Entenda a função: https://www.php.net/manual/pt_BR/function.setcookie.php
    //Este cookie irá durar três dias
    setcookie("cliente", "5050", time() + (3 * 24 * 3600));

    //Recuperar o valor do cookie
    //Sempre recuperar pelo nome
    $cliente = $_COOKIE["cliente"];

    //Irá imprimir o valor do cookie
    echo "Número do afiliado: $cliente";

    //Verificar a existência do cookie na aba de inspecionar do navegador
    //Inspecionar->Application->Cookies

    ?>
    
</body>
</html>
    











