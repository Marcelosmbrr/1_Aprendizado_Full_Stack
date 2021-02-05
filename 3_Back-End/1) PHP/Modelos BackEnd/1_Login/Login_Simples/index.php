<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="display/css/reset.css">
    <link rel="stylesheet" href="display/css/display-index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b7b83709.js" crossorigin="anonymous"></script>
    <title>Sistema Login</title>
</head>
<body>

    <header>
        
        <h1 class = "page_logo"><img src="display/img/Logo.png" alt="" width="120px"> <strong>Sistema de Login</strong></h1>
        
    </header>
    
    <main>

        <div class = "flex_container-f1">

            <div class = "flex_item-side leftside-f1">
            </div>

            <div class = "flex_item-side flex_rightside-f1">
                <h2 class = "form_tittle"><strong>Faça seu login</strong></h2>

                <form action="login_verifica.php" method= "GET">

                    <input type="text" id = "name_input" name = "username" placeholder= "Nome de usuário"><br>
                    <input type="password" id = "password_input" name = "pass" placeholder= "Senha"><br>
                    <!-- Aviso de erro dinâmico, com span. A classe foi definida no CSS, mas ele só existe no fluxo do documento quando o echo é realizado -->
                    <?php
                        if(isset($_SESSION['erro_msg'])){
                            //Sempre que ocorre um erro no login, uma sessão de erro é criada, usada nesse span, e destruída em seguida
                            echo "<span class = 'login_erro'> <i class='fas fa-exclamation-triangle' style='color: red;'></i> {$_SESSION['erro_msg']} </span>";
                            unset($_SESSION['erro_msg']);
                        }   
                    ?>
                    <div class = "form_buttons">
                        <input type="submit" value = "Logar" class = "btn_form btn_signin" name = "login_btn_press">
                    </div>

                </form>
            </div>

        </div>
        
    </main>
    


</body>
</html>