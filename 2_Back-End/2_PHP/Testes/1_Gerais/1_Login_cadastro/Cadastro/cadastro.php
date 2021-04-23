<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Display/display-cadastro/reset.css">
    <link rel="stylesheet" href="../Display/display-cadastro/display.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b7b83709.js" crossorigin="anonymous"></script>
    <title>Sistema Cadastro</title>
</head>
<body>

    <header>

        <div class = "logo">
            <h1><img src="../Display/img/Logo.png" alt="" width="120px"> CADASTRO</h1>
        </div>

        <nav class = "header_nav">
            <ul class = "navbar_header">
                <li class = "li_item li-primeiro"><a href="../index.php">Home</a></li>
                <li class = "li_item li-segundo"><a href="cadastrar.php">Cadastrar</a></li>
                <li class = "li_item li-terceiro"><a href="">Opção C</a></li>
            </ul>
        </nav>
    
    </header>

    <main class = "main_page">

        <div class = "cadastro_div">

            <form action = "cadastro_verifica.php" method = "POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "username">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name = "senha">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>

                <!-- Aviso de erro dinâmico, com span. A classe foi definida no CSS, mas ele só existe no fluxo do documento quando o echo é realizado -->
                <?php

                    if(isset($_SESSION['erro_msg'])){
                        //Sempre que ocorre um erro no login, uma sessão de erro é criada, usada nesse span, e destruída em seguida
                        echo "<span class = 'login_erro'> <i class='fas fa-exclamation-triangle' style='color: red;'></i> {$_SESSION['erro_msg']} </span>";
                        unset($_SESSION['erro_msg']);
                    }   

                ?>

              </form>

        </div>
    
    </main>

</body>
</html>