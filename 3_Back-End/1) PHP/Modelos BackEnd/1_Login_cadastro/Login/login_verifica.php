<?php

    session_start();
    require_once("conexao.php");
    require_once("Classes/UserClass.php");

    //Utilizar filter_input, ao invés de isset(), garante um nível a mais de segurança
    //Esta função, ao invés de isset, pode filtrar o valor segundo algumas especificações passadas
    //Ver: https://www.php.net/manual/pt_BR/function.filter-input.php //https://www.php.net/manual/en/filter.filters.php
    $btn_login = filter_input(INPUT_POST, "login_btn_press", FILTER_SANITIZE_STRING);

    if($btn_login){

        $usuario = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);

        if(!empty($usuario) && !empty($senha)){

            //A senha do banco deve ser criptografada
            //Ver em: https://www.php.net/manual/pt_BR/function.password-hash.php
            //Para encriptografar: password_hash($senha, PASSWORD_BCRYPT); 

            //Instanciar objeto da classe User, usada para procurar usuários no banco
            //Enviamos o Objeto da classe PDO instanciado no arquivo conexao.php
            $user = new User($pdo);

            //Chamar método GET da classe User
            //Enviamos o nome de usuário e a senha 
            if($user->getUsuario($usuario, $senha)){

                //Se o método Get retornar true, significa que o usuário e senha foram encontrados no banco, em um mesmo registro (linha)
                if(isset($_SESSION['nome_usuario'])){

                    //Se existir a sessão que recebe o nome de usuário do campo 'username' do banco de dados //Operação realizada no arquivo da classe User
                    //Somos redirecionados para a página do sistema
                    header("location: http://localhost:8000/Login/sistema.php");

                }

            }else{

                $_SESSION['erro_msg'] = "Login e/ou senha incorretos!";
                header("location: http://localhost:8000/");

            }

        }

    }else{

        $_SESSION['erro_msg'] = "Login não realizado!";

        //Header direciona o usuário para a aplicação localizada em um endereço especificado
        header("location: http://localhost:8000/");

    }


?>