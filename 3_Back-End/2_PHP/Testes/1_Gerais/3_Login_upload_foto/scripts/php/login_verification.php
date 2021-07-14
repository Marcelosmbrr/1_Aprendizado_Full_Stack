<?php

    session_start();
    require_once("conection.php");
    require_once("../../class/Classperson.php");

    if(isset($_POST['login_btn'])){

        $usuario = filter_input(INPUT_POST, "username_login", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "password_login", FILTER_SANITIZE_STRING);

        if(!empty($usuario) && !empty($senha)){

            //Pesquisa
            //Retorna o id, o username e a senha criptografa do registro cujo username é igual ao passado no login
            $sql = "SELECT `id`,`username`, `pass`, `user_photo` FROM usuarios WHERE `username` = :username";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":username", $usuario);
            $stmt->execute();

            //rowCount retorna o número de linhas afetadas pela instrução SQL
            if($stmt->rowCount() == 1){

                //Fetch() transforma a linha afetada em um array, o que é ideal para aplicações de login //Seu alternativo é Fetch_all()
                $registro = $stmt->fetch();

                //Agora, se a senha digitada no login for compátivel com a senha criptografica do registro encontrado, o usuário-senha são válidos
                if(password_verify($senha, $registro["pass"])){

                    //Criamos uma sessão para recuperar cada valor de cada campo do registro do BD, exceto a senha, claro
                    $_SESSION['iduser'] = $registro['id'];
                    $_SESSION['user'] = $registro['username'];
                    $_SESSION['user_img'] = $registro['user_photo']; //username.extension

                    //Somos redirecionados para a página do sistema
                    header("location: ../../sistema.php");
                    
                }else{

                    $_SESSION['login_error'] = "Senha incorreta! Tente novamente!";
    
                    header("location: ../../index.php");

                }

                }else{

                    $_SESSION['login_error'] = "Usuário ou senha incorretos! Tente novamente!";
    
                    header("location: ../../index.php");

            }

        }else{

            $_SESSION['login_error'] = "Preencha todos os campos!";
    
            header("location: ../../index.php");

        }

    }else{

        $_SESSION['login_error'] = "Área restrita!";
    
        header("location: ../../index.php");

    }



?>