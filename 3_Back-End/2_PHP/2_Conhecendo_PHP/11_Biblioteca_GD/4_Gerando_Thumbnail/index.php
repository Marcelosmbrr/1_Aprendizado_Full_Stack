<?php

    header("Content-type: image/jpeg");

    $file = "background.jpg";

    $new_width = 256;
    $new_height = 256;

    //A função list() cria variáveis como se fossem arrays //https://www.php.net/manual/pt_BR/function.list.php
    //A função getimagesize() retorna o tamanho de uma imagem em forma de uma matriz de 4 índices com algumas informações //https://www.php.net/manual/pt_BR/function.getimagesize.php
    list($old_width, $old_height) = getimagesize($file);

    //Cria uma nova imagem true color
    //https://www.php.net/manual/pt_BR/function.imagecreatetruecolor.php
    $new_image = imagecreatetruecolor($new_width, $new_height);

    //Cria uma nova imagem a a partir de um arquivo ou URL
    //https://www.php.net/manual/pt_BR/function.imagecreatefromjpeg.php
    $old_image = imagecreatefromjpeg($file);
    
    //Copia e redimensiona parte de uma imagem
    //https://www.php.net/manual/pt_BR/function.imagecopyresampled.php
    imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

    //Envia a imagem para o borwser ou arquivo
    //https://www.php.net/manual/pt_BR/function.imagejpeg.php
    imagejpeg($new_image); //Se quiser armazenar no diretório a nova imagem redimensionada, passar um segundo parâmetro: "nome-".date("Y-m-d").".jpg"

    imagedestroy($old_image);
    imagedestroy($new_image);


?>