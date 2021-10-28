<?php

    session_start();

    unset( $_SESSION['id'],  $_SESSION['username']);

    header("location: http://localhost:8000/");

?>