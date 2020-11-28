function scripts_vuejs(){

    //AJAX COM JQUERY
    $('#documentacao').on('click', () => {

		//PRIMEIRA FORMA: $('#pagina').load('documentacao.html') //SÍNTAXE: $(selector).load(URL,data,callback);

		/* SEGUNDA FORMA, COM GET: //SÍNTAXE: $.get(URL,callback);
		$.get('documentacao.html', recurso => { 
			$('#pagina').html(recurso)
		})
		*/

		//TERCEIRA FORMA, COM POST: //SÍNTAXE: $.post(URL,callback);
		$.post('documentacao.html', recurso => { 
			$('#pagina').html(recurso)
		})
	})
























}