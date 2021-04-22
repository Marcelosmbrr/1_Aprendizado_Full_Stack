<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
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


            $nome = isset($_GET["nome"]) ? $_GET["nome"]: "não-informado" ;
            $ano = isset($_GET["ano"]) ? $_GET["ano"]: 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "não-informado";
            if($ano == 0){
                echo "Nenhum dado, além do sexo, que é $sexo, foi informado";
            }
            else{
                $idade = date("Y") - $ano;
            }
            if($ano >=2000 && $sexo == "feminino"){
                echo "$nome tem $idade anos, é do sexo $sexo, e portanto, é uma fraldinha.";
            }
            else if ($ano >=2000 && $sexo == "masculino"){
                echo "$nome tem $idade anos, é do sexo $sexo, e portanto é um fraldinha.";
            }
            
            ?>
            </br>
            <a id = "botao" href="2_lado_cliente.html"> <input id = "botao_enviar" type = "submit" value = "Refazer"/></a>
        </div>
    
    </section>
    
</body>
</html>