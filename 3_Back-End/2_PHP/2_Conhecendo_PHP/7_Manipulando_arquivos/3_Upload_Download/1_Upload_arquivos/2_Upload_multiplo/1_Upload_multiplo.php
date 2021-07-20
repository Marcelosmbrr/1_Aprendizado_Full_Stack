

    <!-- O atributo encytpe, com o valor declarado, define que o elemento enviado via formulário será um arquivo -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload de uma imagem</label>
            <input class="form-control" type="file" id="formFile" name = "arquivo_enviado[]" multiple> <!-- Atributo multiple, name como array -->
        </div>

        <input type="submit" value = "Enviar" name = "form_enviado">

    </form>

    <?php

        if(isset($_POST["form_enviado"])){

            $quantidade_arquivos = count($_FILES['arquivo_enviado']['name']);
            $contador = 0;

            //A cada loop um arquivo será movido para a pasta definida
            while($contador < $quantidade_arquivos){

                $extensionsPermited = array("png", "jpg", "jpeg", "gif");

                $extension = pathinfo($_FILES['arquivo_enviado']['name'][$contador], PATHINFO_EXTENSION);

                if(in_array($extension, $extensionsPermited)){

                    $folder = "arquivos/";

                    $temporary = $_FILES["arquivo_enviado"]["tmp_name"][$contador];

                    $newName = uniqid() . ".$extension";

                    if(move_uploaded_file($temporary, $folder.$newName)){

                        echo "Sucesso!";

                    }else{

                        echo "Erro!";

                    }
                }

                $contador++;

            }
            
        }





    ?>