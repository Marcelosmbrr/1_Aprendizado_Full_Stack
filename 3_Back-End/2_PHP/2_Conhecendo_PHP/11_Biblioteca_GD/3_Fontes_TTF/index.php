<?php

    //Cria uma nova imagem a partir de outra 
    //https://www.php.net/manual/pt_BR/function.imagecreatefromjpeg.php
    $image = imagecreatefromjpeg("certificado.jpg");

    //Cores
    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    $bevan_font = "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
    $playball_font = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

    //Escreve texto na imagem usando fontes TrueType
    //https://www.php.net/manual/pt_BR/function.imagettftext.php
    imagettftext($image, 32, 0, 320, 250, $titleColor, $bevan_font, "CERTIFICADO");
    imagettftext($image, 32, 0, 375, 350, $titleColor, $playball_font, "Fulano Beltrano");

    header("Content-type: image/jpg");

    //Renderiza a imagem png
    //https://www.php.net/manual/pt_BR/function.imagepng.php
    imagejpeg($image);

    //Semelhante ao fechamento de um arquivo, a variável precisa ser "destruida"
    imagedestroy($image);

?>