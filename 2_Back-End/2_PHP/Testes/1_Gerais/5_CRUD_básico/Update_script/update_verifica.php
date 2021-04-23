<?php

    session_set_cookie_params(2,"/"); //duração da session
    session_start();
    require_once("Conexao/conexao.php");
    require_once("Classes/PessoaClass.php");

    if(isset($_POST["btn_update"])){

        //PRIMEIRO FILTRO
        $id = filter_input(INPUT_POST, "update_id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, "update_nome", FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, "update_telefone", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "update_email", FILTER_SANITIZE_STRING);

        //SEGUNDO FILTRO //PARA IMPEDIR XSS
        //O "f" no final denota que foram "filtrados"
        $idf = strip_tags($id);
        $nomef = strip_tags($nome);
        $telefonef = strip_tags($telefone);
        $emailf = strip_tags($email);

        if(!empty($idf) && !empty($nomef) && !empty($telefonef) && !empty($emailf)){

            //Para contar quantos caracteres tem o número de telefone informado
            $telefoneff = strlen($telefonef);

            //O número mínimo de caracteres de um telefone brasileiro é 10 
            if($telefoneff <= 12 && $telefoneff >=10){

                //Agora vamos filtrar o email 
                //Sobre a função usada: https://www.php.net/manual/en/function.filter-var.php
                if(filter_var($emailf, FILTER_VALIDATE_EMAIL)){

                    /////////////////////////////////////////////CASO OS VALORES PASSEM POR TODOS OS TESTES DE FILTRAGEM/////////////////////////////////////

                    //O "u" denota "update"
                    $pessoau = new Pessoa($pdo);
                    $set_type = "sql_update";


                    if($pessoau->setPessoa($set_type, $idf, $nomef, $telefonef, $emailf)){

                        //Se o método Set retornar true, significa que o UPDATE funcionou
                        //A página é recarregada
                        $_SESSION["sucesso"] = "Update realizado com sucesso!";
                        header("location: http://localhost:8000");

                    }else{

                        //Se o método retornar false, significa que o UPDATE falhou
                        $_SESSION['erro_msg'] = "Erro! O processo de update falhou";

                        //A página é recarregada
                        header("location: http://localhost:8000");

                    }

                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                }else{//Se a função filter_var() retornar false

                    $_SESSION['erro_msg'] = "Erro! O e-mail inserido é inválido";
                    //Recarrega a página
                    header("location: http://localhost:8000");

                }

            }else{ //Se o número de telefone tiver menos que 10 caracteres

                $_SESSION['erro_msg'] = "Erro! O número de telefone é inválido";
                //Recarrega a página
                header("location: http://localhost:8000");

            }
                   
        }else{//Se alguma das variáveis estiver vazia

            
            $_SESSION['erro_msg'] = "Erro! Preencha os campos e tente novamente";
            //Recarrega a página
            header("location: http://localhost:8000/");

        }

    }else{

        $_SESSION['erro_msg'] = "Erro! Tente novamente";
        //Recarrega a página
        header("location: http://localhost:8000/");

    }
    

?>