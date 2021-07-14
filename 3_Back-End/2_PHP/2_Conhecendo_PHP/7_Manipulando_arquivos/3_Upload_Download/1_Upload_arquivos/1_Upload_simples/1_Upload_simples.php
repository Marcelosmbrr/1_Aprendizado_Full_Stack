
    <!-- O atributo encytpe, com o valor declarado, define que o elemento enviado via formulário será um arquivo -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload de uma imagem</label>
            <input class="form-control" type="file" id="formFile" name = "arquivo_enviado">
        </div>

        <input type="submit" value = "Enviar" name = "form_enviado">
    
    </form>

    <?php

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

                    echo "Sucesso!";

                }else{

                    echo "Erro!";

                }
            }
        }