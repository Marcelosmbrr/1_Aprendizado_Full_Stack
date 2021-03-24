
    //Requisão assíncrona do listamento dos registros
    function getRegistros(){

        $.ajax({

            url: 'http://localhost:8000/Scripts_php/select.php',
            method: 'GET',
            dataType: 'json', //Tratamento da resposta //Avalia a resposta como JSON e retorna um objeto javascript
            beforeSend: function(){ console.log("Buscando registros..."); } //Antes de enviar..

        }).done(function(response){

            //Os registros aqui estarão dentro de um objeto JS //Não existe array associativo em JS
            if(response){
                console.log(typeof response); //Tipo da estrutura //Objeto
                console.log(response); //Imprimir a estrutura de valores
                $("#corpo_tabela").empty(); //Para impedir a duplicação de comentários

                //Imprimir tabela dinâmicamente
                
                

            }else{

                console.log("Não existem registros no banco de dados");
                //$(".box_comment").html("<div class='alert alert-danger' role='alert'>Não existem registros no banco de dados!</div>");
            }  
        });  
    }

    //Requisão assíncrona do cadastro de dados
    $('.form-insert').submit(function(e){
        e.preventDefault();
    
        var p_name = $('#nome_input').val();
        var p_telefone = $('#telefone_input').val();
        var p_email = $('#email_input').val();
        console.log("Dados a enviar...." + "Nome: " + p_name + "....Telefone: " + p_telefone + "....Email: " + p_email);

        $.ajax({

            url: 'http://localhost:8000/Scripts_php/insert.php',
            method: 'POST',
            data: {nome: p_name, telefone:p_telefone, email: p_email},
            dataType: 'json', //Tratamento da resposta
            beforeSend: function(){ console.log("Inserindo dados no banco..."); } //Antes de enviar..

        }).done(function(response){

            console.log(response);

            //Quando a requisição é realizada, os campos do formulário são esvaziados
            $('#nome_input').val('');
            $('#telefone_input').val('');
            $('#email_input').val('');

            //Para impedir a duplicação de alertas
            $(".alert_row").empty(); 

            //if(response){

                //É impresso um alerta de sucesso, do bootstrap
                //$('.alert_row').prepend('<div class="alert alert-success" role="alert"> Sucesso! Os dados foram inseridos no banco! </div>');
                //getRegistros();

            //} else{

                //É impresso um alerta de fracasso (danger), do bootstrap
                //$('.alert_row').prepend('<div class="alert alert-danger" role="alert"> Erro no cadastro! Tente novamente! </div>');

            //}

        });
        
    });


