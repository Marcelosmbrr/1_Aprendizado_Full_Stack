<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP Sessões</title>
  </head>
  <body>
    <h1>PHP - Sessões</h1>
    
    <?php
    
        //Sessão é um recurso do PHP que permite que você salve valores (variáveis) para serem usados ao longo da visita do usuário
        //Valores salvos na sessão podem ser usados em qualquer parte do script, mesmo em outras páginas do site
        //Você precisa iniciar a sessão antes de poder setar ou pegar valores dela. Não há limite de valores salvos na sessão

        //Para abrir a sessão é só usar esse comando no PHP:
        session_start();

        //Depois de iniciada a sessão você pode definir valores dentro dela dessa forma:
        $_SESSION['nome'] = "Valor da Sessão do arquivo 1_Session.php";

        //E para usar ou exibir os valores salvos na sessão?
        //Veja no segundo arquivo.php
    
    ?>
    
    <p>Não é possível executar diretamente a Sessão 2, que contém a impressão do valor desta Sessão, pois primeiro precisamos inicializar esta, e assim, em seguida, ir para a outra. </p>
    <a href="2_Session.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Clique aqui</a>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>













   

