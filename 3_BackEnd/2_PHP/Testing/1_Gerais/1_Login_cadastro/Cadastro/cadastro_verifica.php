<?php

    session_start();
    require_once("Conexao/conexao.php");
    require_once("Classes/UserClass.php");

    //PRIMEIRO FILTRO
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

    //SEGUNDO FILTRO //PARA IMPEDIR XSS
    $usernamef = strip_tags($username);
    $senhaf = strip_tags($senha);

    if(!empty($usernamef) && !empty($senhaf)){

        //Instanciar objeto da classe User, usada para procurar usuários no banco
        //Enviamos o Objeto da classe PDO instanciado no arquivo conexao.php
        $userc = new User($pdo);

        //Chamar método SET da classe User, usado para cadastrar usuarios
        //Enviamos o nome de usuário e a senha 
        if($userc->setUsuario($usernamef, $senhaf)){

            //Se o método Set retornar true, significa que o INSERT funcionou
            //O usuário é enviado para a tela de login
            header("location: http://localhost:8000/");

        }else{

            //Se o método retornar false, significa que o INSERT FALHOU
            $_SESSION['erro_msg'] = "Erro no processo de cadastro";

            //Header direciona o usuário para o cadastro, novamente
            header("location: http://localhost:8000/Cadastro/cadastro.php");

        }

    }else{

        //Se retornar false, significa que uma, ou ambas as variáveis estão vazias
        $_SESSION['erro_msg'] = "Erro! Preencha os campos e tente novamente";

        //Header direciona o usuário para o cadastro, novamente
        header("location: http://localhost:8000/Cadastro/cadastro.php");

    }
            



























?>