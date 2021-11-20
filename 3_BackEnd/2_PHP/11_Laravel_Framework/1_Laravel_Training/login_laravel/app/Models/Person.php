<?php

/*

- Esse é o Model que lida com as requisições que envolvem a tabela "Person" do banco de dados
- A tabela que o Model é responsável deve ser definida com o atributo protected $table 
- Ele, assim como os outros Models, realizam as operações com o Eloquent ORM
- Foi escolhido, aqui, para a semântica dos métodos, o padrão Repository ao invés do DAO

- Cada método recebe um objeto Request, que é enviado a partir do Controller
- Cada Controller, de uma rota de requisição, tem uma Action chamada "Store"
- É nessa Action que o objeto Request é recuperado, a instância do Model realizada, e seus métodos invocados


*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use app\Mail\SendMailUser;
use Illuminate\Http\Response;

class Person extends Model
{

    protected $table = 'Persons';

    use HasFactory;

    // Método para nutrir a view home com os dados do usuário logado
    public function personLoadData($personID){

        try{

            // Contador: registro que possui o username informado e esteja ativado
            $count = Person::where('id', $personID)->count();

            if($count === 1){

                $personData = Person::where('id', $personID)->get();

                return response($personData, 200);

            }else{

                return response("Error", 500);

            }


        }catch(\Exception $e){

            return response("Error", 500);

        }

    }

    // Método para processar a requisição de login de uma pessoa
    // Recebe o objeto Request do método "Store" do respectivo Controller
    public function personLogin(Request $request){

        try{

            // Contador: registro que possui o username informado e esteja ativado
            $count = Person::where('username', $request->username)->where("status", true)->count();

            if($count === 1){

                $personData = Person::where('username', $request->username)->get();

                if(password_verify($request->password, $personData[0]["password"])){

                    return response($personData[0]["id"], 200);

                }else{

                    // Senha incorreta
                    return response("Usuário ou senha incorretos!", 500);

                }
 
            }else{

                // Username não existe e/ou a conta não está ativada
                return response("Usuário ou senha incorretos!", 500);

            }

        }catch(\Exception $e){
            
            echo "Erro: ".$e->getMessage();  

        }

    }

    // Método para processar a requisição de cadastro de uma pessoa
    // Recebe o objeto Request do método "Store" do respectivo Controller
    public function personRegistration(Request $request){

        try{


            // Confirmação do input "confirmação da senha"
            if($request->password === $request->confirmpassword){

                $this->name = $request->name;
                $this->email = $request->email;
                $this->cpf = $request->cpf;
                $this->cep = $request->cep;
                $this->username = $request->username;
                $this->person_ip = $request->ip();

                $this->password = password_hash($request->password, PASSWORD_DEFAULT);

                $this->save();

                // SIMULAÇÃO
                // Código gerado -> salvo no campo "code" -> enviado para o email
                $this->code = "TESTE";

                $this->save();

                // Usuário foi salvo
                // O campo "status" do registro é false
                // Precisa ativar a conta com o código que foi enviado para o e-mail dele
                // É redirecionado para a rota de confirmação da conta
                // O redirecionamento é realizado no controller

                // Retorna o ID do usuário cadastrado como conteúdo, e o status 200
                return response($this->id, 200);
                
            }else{

                return response("Erro! Confira os dados e tente novamente!", 500);
               
            }
            
        }catch(\Exception $e){
            
            //echo "Erro: ".$e->getMessage();  
            return response("Erro! Confira os dados e tente novamente!", 500);

        }

    }

    // Método para processar a requisição de ativação da conta de uma pessoa
    // Recebe o objeto Request do método "Store" do respectivo Controller
    public function personActiveAccount(Request $request){

        try{

            $count = Person::where('code', $request->emailcode)->where("id", $request->person_id)->count();

            if($count === 1){

                Person::where('code', $request->emailcode)
                ->where("id", $request->person_id)
                ->update(['status' => true]);

                return response("success", 200);

            }else{

                return response("Código inválido", 500);

            }
            
            
        }catch(\Exception $e){
            
            //echo "Erro: ".$e->getMessage();  
            return response("Erro! Tente novamente!");
        }

    }

    // Método para processar a requisição de envio de código para alteração da senha
    // Recebe o objeto Request do método "Store" do respectivo Controller
    public function personReceiveCode(Request $request){

        try{

            // Contador: registro cujo campo e-mail tenho o email informado
            $count = Person::where('email', $request->email)->count();

            if($count === 1){

                // EMAIL EXISTE
                // INSERIR CÓDIGO NO REGISTRO CUJO EMAIL É IGUAL AO DIGITADO
                // ENVIAR EMAIL COM O CÓDIGO

                return response("success", 200);


            }else{

                return response("Email não registrado", 500);

            }

        }catch(\Exception $e){
            
            //echo "Erro: ".$e->getMessage();  
            return response("Erro! Tente novamente!", 500);
        }
        
    }

    // Método para processar a requisição de alteração de senha de uma pessoa
    // Recebe o objeto Request do método "Store" do respectivo Controller
    public function personChangePassword(Request $request){

        try{

            $passhash = password_hash($request->password, PASSWORD_DEFAULT);

            $count = Person::where('code', $request->emailcode)->count();

            if($count === 1){

                Person::where('code', $request->emailcode)
                ->update(['password' => $passhash]);

                // Resposta para o Controller
                return response("Usuário ou senha incorretos!", 200);

            }else{

                // Resposta para o Controller
                return response("Código inválido!", 500);

            }

        }catch(\Exception $e){

            //echo "Erro: ".$e->getMessage(); 
            return response("Erro! Tente novamente!", 500); 

        }
        
    }

    public function personChangeProfile(Request $request){

        // Ação realizada pelo usuário dentro do sistema

    }

    
}
