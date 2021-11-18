<?php

/*

==== PADRÃO REPOSITORY ====

- Esse padrão realiza operações CRUD, assim como faz o DAO
- A diferença é que sua estrutura não é genérica, mas adaptada ao domínio de negócio

*/

use PDO;

class PDOStudentRepository() {

    private PDO $conn;

    //Método mágico de construção
    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dao_teste", "root", "root");

    }

    // Carrega o estudante a partir da sua matrícula
    public function loadStudent(string $school_enrollment){


    }

    // Carrega todos os estudantes
    public function loadAllStudents(){


    }

    // Salva um novo estudante, recebendo seus dados de cadastro
    public function saveStudent(array $student_data){


    }

    // Remove um estudante do sistema a partir da sua matrícula
    public function removeStudent(string $school_enrollment){



    }

    // Edita o registro de um estudante a partir da sua matrícula, e com os novos dados
    public function editStudent(string $school_enrollment, array $data){


    }

}