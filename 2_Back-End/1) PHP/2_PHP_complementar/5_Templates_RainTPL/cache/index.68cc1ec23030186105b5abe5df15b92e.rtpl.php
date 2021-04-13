<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template RainTPL</title>
</head>
<body>

    <h1><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <p><?php echo htmlspecialchars( $texto, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

</body>
</html>