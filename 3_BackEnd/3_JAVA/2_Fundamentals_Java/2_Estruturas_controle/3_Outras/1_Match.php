<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/control-structures.match.php

    //Da mesma forma que uma declaração switch, uma uma expressão match() tem um valor que é comparado e utilizado de parâmetro para execução de vias de código
    //Mas, ao contrário switch, a comparação é uma verificação de identidade (===) em vez de uma verificação de igualdade fraca (==)
    //É uma novidade do PHP8

    /*
    $return_value = match (subject_expression) {
        single_conditional_expression => return_expression,
        conditional_expression1, conditional_expression2 => return_expression,
    };
    */

    //EXEMPLO
    $expressionResult = match ($condition) {

        1, 2 => "Se for idêntico a 1 ou 2",
        3, 4 => "Se for idêntico a 3 ou 4",
        default => "Caso default",

    };

    //EXEMPLO 
    $age = 23;

    $result = match (true) {

        $age >= 65 => 'senior',
        $age >= 25 => 'adult',
        $age >= 18 => 'young adult',
        default => 'kid',

    };