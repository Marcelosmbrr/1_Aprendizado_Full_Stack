<?php

    class Pessoa{

        private $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        //OS MÉTODOS A SEGUIR SÃO CHAMADOS NOS ARQUIVOS DE SCRIPT E APENAS APÓS TODOS OS PROCEDIMENTOS DE VERIFICAÇÃO DE DADOS

        //Recebe um valor para indentificar se o SELECT será geral, ou de um registro específico
        function getPessoas($get_type, $id){

            if($get_type == "select_all"){

                $sql = "SELECT * FROM pessoas";

                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();

                //rowCount retorna o número de linhas afetadas pela instrução SQL
                if($stmt->rowCount() > 0){

                    //Neste caso o rowCount é superior a 0
                    //Significa que existem registros no banco de dados

                    //FetchAll() retorna diversos registros
                    //O modo passado transformar o retorno um array associativo
                    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    return $registros;

                }else{
                    //Retornamos false para indicar que o usuário e senha digitados não foram encontrados em um mesmo registro do BD
                    return false;
                }

            }else if($get_type == "select_notall"){

                $sql = "SELECT * FROM pessoas WHERE id = :id";

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                //Se o número de linhas afetadas for maior que zero (será apenas uma linha, na verdade)
                if($stmt->rowCount() > 0){

                    //Tornamos o registro retornado um array associativo
                    $registro = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $registro;

                }else{

                    return false;


                }
            } 
        }

        //Este método é usado para INSERT e UPDATE
        function setPessoa($set_type, $id, $nome, $telefone, $email){

            if($set_type == "sql_insert"){

                $sql = "INSERT INTO pessoas VALUES (DEFAULT, :nome, :telefone, :email)";

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":email", $email);
                if($stmt->execute()){

                    //Com o INSERT realizado com sucesso, retornamos true
                    return true;

                }else{ //Se o INSERT falhar

                    return false;

                }

            }else if($set_type == "sql_update"){

                $sql = "UPDATE pessoas SET id = :id, nome = :nome, telefone = :telefone, email = :email WHERE id = :id";

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":email", $email);

                if($stmt->execute()){

                    //Com o UPDATE realizado com sucesso, retornamos true
                    return true;

                }else{ //Se o UPDATE falhar

                    return false;

                }

            }

        }

        function deletePessoa($id){

            $sql = "DELETE FROM pessoas WHERE id = :id";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            if($stmt->execute()){

                //Com o DELETE realizado com sucesso, retornamos true
                return true;

            }else{ //Se o DELETE falhar

                return false;

            }

        }

    }

    
    

















?>