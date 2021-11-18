@extends("layouts.main")
@section("style_file", "outside_page.css")

@section("content")


<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1>ALTERAR SENHA</h1>
    </div>

    <div class = "fc_row fc_body">

        <form method = "POST" action = "#">

            <div class = "form_row">
                <input type = "email" placeholder="Informe o seu email *" class = "input input_t1">
                <span class = "email_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Receber código" name = "code_button" class = "input input_t1 button_t1">
            </div>

        </form>

        <form method = "POST" action = "#">

            <div class = "form_row">
                <input type = "text" placeholder="Código recebido *" class = "input input_t1">
                <span class = "code_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Nova senha *" class = "input input_t1">
                <span class = "password_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Alterar a senha" name = "login_button" class = "input input_t1 button_t1">
            </div>

        </form>

    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/login">Realizar acesso</a>
        </div>

        <div class = "fc_footer_column">
            <a href = "/registration">Realizar cadastro</a>
        </div>
        
    </div>

</div>
   

@endsection