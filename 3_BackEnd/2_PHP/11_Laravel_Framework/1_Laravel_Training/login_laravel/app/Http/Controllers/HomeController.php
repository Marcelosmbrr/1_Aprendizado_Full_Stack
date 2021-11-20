<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

// ACESSO AO MODEL
use App\Models\Person;

class HomeController extends Controller
{
    
    // Action responsável por retornar a view da rota "/system/home"
    public function index(){

        // A rota "system/home" sempre terá um "query parameter" de nome "userid"
        // O valor desse parâmetro será o ID de registro do usuário logado
        // O ambiente interno da aplicação utilizará dados particulares do usuário logado
        // Esses dados serão buscados a partir do seu ID
        $paramIDPerson = request("id");

        $person = new Person();

        $response = $person->personLoadData($paramIDPerson);

        if($response->status() === 200){

            // O conteúdo vem como JSON
            $personData = $response->content();

            // O JSON dos dados é convertido pra um array que contém um objeto stdClass
            return view("home", ["persondata"=> json_decode($personData)]);

        }else{

            return redirect("/account/login")->with("Usuário inválido");

        }

    }

    // Action responsável pelos procedimentos de logout
    public function logout(){

        // Sessão do usuário é esquecida
        Session::forget("user_authenticated");

        // Redirecionamento para a página de login
        return redirect("/account/login");

    }

}
