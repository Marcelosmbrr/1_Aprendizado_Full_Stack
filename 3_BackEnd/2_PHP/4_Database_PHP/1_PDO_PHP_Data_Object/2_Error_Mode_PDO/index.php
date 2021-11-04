<?php

// ==== PDO ERROR MODE ==== //
// https://wiki.php.net/rfc/pdo_default_errmode


/*

==== O PROBLEMA ====

- Por padrão, o modo de tratamento de erro do PDO é PDO::ERRMODE_SILENT
- Isso significa que quando ocorre um erro de SQL utilizando PDO, nenhum erro ou aviso pode é emitido e nenhuma exceção lançada
- A função execute(), por exemplo, retorna apenas false em caso de erro
- Só é possível tratar Exceptions na utilização do PDO se o próprio desenvolvedor implementar seu próprio tratamento de erro

==== A SOLUÇÃO ====

- É possível alterar esse estado padrão, alterando o modo de tratamento de erros do PDO para "PDO::ERRMODE_EXCEPTION"
- Com essa configuração, em caso de erro passará a ser lançada a exceção de nome "PDOException"

==== COMO IMPLEMENTAR A SOLUÇÃO ====

- Para alterar o modo padrão do PDO para tratar erros o que deve ser feito é alterar o atributo PDO::ATTR_ERRMODE
- Para alterar atributos do PDO existe o método setAttribute, cuja sintaxe é: setAttribute([atributo a ser alterado], [novo modo do atributo]) 

- No arquivo que houver a instância do objeto PDO, utilizando o objeto PDO, faça:
$objeto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

- Após isso, os métodos do PDO passarão a lançar a exception "PDOException" em caso de erro
- Existem métodos para acessar detalhes do erro. Veja aqui: https://www.php.net/manual/pt_BR/class.pdoexception.php
- Veja o exemplo prático nos arquivos ConnectionCreator.php e o Model.php 

*/

