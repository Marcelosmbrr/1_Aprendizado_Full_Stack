<!-- layouts é o nome da pasta, e app o nome do arquivo dela -->
@extends("layouts.app") 

<!-- Conteúdo extendido para o arquivo "app" da pasta layouts -->
@section("content")
    <h1>Conteúdo criado em nf.blade.php e exportado para app.blade.php </h1>
    <h1>{{ $desc }}</h1>
@endsection
