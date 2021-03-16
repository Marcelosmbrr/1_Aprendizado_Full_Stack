<?php

    class File{

        private $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        //Recebe o comando INSERT e o nome do arquivo, que é um uniqid().extensão
        function setFile($sql, $novoNome){

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(":nome_arquivo", $novoNome);

            //Por ser um INSERT, não há estrutura para ser retornada
            //Enviamos apenas um true, para caso de sucesso de execução, e um false, para caso de falha
            if($stmt->execute()){
                return true;
                
            }else{
                return false;  
            }  

        }
    }

?>