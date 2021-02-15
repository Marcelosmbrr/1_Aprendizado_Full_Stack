<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Controle Remoto </h1>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        require_once 'ControleRemoto.php';
        $controle = new ControleRemoto();
        
        /*Este arquivo é como se fosse o controle remoto em si*/
        /* Portanto aqui só podemos chamar os métodos de Interface*/
        $controle->ligar();
        $controle->abrirMenu();
        $controle->menosVolume();
        $controle->abrirMenu();
        
        
            
        ?>
        </pre>
         
    </body>
</html>
