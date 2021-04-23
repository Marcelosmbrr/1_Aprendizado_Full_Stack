<?php

    session_set_cookie_params(2,"/"); //duração da session
    session_start();

    if(isset($_GET["click"])){

        $_SESSION["troca_cor"] = true;
        header("location: http://localhost:8000");
    }









?>