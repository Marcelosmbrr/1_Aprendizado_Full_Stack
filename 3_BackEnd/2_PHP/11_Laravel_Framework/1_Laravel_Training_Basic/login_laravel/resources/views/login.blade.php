@extends("layouts.global") {{-- [view_subpasta].[nome_arquivo] || Layout utilizado --}}
@section("style_file", "outside_page.css") {{-- Arquivo de estilização utilizado --}}

{{-- Valor do Yield "content" no arquivo de Layout --}}
@section("content")

    <div class = "formulary_container">

        {{-- fc = formulary container--}}
        <div class = "fc_row fc_header">
            <h1><i class="fas fa-sign-in-alt"></i> ACESSAR</h1>
        </div>

        <div class = "fc_row fc_body">

            <form method = "POST" action = "/account">
                @csrf {{-- Diretiva para habilitar o formulário --}}
                
                <div class = "form_row">
                    <input type = "text" placeholder="Nome de usuário *" class = "input input_t1" name = "username">
                    <span class = "username_input_span">{{-- Aviso de erro no input --}}</span>
                </div>
                <div class = "form_row">
                    <input type = "password" placeholder="Senha *" class = "input input_t1" name = "password">
                    <span class = "password_input_span">{{-- Aviso de erro no input --}}</span>
                </div>
                {{-- fr = form row--}}
                <div class = "form_row fr_button">
                    <input type = "submit" value = "Acessar" name = "button_form" class = "input input_t1 button_t1">
                    {{-- Para que a Action do IndexController Store possa lidar com diferentes formulários --}}
                    <input type = "text" name = "form_type" value = "login" class = "hidden">
                </div>
            </form>

        </div>

        <div class = "fc_row fc_footer">

            {{-- fcf = fc_footer--}}
            <div class = "fc_footer_column">
                <a href = "/account/registration">Realizar cadastro</a>
            </div>

            <div class = "fc_footer_column">
                <a href = "/account/changepassword">Alterar a senha</a>
            </div>
            
        </div>

    </div>
    
@endsection
