
    $('#formulario').submit(function(e){
        e.preventDefault();
    
        var u_name = $('#nome_input').val();
        var u_comment = $('#comentario_input').val();
        console.log("Dados a enviar...." + "Nome: " + u_name + "....Comentário: " + u_comment);

        $.ajax({

            url: 'http://localhost:8000/inserir_script.php',
            method: 'POST',
            data: {name: u_name, comentario:u_comment},
            dataType: 'json', //Tratamento da resposta
            beforeSend: function(){ console.log("Inserindo dados no banco..."); } //Antes de enviar..

        }).done(function(response){

            //Quando a requisição é realizada, os campos do formulário são esvaziados
            $('#nome_input').val('');
            $('#comentario_input').val('');
            console.log(response);
            getComentarios();

        });
        
    });

    function getComentarios(){

        $.ajax({

            url: 'http://localhost:8000/selecionar_script.php',
            method: 'GET',
            dataType: 'json', //Tratamento da resposta
            beforeSend: function(){ console.log("Buscando registros..."); } //Antes de enviar..

        }).done(function(response){

            if(response){
                console.log(response);
                $(".box_comment").empty(); //Para impedir a duplicação de comentários

                for(var i = 0; i < response.length; i++){
                    //Sobre o método prepend: https://api.jquery.com/prepend/
                    $('.box_comment').prepend('<div class = "b_comm"> <h4>' + response[i].nome + '</h4> <p>' + response[i].comentario + '</p> </div');
                }
            }else{
                console.log("Não existem registros no banco de dados");
                $(".box_comment").html("<div class='alert alert-danger' role='alert'>Não existem registros no banco de dados!</div>");
            }
            
        });
        
    }

