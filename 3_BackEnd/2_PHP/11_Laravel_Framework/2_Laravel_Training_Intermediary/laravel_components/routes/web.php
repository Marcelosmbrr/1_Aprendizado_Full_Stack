<?php

use Illuminate\Support\Facades\Route;

/*

- Comando: php artisan make:component nome_componente
- Criada uma View e uma classe
- A classe gerencia os valores passados para a view, com o método construtor
- Retorna a view com o método render
- Para instanciar a classe da View basta digitar <x-nome_componente/>

*/

Route::get('/', function () {
    return redirect("/home");
});

Route::view('/home', 'home');
