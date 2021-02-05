<?php

    session_start();

    if(!empty($_SESSION['username'])){

        echo "Logado com sucesso!";
        echo "<br>";
        echo "ID do usuário: {$_SESSION['username']}";
        echo "<br>";
        echo "Nome do usuário: {$_SESSION['id']}";
        echo "<br>";
        echo "<a href = 'http://localhost:8000/logout.php'> Sair </a>";

    }else{

        $_SESSION['erro_msg'] = "Área restritra";
        header("location: http://localhost:8000/");

    }

    
    


?>