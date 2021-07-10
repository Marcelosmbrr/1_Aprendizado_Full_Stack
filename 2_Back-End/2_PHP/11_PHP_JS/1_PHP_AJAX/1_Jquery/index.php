<!DOCTYPE html>
<html>
<head>
	<title>PHP e AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="display/css/display.css">
</head>
<body onload = "getComentarios()">
	<section class="content">
		<div class="box_form">
			<h1>Insira seu nome e comentário:</h1>
			<form id="formulario">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="nome_input"/><br><br>
				<label for="comment">Comentário</label><br>
				<textarea name="comment" id="comentario_input"></textarea><br><br>
				<input type="submit" form="formulario" class="btn-sub" value="Enviar Comentário"/><br><br>
			</form>
		</div>
		<div class="box_comment">
            <!-- registros do banco -->
		</div>
	</section>
	
	<script src="jquery/jquery-3.5.1.js"></script>
	<script src="script.js"></script>
</body>
</html>