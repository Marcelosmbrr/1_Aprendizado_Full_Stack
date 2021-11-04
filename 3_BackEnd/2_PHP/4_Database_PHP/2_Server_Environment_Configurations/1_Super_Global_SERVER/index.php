<?php

// ==== ACESSANDO DADOS DO SERVIDOR - SUPER GLOBAL $_SERVER ==== //

/*

- A variável $_SERVER é um array associativo em que cada chave contém um dado sobre o contexto do servidor
- Existem muitos dados, mas alguns podem ser considerados os "principais" ou "mais usualmente utilizados" para algum fim

$_SERVER["DOCUMENT_ROOT"]
O diretório raiz onde o script atual é executado. 
Essa configuração é definida nos arquivos de configuração do servidor.
É muito utilizado no require ou include.

[REQUEST_URI]
O URI fornecido para acessar a página atual.
É muito utilizado para as rotas do MVC.

$_SERVER["SERVER_NAME"]
O nome host do servidor onde o script atual é executado. 
Pode ser utilizado na instância do PDO.

$_SERVER["SERVER_PORT"]
A porta do servidor web para comunicação.

$_SERVER["HTTP_USER_AGENT"]
Informa o browser que o usuários está acessando a aplicação.

[SCRIPT_FILENAME]
O caminho absoluto do script atualmente em execução.

$_SERVER["PHP_SELF"]
Nome do arquivo do script que está executando.

*/

echo "<pre>";
print_r($_SERVER);
echo "</pre>";