<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| ROTAS DA APLICAÇÃO WEB
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para o seu aplicativo. 
| Cada rota é gerenciada por um controlador, e também por um método específico dele
|
*/

// ==== ROTAS DE RENDERIZAÇÃO ==== //

// Essa rota, "/", é controlada pelo IndexController a partir do seu método "index"
Route::get('/', function(){
    return redirect('/account/login');
});

// Essa rota, "/account/login", é controlada pelo IndexController a partir do seu método "index"
Route::get('/account/login', [IndexController::class, "index"]);

// Essa rota, "/account/registration", é controlada pelo IndexController a partir do seu método "registration"
Route::get('/account/registration', [IndexController::class, "registration"]);

// Essa rota, "/account/registrationconfirmation", é controlada pelo IndexController a partir do seu método "registrationConfirmation"
Route::get('/account/activation', [IndexController::class, "accountActivation"]);

// Essa rota, "/account/changepassword", é controlada pelo IndexController a partir do seu método "changePassword"
Route::get('/account/changepassword', [IndexController::class, "changePassword"]);

// Rotas protegidas com o Middleware "session_validate"
Route::middleware("session_validate")->group(function(){

// Essa rota, "/system/home", é controlada pelo IndexController a partir do seu método "systemHome"
// A rota é protegida com Middleware criado "session_validate"
Route::get('/system/home', [HomeController::class, "index"]);

});


// ==== ROTAS DE PROCESSAMENTO DE EVENTOS ==== //

// Essa rota, "/account", é controlada pelo IndexController a partir do seu método "store"
// Serve para processar requisições das páginas externas do sistema
Route::post('/account', [IndexController::class, "store"]);

// Essa rota, "/account/logout", é controlada pelo HomeController a partir do seu método "logout"
// Serve para realizar as rotinas da saída do usuário do sistema
Route::get('/account/logout', [HomeController::class, "logout"]);

