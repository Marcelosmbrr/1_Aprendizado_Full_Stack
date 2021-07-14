

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload de uma imagem</label>
            <input class="form-control" type="file" id="formFile" name = "arquivo_var">
        </div>

        <input type="submit" value = "Salvar" name = "form_enviado">

    </form>

    <?php

        if(isset($_POST["form_enviado"])){

            //Variável para conter as extensões permitidas
            $extensionsPermited = array("png", "jpg", "jpeg", "gif");

            //Recuperar extensão do arquivo
            $extension = strtolower(pathinfo($_FILES['arquivo_var']['name'], PATHINFO_EXTENSION));

            //Renomear o arquivo
            //Será: id_único.extensão
            $novoNome = uniqid() . ".$extension";

            //Caminho da pasta
            $diretorio = "upload/";

            //Mover arquivo para o endereço $diretorio.$novoNome
            if(move_uploaded_file($_FILES['arquivo_var']['tmp_name'], $novoNome)){

                //Neste ponto o arquivo já foi salvo no local especificado
                

                //Salvar um arquivo no banco de dados significa que, em algum contexto, será associado a um registro, ou tabela
                //Por exemplo, usuários com fotos de perfil escolhidas, tem seu registro no banco de dados associado a uma imagem armazenada

                //Um dos modos de armazenar um arquivo no banco de dados é salvando na verdade o seu caminho, e não ele próprio
                //Se o arquivo estiver salvo em um local do servidor, basta que se tenha em mãos o seu "endereço" para que seja recuperado

                //Neste caso é salvo o nome do arquivo e a sua extensão, no formato nome.extensão
                //Desta forma é preciso que o caminho de diretórios não é incluso, e portanto deve ser definido de outra forma
                //A junção do caminho de diretórios, e do nome do arquivo, dará acesso ao próprio arquivo
                $sql = "INSERT INTO nome_tabela (campo_arquivo) VALUES ($novoNome)";


                //Desta forma é gravado no banco de dados o caminho completo para acesso ao arquivo
                $caminho_completo = $diretorio.$novoNome;
                $sql = "INSERT INTO nome_tabela (campo_arquivo) VALUES ($diretorio.$novoNome)";

                

            }
        }

    ?>