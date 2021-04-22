<?php
    session_set_cookie_params(2,"/"); //duração da session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Classe Dinâmica</title>
</head>
<body>

    <section class = "container <?php if(isset($_SESSION["troca_cor"])){ echo "background_change"; } ?>">
        <a href="script.php?click=set"><button>Clique aqui</button></a>
    </section>
    
</body>
</html>