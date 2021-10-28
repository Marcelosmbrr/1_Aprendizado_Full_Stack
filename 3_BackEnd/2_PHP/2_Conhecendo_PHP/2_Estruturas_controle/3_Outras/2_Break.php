<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/control-structures.break.php

    //Break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual
    //Break aceita um argumento numérico opcional que diz quantas estruturas aninhadas deverá interromper - o valor padrão é 1, somente a estrutura imediata é interrompida

    //EXEMPLO
    $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
    foreach ($arr as $val) {
        if ($val == 'stop') {
            break;    /* Interrompe o while */
        }
        echo "$val<br />\n";
    }

    //EXEMPLO
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
      }