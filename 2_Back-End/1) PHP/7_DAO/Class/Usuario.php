<?php

    //Essa classe é acessível por esse namespace
    namespace Classes;

    use Classes\Sql;

    class Usuario{

        private $idusuario;
        private $username;
        private $senha;
        private $dtcadastro;

        //Métodos GETTER e SETTER
        
        private function getIdusuario()
        {
            return $this->idusuario;
        }

        private function setIdusuario($idusuario)
        {
            $this->idusuario = $idusuario;
            return $this;
        }

        private function getUsername()
        {
             return $this->username;
        }

        private function setUsername($username)
        {
            $this->username = $username;
            return $this;
        }

        
        private function getSenha()
        {
            return $this->senha;
        }

        
        private function setSenha($senha)
        {
            $this->senha = $senha;
            return $this;
        }

        
        private function getDtcadastro()
        {
            return $this->dtcadastro;
        }

        
        private function setDtcadastro($dtcadastro)
        {
            $this->dtcadastro = $dtcadastro;
            return $this;
        }

        /////////MÉTODOS DE ALTO NÍVEL, ACIONADOS PELO USUÁRIO, ISTO É, A PARTIR DO INDEX///////////

        //Este método serve para realizar um SELECT de um registro apenas
        public function loadByid($id){

            //Instanciamos um objeto da classe SQL
            //A instância, sabemos, cria a conexão pelo método construct da classe SQL
            $sql = new Sql();

            //Chamamos o método SELECT da classe SQL enviando o comando SQL e o parâmetro  
            $results = $sql->select("SELECT * FROM usuarios WHERE idusuario = :ID", array(":ID"=>$id));

            if(count($results) > 0){

                //Aqui preenchemos os atributos
                //É como se os atributos funcionassem como pontos de coleta
                //Recebem os valores, para que em seguida, outro método do código os colete
                $this->setIdusuario($results["idusuario"]);
                $this->setUsername($results["username"]);
                $this->setSenha($results["senha"]);
                $this->setDtcadastro(new Date($results["dtcadastro"])); //Esse atributo recebe uma instância da classe Date

            }
        }

        //Com a função anterior, preenchemos os atributos mas não os retornamos para o index
        //Com esta, agora, iremos retornar os dados pesquisados em forma de JSON
        //Essa função é um método mágico https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.tostring
        //Ela não é chamada diretamente, veja como ela é executada: https://www.rafaelwendel.com/2011/11/metodo-magico-tostring/
        public function __toString(){

            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "username"=>$this->getUsername(),
                "senha"=>$this->getSenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));

        }





    }

















?>