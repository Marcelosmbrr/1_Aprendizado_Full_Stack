@extends("layouts.global")
@section("style_file", "outside_page.css")

@section("content")


<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1><i class="fas fa-file-import"></i> CADASTRO</h1>
    </div>

    <div class = "fc_row fc_body">

        <form method = "POST" action = "/account">
            @csrf {{-- Diretiva para habilitar o formulário --}}
            <div class = "form_row">
                <input type = "text" placeholder="Nome completo *" class = "input input_t1" name = "name">
                <span class = "name_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="Email *" class = "input input_t1" name = "email">
                <span class = "email_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="CPF *" class = "input input_t1" name = "cpf">
                <span class = "cpf_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="CEP *" class = "input input_t1" name = "cep">
                <span class = "cep_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "text" placeholder="Crie seu nome de usuário *" class = "input input_t1" name = "username">
                <span class = "username_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Crie a sua senha *" class = "input input_t1" name = "password">
                <span class = "password_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            <div class = "form_row">
                <input type = "password" placeholder="Confirme a sua senha *" class = "input input_t1" name = "confirmpassword">
                <span class = "confirmpassword_input_span">{{-- Aviso de erro no input --}}</span>
            </div>
            {{-- fr = form row--}}
            <div class = "form_row fr_button">
                <input type = "submit" value = "Cadastrar" name = "button_form" class = "input input_t1 button_t1">
                {{-- Para que a Action do IndexController Store possa lidar com diferentes formulários --}}
                <input type = "text" name = "form_type" value = "registration" class = "hidden">
            </div>
        </form>

    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/account/login">Realizar acesso</a>
        </div>

        <div class = "fc_footer_column">
            <a href = "/account/changepassword">Alterar a senha</a>
        </div>
        
    </div>

</div>


@endsection