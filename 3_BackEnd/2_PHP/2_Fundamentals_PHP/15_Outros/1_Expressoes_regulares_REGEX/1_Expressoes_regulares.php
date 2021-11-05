<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/reference.pcre.pattern.syntax.php
    //https://www.php.net/manual/pt_BR/ref.pcre.php

    //Utilizadas para validação de dados, buscas e substituições de strings, pois elas permitem uma forma simples de casar padrões de caracteres
    //Para tanto, é utiliziada uma síntaxe de "metacaracteres" para substituir algum outro carácter desconhecido em uma sequência de caracteres

    /*
    
    A SÍNTAXE REGEX:
    //https://www.php.net/manual/pt_BR/regexp.reference.meta.php

    1) É escrita entre duas barras / /

    2) Símbolo ^ significa "inicio da expressão". Ex: Procurar por /^a/ é procurar por valores que começam com "a"

    3) $ significa o fim da expressão. Ex: Procurar por /$a/ é procurar por valores que terminam com "a"

    4) [A-Z] é igual ao intervalo de letras maiúsculas de A à Z

    5) [a-z] é igual ao intervalo de letras maiúsculas de a à z

    6) [A-Za-z] é igual ao intervalo de letras maiúsculas e minúsculas de a à z

    7) [A-Za-z0-9] é igual ao intervalo de letras A-Z, a-z e 0-9

    8) Um "i" após as barras significa Case insensitive. Ex: /[A-Z]/i

    9) A estrutura { }, e os símbolos ? e + servem para definir o número de ocorrências procuradas
    9.1) /[A-Z]{1,4}/ significa de uma a quatro ocorrências, e /[A-Z]{3}/ somente três ocorrências
    9.2) /[A-Z]?/ significa {0,1}, ou seja, nenhuma ou uma
    9.3) /[A-Z]* / significa {0,n}, ou seja, nenhuma ou várias
    9.4) /[A-Z]+/ significa {1,n}, ou seja, uma ou várias

    */

    //EXEMPLO

    //Email
    $string = "contato@gmail.com";

    //Como interpretar: Expressão regular dos emails possíveis/válidos
    //Até underline podem ter letras de a até z, números de 0 até 9, ponto, traço, e underline, com uma ocorrência +{1, n}
    //Após o @, a mesma regra do segmento anterior se mantém
    //Após isso, pode ter um ponto, e a palavra com, br ou com.br, e seriam as possibilidades para o final da expressão $
    $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

    //OBS: A barra invertida informa quando algo deve ser entendido de forma literal //Um email pode ter .\-\_, ou seja, ponto, traço e underline

    //Essa função verifica a correspondência da expressão regular com o valor
    //https://www.php.net/manual/pt_BR/function.preg-match.php
    if(preg_match($padrao, $string)){

        echo "Válido! A expressão regular é compatível com o valor";

    }else{

        echo "O valor é inválido";

    }

    

