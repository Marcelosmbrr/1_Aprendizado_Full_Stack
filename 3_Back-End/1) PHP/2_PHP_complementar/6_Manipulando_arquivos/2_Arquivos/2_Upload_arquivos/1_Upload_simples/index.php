<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Upload Arquivos - PHP</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            border: 0;
        }

        body{
            background: #333;
            padding: 100px;
        }

        header{
            border-bottom: 3px solid #fff;
        }

        h1{
            color: #fff;
        }

        .sec-form{
            margin: 10px 0px 10px 0px;
            width: 300px;
        }

        label{
            color: #fff;
        }

        input[type="submit"]{
            padding: 2px;
            border-radius: 2px;
        }

        .alert{
            width: 150px;
            text-align: center;
        }
    
    </style>
</head>
<body>

    <header>

        <h1>UPLOAD ARQUIVOS COM PHP</h1>
        
    </header>

    <section class = "sec-form">

        <!-- A variável super global passada na URL do atributo action se refere ao próprio arquivo php -->
        <!-- O atributo encytpe, com o valor declarado, define que o elemento enviado via formulário será um arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload de uma imagem</label>
                <input class="form-control" type="file" id="formFile" name = "arquivo_enviado">
            </div>

            <input type="submit" value = "Enviar" name = "form_enviado">
        
        </form>

    </section>

    <?php

        //Esta variável irá existir a partir do momento que o usuário clicar em Enviar
        //Adiantando, a variável super global $_FILES serve para recuperar arquivos enviados por formulário, sempre
        if(isset($_POST["form_enviado"])){

            //Variável para conter as extensões permitidas
            $extensionsPermited = array("png", "jpg", "jpeg", "gif");

            //Função pathinfo() retorna um array associativo contendo informações diversas sobre o arquivo de um caminho //pathinfo(caminho, especificação(opcional))
            //O array retornado por pathinfo, que recupera informações do arquivo, contém os índices: 'name', 'type', 'tmp_name', 'error', 'size'

            //O índice 'name' recebe não apenas o nome em si do arquivo, mas junto dele sua extensão
            //Abaixo, com a especificação PATHINFO_EXTENSION, recuperamos a extensão do arquivo sem o seu nome
            $extension = pathinfo($_FILES['arquivo_enviado']['name'], PATHINFO_EXTENSION);

            //Verificar se no array retornado por pathinfo existe um dos valores existentes no array $extensionsPermited 
            if(in_array($extension, $extensionsPermited)){

                //Se existir, criar uma variável que recebe o caminho da pasta que irá receber o arquivo
                $folder = "arquivos/";

                //Variável recebe o arquivo temporário //Arquivos sempre são salvos em uma pasta de arquivos temporários do PHP
                //A função pathinfo() retorna um array, com índices informativos sobre o caminho do arquivo, e um desses índices é o caminho do arquivo temporário
                $temporary = $_FILES["arquivo_enviado"]["tmp_name"];

                //Cria um novo nome para o arquivo
                $newName = uniqid() . ".$extension";

                //Essa função move um arquivo para um local
                //move_uploaded_file(arquivo, caminho) //
                if(move_uploaded_file($temporary, $folder.$newName)){

                    echo "<div class='alert alert-success' role='alert'>
                        O upload foi realizado com sucesso!
                        </div>";

                        //ATENÇÃO:
                        //SEMPRE QUE A PÁGINA É RECARREGADA O FORM É ENVIADO AUTOMATICAMENTE

                } else {

                    echo "<div class='alert alert-danger' role='alert'>
                        Erro! O Upload não foi realizado!
                        </div>";

                }

            } else {

                echo "<div class='alert alert-danger' role='alert'>
                    Formato de arquivo inválido!
                </div>";
            }

        }

    ?>
        
    
</body>
</html>