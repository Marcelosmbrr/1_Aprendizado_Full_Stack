<?php

// ==== VARIÁVEIS DE AMBIENTE PARA ARMAZENAR CONFIGURAÇÕES DA APLICAÇÃO ==== //

// Pacote utilizado: https://github.com/vlucas/phpdotenv
// Tutorial de implementação: https://www.youtube.com/watch?v=rhI4Jy7T_SY

/*

==== O PROBLEMA ====
- Você nunca deve armazenar credenciais confidenciais em seu código
- Qualquer coisa que possa mudar entre os ambientes de implantação deve ser extraído do código para as variáveis ​​de ambiente
- Como credenciais de banco de dados ou credenciais para serviços de terceiros 

==== A SOLUÇÃO ====

- A solução é utilizar um arquivo .env para definir e carregar variáveis ​​de configuração personalizadas
- Com ele, não é necessário modificar outros arquivos, como o .htaccess 
- Essa é uma das melhores práticas de desenvolvimento com PHP, e está descrita nesse famoso manifesto: https://www.12factor.net/

*/

require("vendor/autoload.php");

use Root\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = Connection::createConnection();
var_dump($conn);
