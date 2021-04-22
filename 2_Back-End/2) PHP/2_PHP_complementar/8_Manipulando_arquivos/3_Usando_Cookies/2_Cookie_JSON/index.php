<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    
    <?php

    $data = array(

        "empresa"=>"Supermercado Fulano"

    );

    setcookie("Empresa", json_encode($data), time() + (3 * 24 * 3600));

    echo "<a href='verifica.php'>Clique aqui</a>"



    ?>
</body>
</html>