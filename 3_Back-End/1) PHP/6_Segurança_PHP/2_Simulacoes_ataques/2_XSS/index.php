<form method = "POST">

    <input type="text" name = "valor">
    <input type="submit" value = "Enviar">

</form>


<?php

    //COM ESTE EXEMPLO SIMPLES É POSSÍVEL CRIAR ESTRUTURAS HTML E JAVASCRIPT A PARTIR DO INPUT

    if(isset($_POST["valor"])){

        echo $_POST["valor"];
    }











?>