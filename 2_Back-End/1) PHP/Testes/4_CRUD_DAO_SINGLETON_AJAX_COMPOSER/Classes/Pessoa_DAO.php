<?php

    //Esta classe contém os métodos que serão chamados no index que caracterizam um CRUD
    //Além disso, ao invés de instanciar, com "new", em cada método um objeto da classe SQL_DAO, chamaremos o método estático da classe SQL_instance

    namespace Classes;
    use Classes\Sql_instance;
    use Classes\Sql_DAO;
    use DateTime;

    class Pessoa_DAO {

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

            //Query SQL
            $query = "SELECT * FROM usuarios WHERE idusuarios = :ID"; 

            //Especificações/parâmetros da Query
            $params = array(":ID"=>$id); 

            //Ao invés de instânciar um objeto da classe SQL_DAO para chamar o método SELECT, fazemos isso por intermédio da classe SQL_instance
            $instancia_sql = Sql_instance::getInstance(); 

            $return_select = $instancia_sql->select($query, $params);

            //Se o retorno do método select não for false
            if($return_select){
                //Se não for false o Count também não será, por via de regra
                if(count($return_select) > 0){

                    //Variável row será igual a primeira, e única linha do array retornado
                    //Será um vetor necessariamente porque no banco de dados não existem dois registros de mesmo id
                    $row = $return_select[0];

                    $this->setIdusuario($row["idusuarios"]);
                    $this->setNome($row["username"]);
                    $this->setSenha($row["senha"]);
                    $this->setDtcadastro(new DateTime($row["dtcadastro"]));

                }
            }else{

                return $return_select;

            }
  
        }


    //Método mágico de impressão
    public function __toString(){

        //IMPORTANTE SABER: 
        //Enviando apenas em forma de array, a impressão dos valores no index preserva a privacidade dos valores dos atributos
        //Enviando com json_encode() a privacidade dos valores é revelada
        //Portanto, em uma aplicação real, deveriam ser enviados para o index apenas alguns valores revelados, e não todos, como a senha, que é obviamente um valor sigiloso
        return json_encode(array(

            "idusuario"=>$this->getIdusuario(),
            "nome"=>$this->getNome(),
            "senha"=>$this->getSenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

        ));
        
    }

}


?>