@extends("layouts.global")
@section("style_file", "outside_page.css")

@section("content")


<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1><i class="fas fa-key"></i> ALTERAR SENHA</h1>
    </div>

    <div class = "fc_row fc_body">

        <form method = "POST" action = "/account" id = "send_code_form">
            @csrf {{-- Diretiva para habilitar o formulário --}}

            <div class = "form_row">
                <input type = "email" placeholder="Informe o seu email *" class = "input input_t1" name = "email">
                <span class = "email_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Enviar código" name = "form_send_code" class = "input input_t1 button_t1">
                {{-- Para que a Action do IndexController Store possa lidar com diferentes formulários --}}
                <input type = "text" name = "form_type" value = "sendemailcode" class = "hidden">
            </div>

        </form>

        <form method = "POST" action = "/account" class = "hidden">
            @csrf {{-- Diretiva para habilitar o formulário --}}

            <div class = "form_row">
                <input type = "text" placeholder="Código recebido *" class = "input input_t1" name = "emailcode">
                <span class = "code_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Nova senha *" class = "input input_t1" name = "newpassword">
                <span class = "newpassword_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Alterar a senha" name = "button_form" class = "input input_t1 button_t1">
                {{-- Para que a Action do IndexController Store possa lidar com diferentes formulários --}}
                <input type = "text" name = "form_type" value = "changepassword" class = "hidden"> 
            </div>

        </form>

    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/account/login">Realizar acesso</a>
        </div>

        <div class = "fc_footer_column">
            <a href = "/account/registration">Realizar cadastro</a>
        </div>
        
    </div>

</div>
   

@endsection