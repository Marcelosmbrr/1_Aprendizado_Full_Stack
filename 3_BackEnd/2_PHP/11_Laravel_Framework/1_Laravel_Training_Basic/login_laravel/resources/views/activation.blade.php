@extends("layouts.global")
@section("style_file", "outside_page.css")

@section("content")


<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1><i class="fas fa-user"></i> QUASE LÁ!</h1>
        <div class = "fc_row" style = "padding: 2rem;">
            <p style = "font-size: 1.5rem;">Para concluir o seu cadastro é preciso inserir abaixo o código que foi enviado para o seu e-mail.</p>
        </div>
    </div>

    <div class = "fc_row fc_body">

        <form method = "POST" action = "/account" id = "send_code_form">
            @csrf {{-- Diretiva para habilitar o formulário --}}

            {{-- Input escondido: o atributo value recebe o valor do parâmetro da URL --}}
            {{-- Após o cadastro, o usuário é redirecionado para cá, e seu ID é enviado pela URL --}}
            <input type = "text" name = "person_id" value = "{{ $id }}" class = "hidden"> 

            <div class = "form_row">
                <input type = "text" placeholder="Código recebido *" class = "input input_t1" name = "emailcode">
                <span class = "code_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>

            <div class = "form_row fr_button">
                <input type = "submit" value = "Confirmar cadastro" name = "button_form" class = "input input_t1 button_t1">
                {{-- Input escodido: para que a Action do IndexController Store possa lidar com diferentes formulários --}}
                <input type = "text" name = "form_type" value = "accountactivation" class = "hidden"> 
            </div>

        </form>

    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/account/login">Realizar acesso</a>
        </div>
        
    </div>

</div>
   

@endsection