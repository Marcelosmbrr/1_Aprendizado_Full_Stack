<?php

    //https://www.php.net/manual/pt_BR/function.header.php
    header("Content-type: image/png");

    //Dimensões da imagem
    $image = imagecreate(500, 500);

    //Cores
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 255, 0, 0);

    //Serve para desenhar uma string na imagem
    //https://www.php.net/manual/pt_BR/function.imagestring.php
    imagestring($image, 5, 200, 250, "Biblioteca GD", $red);

    //Renderiza a imagem png
    //https://www.php.net/manual/pt_BR/function.imagepng.php
    imagepng($image);

    //Semelhante ao fechamento de um arquivo, a variável precisa ser "destruida"
    imagedestroy($image);

?>