<?php

// MODEL "CORE"
// REUTILIZAÇÃO PARA ARQUIVOS MODEL - SERVE PARA REALIZAR A CONEXÃO COM O BANCO
// A CLASSE ABSTRATA É "INICIALIZADA" QUANDO É HERDADA

namespace MF\Model;
use App\Connection;

abstract class Model{

    protected $pdo;

    public function __construct(){

        $this->pdo = Connection::getConnection();

    }

}