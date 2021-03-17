<?php

    namespace Classes;
    use Classes\Sql;

    class Usuario{

        private $idusuario;
        private $nome;
        private $senha;
        private $dtcadastro;

    
        public function getIdusuario()
        {
            return $this->idusuario;
        }
 
        public function setIdusuario($idusuario)
        {
            $this->idusuario = $idusuario;

        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;

        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;          
        }

        public function getDtcadastro()
        {
            return $this->dtcadastro;
        }

        public function setDtcadastro($dtcadastro)
        {
            $this->dtcadastro = $dtcadastro;

        }

        public function loadbyID($id){

            $obj = new Sql();
            $query = "SELECT * FROM usuarios WHERE idusuarios = :ID"; //Query SQL
            $params = array(":ID"=>$id); //Especificações/parâmetros da Query
            $return_select = $obj->select($query, $params); //Retorna um array associativo dos dados, ou false

            //Se o retorno do método select não for false
            if($return_select){
                //Se não for false o Count também não será, por via de regra
                if(count($return_select) > 0){

                    //Variável row será igual a primeira, e única linha do array retornado
                    //Será um vetor necessariamente porque no banco de dados não existem dois registros de mesmo id
                    $row = $return_select[0];

                    $this->setIdusuario($row["idusuarios"]);
                    $this->setNome($row["nome"]);
                    $this->setSenha($row["senha"]);
                    $this->setDtcadastro($row["dtcadastro"]);

                }
            }else{

                return $return_select;

            }
        
        }

        //Método mágico de impressão
        public function __toString(){

            return "Certo";
            

        }
    }





?>