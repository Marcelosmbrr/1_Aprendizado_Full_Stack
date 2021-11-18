<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/ref.strings.php

    //Existem dezenas de funções para manipular strings
    //Dentre as mais utilizadas, podemos citar:

    //Retorna uma string com barras adicionadas antes de caracteres que precisam ser escapados
    //Estes caracteres seriam aspas simples, duplas, barra invertida e byte null
    addslashes($string);

    //Desfaz o efeito de addslashes()
    //Remove barras invertidas de uma string
    //Uma barra invertida se torna '', duas se tornam '\', três '\\', e assim em diante
    stripslashes($string);

    //Divide uma string em strings, realizando a seperação a partir do delimitador. Ex: "A|B" = [A, B]
    //OPCIONAL: Limitador define o número máximo de elementos do array, com o último elemento contendo o resto da string
    explode($delimitador, $string, $limitador);

    //Substitui todas as ocorrências da string de procura com a string de substituição
    //OPCIONAL: o contador, se passado, guardará o número de combinações e modificações feitas.
    str_replace($elemento_procurado, $elemento_substituto, $string, $count);

    //Repete uma string
    str_repeat($string, $multiplicador);

    //Preenche uma string para um certo tamanho com outra string
    //Esta função retorna a string input preenchida na esquerda, direita ou ambos os lados até o tamanho especificado
    //Os modos podem ser: STR_PAD_RIGHT (preencher a direita), STR_PAD_LEFT (preencher a esquerda), ou STR_PAD_BOTH (preencher de ambos os lados)
    str_pad($string, $tamanho_preenchimento, $string_preenchimento, $modo_preenchimento);

    //Retira as tags HTML e PHP de uma string
    strip_tags($string);

    //Encontra a posição da primeira ocorrência de uma string
    strpos($string, $elemento_procurado);

    //Converte uma string para maiúsculas e minúsculas, respectivamente
    strtolower($string);
    strtoupper($string);

    //Retorna uma parte extraída de uma string
    //https://www.php.net/manual/pt_BR/function.substr.php
    substr($string, $posicao_inicial, $tamanho_subtracao);