@extends("layouts.main")
@section("style_file", "outside_page.css")

@section("content")


<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1>CADASTRO</h1>
    </div>

    <div class = "fc_row fc_body">

        <form method = "POST" action = "#">
            <div class = "form_row">
                <input type = "text" placeholder="Nome completo *" class = "input input_t1">
                <span class = "name_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="Email *" class = "input input_t1">
                <span class = "email_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="CPF *" class = "input input_t1">
                <span class = "cpf_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="CEP *" class = "input input_t1">
                <span class = "cep_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="Crie seu nome de usuário *" class = "input input_t1">
                <span class = "username_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Crie a sua senha *" class = "input input_t1">
                <span class = "password_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Confirme a sua senha *" class = "input input_t1">
                <span class = "confirmpassword_input_span">{{-- Aviso de erro de digitação --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Cadastrar" name = "login_button" class = "input input_t1 button_t1">
            </div>
        </form>

    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/login">Realizar acesso</a>
        </div>

        <div class = "fc_footer_column">
            <a href = "/changepassword">Alterar a senha</a>
        </div>
        
    </div>

</div>


@endsection