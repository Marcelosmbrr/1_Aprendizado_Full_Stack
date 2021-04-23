<?php

    session_start();
        
        unset($_SESSION["imagem_salva"], $_SESSION["erro_msg"]);

        header("location: http://localhost:8000/");
    
?>