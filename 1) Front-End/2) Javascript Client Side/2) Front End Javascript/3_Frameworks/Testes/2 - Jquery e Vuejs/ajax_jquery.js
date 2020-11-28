$(document).ready(() => {
	
	$('#vuejs_logo').on('click', () => {

		//PRIMEIRA FORMA: $('#pagina').load('documentacao.html') //SÍNTAXE: $(selector).load(URL,data,callback);

		/* SEGUNDA FORMA, COM GET: //SÍNTAXE: $.get(URL,callback);
		$.get('documentacao.html', recurso => { 
			$('#pagina').html(recurso)
		})
        */

        console.log('Ícone Vuejs clicado.....recursos recuperados por Ajax');
        $(".main-Vuejs").show(2000);

		//TERCEIRA FORMA, COM POST: //SÍNTAXE: $.post(URL,callback);
		$.post('main_vuejs.html', recurso => { 
			$('.main-Vuejs').html(recurso);
		})
	})
})