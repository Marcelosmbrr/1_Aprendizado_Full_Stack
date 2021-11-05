

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload de uma imagem</label>
            <input class="form-control" type="file" id="formFile" name = "arquivo">
        </div>

        <input type="submit" value = "Salvar" name = "form_enviado">

    </form>

    <?php

    if(isset($_POST["form_enviado"])){

        //O QUE É O CAMPO BLOB? //https://dev.mysql.com/doc/refman/8.0/en/blob.html

        //Um blob (do inglês: Binary Large OBject, basic large object), representa um conjunto de dados binários armazenados em um único campo de uma tabela
        //O uso mais apropriado para o campo blob é para armazenamento multimídia como imagens, videos, aúdios, etc

        //A diferença deste modo de salvamento de arquivos no banco de dados, para os anteriores, é que neste caso o salvo o conteúdo binário em si
        //Ao invés do caminho para o arquivo, a sua "receita" é lida, e salva como texto, de forma que possa ser "construído" quando necessário

        $arquivo = $_FILES["arquivo"]["tmp_name"]; //Arquivos sempre são salvos em uma pasta de arquivos temporários do PHP
        $tamanho = $_FILES["arquivo"]["size"]; //Recupera o tamanho do arquivo em bytes
        $tipo = $_FILES["arquivo"]["type"]; //O tipo de dado //MIME Type
        $nome = $_FILES["arquivo"]["name"]; //Nome.extensão
        
        if (!empty($arquivo))
        {
            $fp = fopen($arquivo, "rb"); //O arquivo temporário é aberto //https://www.php.net/manual/pt_BR/function.fopen.php
            $conteudo = fread($fp, $tamanho); //O código binário do arquivo é lido //https://www.php.net/manual/pt_BR/function.fread.php
            $conteudo = addslashes($conteudo); //Adiciona barras em certos caracteres //https://www.php.net/manual/pt_BR/function.addslashes.php
            fclose($fp); //O arquivo é fechado
        }

        //Inserção do valor binário no campo do tipo BLOB, e dos outros dados referentes ao arquivo enviado
        $sql_insert = "INSERT INTO tabela VALUES ('$nome','$conteudo','$tipo')";

        //Recuperação dos dados do arquivo
        $sql_select = "SELECT arquivo_id, arquivo_nome, arquivo_conteudo, arquivo_tipo FROM tb_arquivos WHERE id = $id";

        //Lembrando que dados BLOB são codificados em binário e precisamos fazer a decodificação para enfim exibir para o usuário
        //Esta decodificação é feita logo no carregamento da página usando a função header 
        //É importante saber o tipo de arquivo que será decodificado

        $tipo = $resultado['arquivo_tipo']; //Dado retornado pelo select
        $conteudo = $resultado['arquivo_conteudo']; //Dados retornado pelo select

        //a função header serve para editar o cabeçalho de uma resposta HTTP
        //Nada pode ser impresso antes de um header ter sido definido
        header("Content-Type: $tipo"); //https://www.php.net/manual/pt_BR/function.header.php
        echo $conteudo;
  
    }

    ?>