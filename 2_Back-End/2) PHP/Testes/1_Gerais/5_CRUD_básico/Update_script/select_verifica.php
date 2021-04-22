<?php

    session_set_cookie_params(2,"/"); //duração da session
    session_start();
    require_once("Conexao/conexao.php");
    require_once("Classes/PessoaClass.php");

    //PRECISAMOS RECUPERAR OS VALORES DO REGISTRO QUE QUEREMOS EDITAR
    //PORTANTO, PRIMEIRO COMEÇAMOS COM UM MÉTODO DE SELECT
    if(isset($_GET["id_up"])){

        $id_update = $_GET["id_up"];

        //PRIMEIRO FILTRO
        $id_updatef = filter_input(INPUT_GET, "id_up", FILTER_SANITIZE_NUMBER_INT);

        //SEGUNDO FILTRO //PARA IMPEDIR XSS
        $id_updateff = strip_tags($id_updatef);

        //Instanciar um objeto para realizar um select
        $get_type = "select_notall";
        $obj = new Pessoa($pdo);
        $registro = $obj->getPessoas($get_type, $id_updateff);

        //Se o retorno do método getPessoas não for false, será o array associativo do registro afetado
        if($registro){

            //Criamos uma sessão para, em breve, utilizar os valores recuperados para preencher os inputs da interface de Update, no index.php
            $_SESSION["update_registro"] = $registro;
            
            //Para o texto do Alert de sucesso
            $_SESSION["sucesso"] = "Registro recuperado para a realização do Update!";

            //A página é recarregada
            header("location: http://localhost:8000");

        } else{

            //Se o método retornar false, significa que o UPDATE falhou
            $_SESSION['erro_msg'] = "Erro! O processo de edição do registro falhou!";

            //A página é recarregada
            header("location: http://localhost:8000");
        }

    }
    

?>