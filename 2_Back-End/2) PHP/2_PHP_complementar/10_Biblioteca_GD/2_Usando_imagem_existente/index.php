<?php

    //Cria uma nova imagem a partir de outra 
    //https://www.php.net/manual/pt_BR/function.imagecreatefromjpeg.php
    $image = imagecreatefromjpeg("certificado.jpg");

    //Cores
    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    //Serve para desenhar uma string na imagem
    //https://www.php.net/manual/pt_BR/function.imagestring.php
    imagestring($image, 5, 450, 150, "Certificado", $titleColor);
    imagestring($image, 5, 440, 350, "Fulano Beltrano", $titleColor);
    imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");

    //Renderiza a imagem png
    //https://www.php.net/manual/pt_BR/function.imagepng.php
    imagejpeg($image);

    //Imagem é gerada no diretório
    //imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

    //Semelhante ao fechamento de um arquivo, a variável precisa ser "destruida"
    imagedestroy($image);

?>