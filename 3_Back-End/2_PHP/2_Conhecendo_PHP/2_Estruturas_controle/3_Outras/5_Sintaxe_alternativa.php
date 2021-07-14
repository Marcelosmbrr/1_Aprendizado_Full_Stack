<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/control-structures.alternative-syntax.php

    //O PHP oferece uma sintaxe alternativa para algumas estruturas de controle; a saber, if, while, for, foreach, e switch
    //A sintaxe alternativa é trocar a chave de abertura por dois pontos (:) e a chave de fechamento por endif;, endwhile;, endfor;, endforeach;, ou endswitch;
    //É especificamente útil quando o PHP e o HTML são unidos, fazendo com que o código se torne menos bagunçado e, por isso, mais legível

    //EXEMPLO
    if ($a == 5):
        echo "a equals 5";
        echo "...";
    elseif ($a == 6):
        echo "a equals 6";
        echo "!!!";
    else:
        echo "a is neither 5 nor 6";
    endif;

?>

    <!-- EXEMPLO HTML+PHP-->
    <?php foreach( $vars as $var ): ?>
        <?php if($var):?>
          <p>Hello World!</p>
        <?php else:?>
          <p>Goodbye World!</p>
        <?php endif;?>
    <?php endforeach; ?>