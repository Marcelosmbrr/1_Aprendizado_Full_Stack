<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo5.css">
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

            /* Vale citar que existem centenas de funções pré-definidas do próprip PHP, e outras conhecidas também em outras linguagens,
            como C e C++. Para cada aplicação, é melhor pesquisar se existe uma adequada, ao invés de tentar decorar diversas */


            function maior($a, $b, $c, $d){
                if($a > $b && $a > $c && $a > $d){
                    return "a+";
                }
                else if($b > $a && $b > $c && $b > $d){
                    return "b+";
                }
                else if($c > $a && $c > $b && $c > $d){
                    return "c+";
                }
                else if($d > $a && $d > $b && $d > $c){
                    return "d+";
                }
            }
            function menor($a, $b, $c, $d){
                if($a < $b && $a < $c && $a < $d){
                    return "a-";
                }
                else if($b < $a && $b < $c && $b < $d){
                    return "b-";
                }
                else if($c < $a && $c < $b && $c < $d){
                    return "c-";
                }
                else if($d < $a && $d < $b && $d < $c){
                    return "d-";
                }
            }
            function teste1_referencial(&$a){ /*variavel $a "aponta" para $numero1, assim como a variável $referencial */
                $a = $a + 100;
            }
            function teste2_referencial_parametro(){

            }

            $numero1 = isset($_GET["numero1"]) ? $_GET["numero1"]: 0;
            $numero2 = isset($_GET["numero2"]) ? $_GET["numero2"]: 0;
            $numero3 = isset($_GET["numero3"]) ? $_GET["numero3"]: 0;
            $numero4 = isset($_GET["numero4"]) ? $_GET["numero4"]: 0;
            
            echo "Dados recebidos.....</br>";
            echo "Números.....$numero1.....$numero2....$numero3.....$numero4 </br>";
            /* PRIMEIRO TESTE essencial de validação dos números - se são todos iguais, ou não */
            if($numero1 == $numero2 && $numero2 == $numero3 && $numero3 == $numero4){
                echo "Os valores digitados são matemáticamente idênticos. </br>";
                goto Fim;
            }
            /* SEGUNDO TESTE - verificar se todos os números são diferentes, ou não */
            /* Colocamos as cópias dos valores em novas variáveis, e estas em um array. Fiz assim para não ter que usar funções para ter que retirar, posteriormente, os elementos originais do array*/
            /* Utilizando a função array_unique, vemos se existem valores duplicados, e se existirem, a função remove um dos elementos. Se existir dois "x", por exemplo, passará a ter apenas um "x" */
            /* Assim, se isto ocorrer, o array passará a ter 3 elementos, ao invés de 4, sendo, portanto, diferente de seu estado original */
            /* Desta forma saberemos, feita a comparação entre os dois arrays, se existiam ou não valores repetidos digitados pelo usuário */
            $num1 = $numero1;
            $num2 = $numero2;
            $num3 = $numero3;
            $num4 = $numero4;
            $original = array($num1, $num2, $num3, $num4); /* $original contém um array com os 4 valores originais */
            $filtrado = array_unique($original); /* $filtrado irá conter ou os mesmos 4 elementos, ou menos, e se forem menos, significará que existiam valores repetidos */
            if($original != $filtrado){
                echo "Há números repetidos. </br>";
                goto Fim;
            }
            else if($original == $filtrado){
                goto Programa;
            }

            Programa:
            $retorno_maior = maior($numero1, $numero2, $numero3, $numero4);
            if($retorno_maior == "a+"){
                echo "O maior valor, dentro os quatro, é o valor $numero1. </br>";
            }
            else if($retorno_maior == "b+"){
                echo "O maior valor, dentro os quatro, é o valor $numero2. </br>";
            }
            else if($retorno_maior == "c+"){
                echo "O maior valor, dentro os quatro, é o valor $numero3. </br>";
            }
            else if($retorno_maior == "d+"){
                echo "O maior valor, dentro os quatro, é o valor $numero4. </br>";
            }

            $retorno_menor = menor($numero1, $numero2, $numero3, $numero4);
            if($retorno_menor == "a-"){
                echo "O menor valor, dentro os quatro, é o valor $numero1. </br>";
            }
            else if($retorno_menor == "b-"){
                echo "O menor valor, dentro os quatro, é o valor $numero2. </br>";
            }
            else if($retorno_menor == "c-"){
                echo "O menor valor, dentro os quatro, é o valor $numero3. </br>";
            }
            else if($retorno_menor == "d-"){
                echo "O menor valor, dentro os quatro, é o valor $numero4. </br>";
            }
            /* Abaixo, teste com função + referenciais */
            $valor_original = $numero1; /* $referencial "aponta" para $numero1 */
            $referencial = &$numero1;
            teste1_referencial($numero1);
            if($valor_original != $referencial){
                $diferença = $valor_original - $referencial;
                echo "O primeiro valor sofreu uma mudança após a chamada da função de alteração. Antes valia $valor_original, e agora vale $numero1, pois foram adicionados 100 ao seu valor original. </br>";
            }
            
            Fim:
            echo "Fim do programa. </br>";
            ?>
            
            </br>
            <a id = "botao" href="5_lado_cliente.html"> <input id = "botao_enviar" type = "submit" value = "Refazer"/></a>
        </div>
    
    </section>
    
</body>
</html>

