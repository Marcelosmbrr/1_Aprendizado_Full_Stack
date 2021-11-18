@extends("layouts.main") {{-- Layout utilizado --}}
@section("style_file", "outside_page.css") {{-- Arquivo de estilização utilizado --}}

{{-- Valor do Yield "content" no arquivo de Layout --}}
@section("content")

    <div class = "formulary_container">

        {{-- fc = formulary container--}}
        <div class = "fc_row fc_header">
            <h1>ACESSAR</h1>
        </div>

        <div class = "fc_row fc_body">

            <form method = "POST" action = "#">
                <div class = "form_row">
                    <input type = "text" placeholder="Nome de usuário *" class = "input input_t1">
                    <span class = "username_input_span">{{-- Aviso de erro de digitação --}}</span>
                </div>
                <div class = "form_row">
                    <input type = "password" placeholder="Senha *" class = "input input_t1">
                    <span class = "password_input_span">{{-- Aviso de erro de digitação --}}</span>
                </div>
                {{-- fr = form row--}}
                <div class = "form_row fr_button">
                    <input type = "submit" value = "Acessar" name = "login_button" class = "input input_t1 button_t1">
                </div>
            </form>

        </div>

        <div class = "fc_row fc_footer">

            {{-- fcf = fc_footer--}}
            <div class = "fc_footer_column">
                <a href = "/registration">Realizar cadastro</a>
            </div>

            <div class = "fc_footer_column">
                <a href = "/changepassword">Alterar a senha</a>
            </div>
            
        </div>

    </div>
    
@endsection
