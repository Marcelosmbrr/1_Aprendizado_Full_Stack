<?php

// ==== ACESSANDO DADOS DA MÁQUINA LOCAL - SUPER GLOBAL $_ENV - Variáveis de ambiente ==== //

/*

- A variável $_ENV é um array associativo em que cada chave contém um dado sobre o contexto do sistema operacional
- Por padrão essa variável vem desabilitada, por questões de segurança
- Ela pode ser habilitada no arquivo php.ini
- Para isso procure, no php.ini, o campo "variables_order", e mude o valor de "Default Value" de "GPCS" para "EGPCS" - cada letra corresponde a uma super global

*/

echo "<pre>";
print_r($_ENV);
echo "</pre>";

// Além $_ENV["chave"] para recuperar um valor especifico, pode ser utilizada a função getenv("chave")
// A diferença entre as duas formas, é que a função getenv() é case-insensitive
echo $_ENV["LANG"];
echo getenv("LANG");