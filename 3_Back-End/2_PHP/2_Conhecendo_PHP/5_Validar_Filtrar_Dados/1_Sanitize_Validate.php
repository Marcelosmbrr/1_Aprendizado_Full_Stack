<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/en/book.filter.php

    //Esta extensão filtra dados validando ou higienizando-os 
    //Isso é especialmente útil quando a fonte de dados contém dados desconhecidos (ou externos), como a entrada fornecida pelo usuário
    //Por exemplo, esses dados podem vir de um formulário HTML

    //Exemplo da função filter_input para recuperar dados enviados via POST HTTP

    //Exemplo de "Sanitize" //Opção para filtrar um e-mail //Retorna o valor filtrado
    filter_input(INPUT_GET, 'var_email', FILTER_SANITIZE_EMAIL); //filter_input(metodo_envio, nome da variável, opção de "sanitize")

    //Exemplo de "Validate" //Opção para validar um e-mail //Retorna TRUE ou FALSE
    filter_input(INPUT_GET, 'var_email', FILTER_VALIDATE_EMAIL); //filter_input(metodo_envio, nome da variável, opção de "validate")



