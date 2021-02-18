<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/49b7b83709.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Display/css/display.css">
    <title>Upload_Download</title>
</head>
<body>

    <header>

        <div class = "logo">
            <h1><img src="Display/img/Logo.png" alt="" width="120px"> UPLOAD_DOWNLOAD </h1>
        </div>

        <nav class = "header_nav">
            <ul class = "navbar_header">
                <li class = "li_item li-primeiro"><a href="index.php">Home</a></li>
                <li class = "li_item li-segundo"><a href="">Opção B</a></li>
                <li class = "li_item li-terceiro"><a href="">Opção C</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <div class = "div_form">

            <form class = "upload_form" action="Upload/upload_verifica.php" method = "POST" enctype = "multipart/form-data">

                <div class="mb-3">
                    <label for="formFile" class="form-label"><strong>Upload de uma imagem</strong></label>
                    <input class="form-control" type="file" id="formFile" name = "arquivo_enviado">
                </div>
    
                <input type="submit" value = "Salvar" name = "btn_save-upload" style = "padding: 5px">
            
            </form>

        </div>

        <div class = "div_download">

            <form action="Download/download_verifica.php" method = "POST">
                <div class="mb-3 div_download-leftside">
                    <label for="formDownload" class="form-label"><strong>Download da imagem</strong></label>
                    <input class="form-control" type="submit" id="formDownload" name = "btn_download" style = "width: 200px" value = "Download">
                </div>
            </form>
                
            <!-- A IMAGEM ARMAZENADA DO DIRETÓRIO, PELO SCRIPT DE UPLOAD, E RECUPERADA PELO SCRIPT DE DOWNLOAD, SERÁ IMPRESSA DINÂMICAMENTE AQUI -->
            <div class = "div_download-rightside"> 
                <?php
                    if(isset($_SESSION["imagem"])){
                        echo "<img src='Upload/img_upload/{$imagem}' alt=''>";
                    }
                ?>
            </div>

        </div>

    </main>
    
</body>
</html>