<?php

    //Esta classe contém os métodos que serão chamados no index que caracterizam um CRUD
    //Além disso, ao invés de instanciar, com "new", em cada método um objeto da classe SQL_DAO, chamaremos o método estático da classe SQL_instance

    namespace Classes;
    use Classes\Sql_instance;
    use Classes\Sql_DAO;
    use DateTime;

    class Pessoa_DAO {

        private $id;
        private $nome;
        private $telefone;
        private $email;

    
        public function getId()
        {
            return $this->id;
        }
 
        public function setId($id)
        {
            $this->id = $id;

        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;

        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;          
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($dtcadastro)
        {
            $this->dtcadastro = $dtcadastro;

        }

        public function loadbyID($id){

            //Query SQL
            $query = "SELECT * FROM pessoas WHERE id = :ID"; 

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

                    $this->setIdusuario($row["id"]);
                    $this->setNome($row["nome"]);
                    $this->setSenha($row["telefone"]);
                    $this->setDtcadastro($row["email"]);

                }
            }else{

                return $return_select;

            }
  
        }

        public static function loadAll(){

            //Query SQL
            $query = "SELECT * FROM pessoas"; 

            //Especificações/parâmetros da Query
            $params = array(null); 

            //CONTINUE///////

        }

        public function deletebyID($id){

             //Query SQL
             $query = "DELETE FROM pessoas WHERE id = :ID";; 

             //Especificações/parâmetros da Query
             $params = array(":ID"=>$id); 
 
             //CONTINUE//////

        }

        public function updatebyID($id, $nome, $telefone, $email){

             //Query SQL
             $query = "UPDATE pessoas SET id = :id, nome = :nome, telefone = :telefone, email = :email WHERE id = :id"; 

             //Especificações/parâmetros da Query
             $params = array(":ID"=>$id); 
 
             //CONTINUE//////

        }

        public function cadastrarPessoa($nome, $telefone, $email){

            //Query SQL
            $query = "INSERT INTO pessoas VALUES (DEFAULT, :nome, :telefone, :email)"; 

            //Especificações/parâmetros da Query
            $params = array(":nome"=>$nome, ":telefone"=>$telefone, ":email"=>$email); 

            //CONTINUE

        }


    //Método mágico de impressão
    public function __toString(){

        //IMPORTANTE SABER: 
        //Enviando apenas em forma de array, a impressão dos valores no index preserva a privacidade dos valores dos atributos
        //Enviando com json_encode() a privacidade dos valores é revelada
        //Portanto, em uma aplicação real, deveriam ser enviados para o index apenas alguns valores revelados, e não todos, como a senha, que é obviamente um valor sigiloso
        return json_encode(array(

            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "telefone"=>$this->getTelefone(),
            "email"=>$this->getEmail()

        ));
        
    }

}


?>