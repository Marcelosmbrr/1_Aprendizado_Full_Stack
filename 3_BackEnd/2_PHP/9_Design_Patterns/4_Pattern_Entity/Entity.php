<?php

/*

==== PADRÃO ENTITY ====

- Considerando o conceito, e a prática, uma classe "Entity" é normalmente associada a registros das entidades da tabela
- Nos bancos de dados, "entidade" é um nome alternativo para "tabela"
- Tabelas com registros que devem ser persistidos, e que são únicos, se encaixem perfeitamente com o padrão Entity
- Entenda uma classe Entity como uma representação do domínio de uma tabela 

*/


// EXEMPLO

class Person {

    private $person_id;
    private $person_name;
    private $person_sex;
    private $person_age;

    public function __construct(array $data){

        $this->person_id = $data[0];
        $this->person_name = $data[1];
        $this->person_sex = $data[2];
        $this->person_age = $data[3];

    }

    public function getID() :int {

        return $this->person_ID;

    }

    public function changePersonID(int $newID) :void {

        $this->person_id = $newID;

    }

    public function getPersonName() :string {

        return $this->person_ID;

    }

    public function changePersonName(string $newName) :void {

        $this->person_name = $newName;

    }

    public function getPersonSex() :string {
        
        return $this->person_ID;

    }

    public function changePersonSex(string $newSex) :void {
        
        $this->person_sex = $newSex;

    }

    public function getPersonAge() :string {
        
        return $this->person_ID;

    }

    public function changePersonAge(string $newAge) :void {
        
        $this->person_age = $newAge;

    }


}