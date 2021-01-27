<?php
    require_once("conexao_class.php");
?>
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
            border-bottom: 3px solid tomato;
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
            width: 300px;
            text-align: center;
        }
    
    </style>
</head>
<body>

    <header>

        <h1>UPLOAD ARQUIVOS - PHP E MYSQL</h1>
        
    </header>

    <section class = "sec-form">

        <!-- A variável super global passada na URL do atributo action se refere ao próprio arquivo php -->
        <!-- O atributo encytpe, com o valor declarado, define que o elemento enviado via formulário será um arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload de uma imagem</label>
                <input class="form-control" type="file" id="formFile" name = "arquivo_var">
            </div>

            <input type="submit" value = "Salvar" name = "form_enviado">
        
        </form>

    </section>

    <?php

        //MANIPULAÇÃO PADRÃO PARA ARQUIVOS ENVIADOS EM UM FORM//

        //Recuperar arquivo
        if(isset($_POST["form_enviado"])){

            //Variável para conter as extensões permitidas
            $extensionsPermited = array("png", "jpg", "jpeg", "gif");

            //Recuperar extensão do arquivo
            $extension = strtolower(pathinfo($_FILES['arquivo_var']['name'], PATHINFO_EXTENSION));

            //Renomear o arquivo
            $novoNome = uniqid() . ".$extension";

            //Caminho da pasta
            $diretorio = "upload/";

            //Mover arquivo para o endereço $diretorio.$novoNome, ou seja, "upload/xxxxx.extensão"
           move_uploaded_file($_FILES['arquivo_var']['tmp_name'], $diretorio.$novoNome);

           //ENVIANDO PARA O BANCO DE DADOS//

           $obj_envio = new DBArquivo();

           $obj_envio->conectar();

           $sql = "INSERT INTO file_table (codigo, arquivo, data_up) VALUES (DEFAULT, '$novoNome', NOW())";

           $set_retorno = $obj_envio->set_arquivo($sql);

           if($set_retorno){

            echo "<div class='alert alert-success' role='alert'>
                Arquivo salvo no banco com sucesso!
                </div>";

           }else{

            echo "<div class='alert alert-danger' role='alert'>
            Erro! Arquivo não foi enviado para o banco!
            </div>";

           }
           

        }


    ?>
        
    
</body>
</html>