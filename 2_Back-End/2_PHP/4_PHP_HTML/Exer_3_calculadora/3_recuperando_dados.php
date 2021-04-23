<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo3.css">
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

            $numero1 = isset($_GET["numero1"]) ? $_GET["numero1"]: 0 ;
            $numero2 = isset($_GET["numero2"]) ? $_GET["numero2"]: 0 ;
            $soma = isset($_GET["operação"]) ? $_GET["operação"]: "false" ;
            $subtracao = isset($_GET["operação"]) ? $_GET["operação"]: "false";
            $multiplicacao = isset($_GET["operação"]) ? $_GET["operação"]: "false";

            if($soma == "soma"){
                $operacao_soma = $numero1 + $numero2;
                echo "A operação escolhida foi de $soma, e resultou em $operacao_soma. </br>";
                goto fim;
            }
            else if($subtracao == "subtração"){
                if($numero1 > $numero2){
                    $operacao_subtracao = $numero1 - $numero2;
                    echo "A operação escolhida foi de $subtracao, e resultou em $operacao_subtracao. </br>";
                    goto fim;
                    }
                else if($numero2 > $numero1){
                    $operacao_subtracao = $numero2 - $numero1;
                    echo "A operação escolhida foi de $subtracao, e resultou em $operacao_subtracao. </br>";
                    goto fim;
                }
                else if($numero1 == $numero2){
                    echo "Os números são iguais, logo, a operação é impossível </br>";
                    goto fim;
                }
            }
            else if($multiplicacao == "multiplicação"){
                $operacao_multi = $numero1 * $numero2;
                echo "A operação escolhida foi de $multiplicacao, e resultou em $operacao_multi. </br>";
                goto fim;
            }

            fim:
            echo "Fim do programa..";

            
            ?>
            </br>
            <a id = "botao" href="3_lado_cliente.html"> <input id = "botao_enviar" type = "submit" value = "Refazer"/></a>
        </div>
    
    </section>
    
</body>
</html>