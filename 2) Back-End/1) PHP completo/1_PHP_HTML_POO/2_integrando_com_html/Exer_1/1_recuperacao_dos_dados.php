<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Aprendizado com PHP</h1>
        <h2>Com integração HTML<h2>
    </header>

    <section>
        
        <div id = "Container">
            
            <?php

            $valor = $_GET["numero"]; /* Recuperado o dado cujo nome foi enviado no pacote com nome "numero" */
            $raiz = sqrt($valor); /* Função de raiz quadrada */
            echo "O valor enviado foi $valor </br>";
            echo "A raiz quadrado de $valor é $raiz";
            
            ?>
            </br>
            <a href="1_lado_cliente.html"> Refazer o cálculo </a>
        </div>
    
    </section>
    
</body>
</html>