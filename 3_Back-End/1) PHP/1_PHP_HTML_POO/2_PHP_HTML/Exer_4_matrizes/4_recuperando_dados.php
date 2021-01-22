<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo4.css">
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

            $numero1 = isset($_GET["numero"]) ? $_GET["numero"]: 0 ;
            $matriz1 = isset($_GET["forma"]) ? $_GET["forma"]: "false" ;
            $matriz2 = isset($_GET["forma"]) ? $_GET["forma"]: "false";
            $matriz3 = isset($_GET["forma"]) ? $_GET["forma"]: "false";
            $linha = 0;
            $coluna = 0;
            
            if($matriz1 == "2x2"){
                echo "Uma Matriz 2x2 com elemento $numero1, abaixo: </br>";
                for($linha = 0; $linha < 2; $linha++ ){
                    for($coluna = 0; $coluna < 2; $coluna++){
                        echo "$numero1 ($linha)($coluna) | ";
                    }
                    echo "</br>";  
                }
            }
            else if($matriz1 == "3x2"){
                echo "Uma Matriz 3x2 com elemento $numero1, abaixo: </br>";
                for($linha = 0; $linha < 3; $linha++ ){
                    for($coluna = 0; $coluna < 2; $coluna++){
                        echo "$numero1 ($linha)($coluna) | ";
                    }
                    echo "</br>";  
                }
            }
            else if($matriz1 == "4x2"){
                echo "Uma Matriz 4x2 com elemento $numero1, abaixo: </br>";
                for($linha = 0; $linha < 4; $linha++ ){
                    for($coluna = 0; $coluna < 2; $coluna++){
                        echo "$numero1 ($linha)($coluna) | ";
                    }
                    echo "</br>";  
                }
            }

            

            
            ?>
            
            </br>
            <a id = "botao" href="4_lado_cliente.html"> <input id = "botao_enviar" type = "submit" value = "Refazer"/></a>
        </div>
    
    </section>
    
</body>
</html>