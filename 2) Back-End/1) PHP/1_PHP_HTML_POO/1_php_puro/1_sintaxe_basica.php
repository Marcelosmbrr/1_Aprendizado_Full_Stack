<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Básica</title>
    <link rel="stylesheet" href= "estilos/estilo_1.css">
</head>
<body>
    <!-- Na barra de navegação, digitar  -->


    <header>
        <h1>Curso de PHP do canal "Curso em Vídeo"</h1>
        <h2>Sem integração com HTML<h2>
    </header>
    
    <section>
        
        <div id = "Container">
        
        <?php

        /* Se não fosse pela necessidade do termo "function", as funções seriam iguais as de C e C++ */
        function multiplicar($valor1, $valor2){
            $calculo = $valor1 * $valor2;
            return $calculo;
        }

        /* PHP é uma linguagem fracamente tipada, mas podemos definir o tipo, se quisermos */
        $a = 3;
        $b = (int) 4; /* Exemplo de tipagem */
        $c = 5;
        $d = (string) 5; /* Exemplo de tipagem */
        $contador = 0;
        $soma = 0;

        do{
            $soma = $soma + ($a + $b + $c);
            $contador = $contador + 1;
        }
        while($contador < 5);
        echo "A soma dos números resultou em: $soma.</br>"; /* para quebrar a linha */
        echo "O valor $a elevado ao valor $c resulta em " . $a**$c . ".</br>";

        /* Chamar a função e receber o retorno em uma variável */
        $retorno = multiplicar($a, $c);
        echo "A multiplicação resultou em $retorno.</br>";

        /* Embora tenha posto o nome de ponteiro, este não funciona da mesma forma que os ponteiros em C, na verdade, é apenas uma forma de dar mais de um nome a uma mesma variável*/
        /* O nome adequado é "referenciais", pois o referencial não aponta para endereço de memória */
        $ponteiro = &$apontado;
        $apontado = 5;
        echo "A variável apontado recebeu 5, logo a variável ponteiro também contém $ponteiro, afinal, ambos são o mesmo. </br>";

        /* Exemplo de função pré-definida, "intval" , que serve para retornar a parte inteira de um número */ /* Existem outras funções prontas, que podem ser pesquisadas facilmente */
        $val = 3.999;
        echo "A parte inteira de $val é " . intval($val) . "</br>";

        /* Operadores relacionais são os mesmos de C e C++. Veja abaixo veja um exemplo de operador unário */
        $resultado = ($a > $c) ? "é maior": "é menor";
        echo "O valor $a $resultado do que o valor $c";






        ?>
        </div>

    </section>

</body>
</html>