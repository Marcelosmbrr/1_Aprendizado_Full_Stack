<?php

    require_once("Config_session.php");

    ////Quando um visitante acessa o site, é gerado um cookie no computador dele informando um id único de sessão
    //PHP usa esse identificador pra ‘organizar’ as sessões entre os visitantes do seu site
    
    //Por padrão, o ID é imutável; mesmo que a página seja recarregada, continuará o mesmo
    echo session_id();
    
    //Existem outras funções pré definidas para sessões
    
    //É possível forçar um novo ID com a função session_regenerate_id()
    //Existe uma ataque chamado "Session hijacking" em que um usuário descobre a sessão de outro
    //Os valores da sessão, como os de login de um site, podem ser roubados da vítima, por exemplo
    

