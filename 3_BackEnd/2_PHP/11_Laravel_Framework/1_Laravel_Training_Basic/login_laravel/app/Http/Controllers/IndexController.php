<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

// ACESSO AO MODEL
use App\Models\Person;

class IndexController extends Controller
{

    // Action responsável por retornar a view da rota "/account/login"
    public function index(){

        Session::forget("user_authenticated");
        return view("login");

    }


    // Action responsável por retornar a view da rota "account/activation"
    public function accountActivation(){

        // No Model, após o cadastro, o usuário é redirecionado para a rota dessa Action
        // Junto da rota, é enviado um query parameter de nome "id"
        // Seu valor é o ID do usuário, e que é necessária para a claúsula WHERE do SQL
        $param = request("id");

        return view("activation", ["id" => $param]);

    }

    // Action para recuperação dos dados de requisições POST dos formulários
    public function store(Request $request){

        $person = new Person();

        // Requisição do formulário de login
        if($request->form_type === "login"){

            // Recebe, em caso de sucesso, status 200 e o ID da pessoa
            $response = $person->personLogin($request);

            if($response->status() === 200){

                // Criação da sessão
                Session::put("user_authenticated", true);

                // Redirecionamento para a rota home com o query parameter "userid"
                return redirect("/system/home?id={$response->content()}");

            }else{

                // IMPRIME UMA MENSAGEM DE ERRO NO FORMULÁRIO
                // AJAX

            }
        
         // Requisição do formulário de registro
        }else if($request->form_type === "registration"){

            $response = $person->personRegistration($request);

            if($response->status() === 200){

                return redirect("/account/activation?id={$response->content()}");

            }else{

                // IMPRIME UMA MENSAGEM DE ERRO NO FORMULÁRIO
                // AJAX

            }
        
        // Requisição do formulário de ativação da conta
        }else if($request->form_type === "accountactivation"){

            $response = $person->personActiveAccount($request);

            if($response->status() === 200){

                return redirect("/account/login");

            }else{
                
               // IMPRIME MENSAGEM DE ERRO NO FORMULÁRIO
               // AJAX

            }

        }// Requisição do formulário de envio de código para alteração da senha
        else if($request->form_type === "sendemailcode"){

            $response = $person->personReceiveCode($request);

            if($response->status() === 200){

                // CÓDIGO FOI SALVO NO REGISTRO DO USUÁRIO E ENVIADO PARA O EMAIL DELE
                // LIBERA A PARTE DEBAIXO DO FORMULÁRIO DE ALTERAÇÃO DA SENHA
                // AJAX

            }else{
                
                // IMPRIME UMA MENSAGEM DE ERRO NO FORMULÁRIO
                // AJAX

            }
        
        // Requisição do formulário de alteração da senha
        }else if($request->form_type === "changepassword"){

            $response = $person->personChangePassword($request);

            if($response->status() === 200){

                return redirect("/account/login");

            }else{
                
               // IMPRIME MENSAGEM DE ERRO NO FORMULÁRIO
               // AJAX

            }
        
        
        }   
        

    }

    // ==== ACTIONS NÃO UTILIZADAS - FORAM SUBSTITUIDAS POR UMA ROTA DE VIEW ==================================================================== //

    // NÃO UTILIZADA 
    // Por ter esse único papel, de retornar uma view, ela não é utilizada, e sim uma rota especializada nisso, e que dispensa controladores // Route::view
    public function registration(){

        return view("registration");
    }

    // NÃO UTILIZADA 
    // Por ter esse único papel, de retornar uma view, ela não é utilizada, e sim uma rota especializada nisso, e que dispensa controladores // Route::view
    public function changePassword(){

        return view("changepassword");

    }

    // ================================================================================================================== //

}
