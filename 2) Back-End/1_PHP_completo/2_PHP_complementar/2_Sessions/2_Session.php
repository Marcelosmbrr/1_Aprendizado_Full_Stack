<?php
    
    //Iniciamos uma nova sessão, assim como fora feito no primeiro arquivo
    session_start();
    
    //E quando você precisar exibir o valor salvo em uma sessão (provavelmente em outras páginas), é só fazer assim
    echo $_SESSION['nome'];

