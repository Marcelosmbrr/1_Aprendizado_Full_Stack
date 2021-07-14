<?php

    session_set_cookie_params(2,"/"); //duração da session
    session_start();
    require __DIR__ . "/Conexao/conexão.php";
    require __DIR__ . "/Classes/PessoaClass.php";

    if(isset($_POST["btn_delete"])){

        //PRIMEIRO FILTRO
        $id = filter_input(INPUT_POST, "delete_id", FILTER_SANITIZE_STRING);

        //SEGUNDO FILTRO //PARA IMPEDIR XSS
        //O "f" no final denota que foi "filtrado"
        $idf = strip_tags($id);

        if(!empty($idf)){

            /////////////////////////////////////////////CASO O VALOR TENHA PASSADO POR TODOS OS TESTES DE FILTRAGEM/////////////////////////////////////

            //O "d" denota "cadastro"
            $pessoad = new Pessoa($pdo);

            //Chamar método DELETE da classe Pessoa, usado para deletar registros
            //Enviamos o nome da pessoa, seu telefone, e o seu email
            if($pessoad->deletePessoa($idf)){

                //Se o método Set retornar true, significa que o DELETE FUNCIONOU
                //A página é recarregada
                $_SESSION["sucesso"] = "O registro foi excluído com sucesso!";
                header("location: http://localhost:8000");

            }else{


                $_SESSION['erro_msg'] = "Erro! O processo de exclusão do registro falhou";
                //A página é recarregada
                header("location: http://localhost:8000/Cadastro/cadastro.php");

            }

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        }else{

            $_SESSION['erro_msg'] = "Erro! Preencha o campo e tente novamente";
            //Recarrega a página
            header("location: http://localhost:8000");

        }
        
    }

?>