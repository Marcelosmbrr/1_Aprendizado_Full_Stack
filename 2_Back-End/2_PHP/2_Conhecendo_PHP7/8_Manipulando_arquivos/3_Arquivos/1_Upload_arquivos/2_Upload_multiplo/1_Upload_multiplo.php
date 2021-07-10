

    <!-- O atributo encytpe, com o valor declarado, define que o elemento enviado via formulário será um arquivo -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload de uma imagem</label>
            <input class="form-control" type="file" id="formFile" name = "arquivo_enviado" multiple> <!-- Atributo multiple -->
        </div>

        <input type="submit" value = "Enviar" name = "form_enviado">

    </form>