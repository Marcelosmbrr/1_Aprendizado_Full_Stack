@extends("layouts.global") {{-- Layout utilizado --}}
@section("style_file", "outside_page.css") {{-- Arquivo de estilização utilizado --}}

{{-- Valor do Yield "content" no arquivo de Layout --}}
@section("content")

<div class = "formulary_container">

    {{-- fc = formulary container--}}
    <div class = "fc_row fc_header">
        <h1><i class="fas fa-home"></i> HOME</h1>
        <div class = "fc_row" style = "padding: 2rem; text-align: left;">
            <p style = "font-size: 1.5rem;">ID do usuário logado: {{$persondata[0]->id}}</p>
            <p style = "font-size: 1.5rem;">Username do usuário logado: {{$persondata[0]->username}}</p>
            <p style = "font-size: 1.5rem;">Email do usuário logado: {{$persondata[0]->email}}</p>
            <p style = "font-size: 1.5rem;">Nível de acesso do usuário logado: {{$persondata[0]->access}}</p>
            <p style = "font-size: 1.5rem;">Data da criação da conta: {{$persondata[0]->created_at}}</p>
            <p style = "font-size: 1.5rem;">Data da última atualização da conta: {{$persondata[0]->updated_at}}</p>
        </div>
    </div>

    <div class = "fc_row fc_body">

        <h1 style = "color: #fff; margin-top: 1rem; font-size: 2rem;"> </h1>
    
    </div>

    <div class = "fc_row fc_footer">

        {{-- fcf = fc_footer--}}
        <div class = "fc_footer_column">
            <a href = "/account/logout">Sair</a>
        </div>
        
    </div>

</div>

    
@endsection