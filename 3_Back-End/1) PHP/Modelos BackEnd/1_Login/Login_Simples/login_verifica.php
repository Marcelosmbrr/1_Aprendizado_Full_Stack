<?php

    session_start();
    require_once("conexao.php");
    require_once("UserClass.php");

    //Utilizar filter_input, ao invés de isset(), garante um nível a mais de segurança
    //Esta função, ao invés de isset, pode filtrar o valor segundo algumas especificações passadas
    //Ver: https://www.php.net/manual/pt_BR/function.filter-input.php //https://www.php.net/manual/en/filter.filters.php
    $btn_login = filter_input(INPUT_GET, "login_btn_press", FILTER_SANITIZE_STRING);

    if($btn_login){

        $usuario = filter_input(INPUT_GET, "username", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_GET, "pass", FILTER_SANITIZE_STRING);

        if(!empty($usuario) && !empty($senha)){

            //Para criptograr a senha
            //Ver em: https://www.php.net/manual/pt_BR/function.password-hash.php
            $pass_hash = password_hash($senha, PASSWORD_DEFAULT); //Copiar a senha criptografada para inserir no banco de dados, na coluna de senha

            //Pesquisar usuário no BD
            //Instanciar objeto da classe User
            $user = new User($pdo);

            //Chamar método da classe User
            //Enviamos o nome de usuário e a senha que digitou na forma de hash
            if($user->getUsuario($usuario, $pass_hash)){

                //Se o método Get retornar true, significa que o usuário e senha foram encontrados no banco, em um mesmo registro (linha)
                if(isset($_SESSION['nome_usuario'])){

                    //Se existir a sessão que recebe o nome de usuário do campo 'username' do banco de dados //Operação realizada no arquivo da classe User
                    //Somos redirecionados para a página do sistema
                    header("location: http://localhost:8000/sistema.php");

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