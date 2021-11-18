@extends("layouts.main") {{-- Layout utilizado --}}
@section("style_file", "inside_page.css") {{-- Arquivo de estilização utilizado --}}

{{-- Valor do Yield "content" no arquivo de Layout --}}
@section("content")

<h1> Valor do parâmetro: {{$param}}</h1>

    
@endsection