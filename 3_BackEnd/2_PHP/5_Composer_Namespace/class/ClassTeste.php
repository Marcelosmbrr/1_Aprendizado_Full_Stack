<?php
//Esse código é acessível pelo uso do namespace Classes
namespace Classes;

//Como iremos utilizar herança, precisamos ter acesso a outra classe
//Por isso precisamos usar o namespace
use Classes;

class ClassTeste extends ClassIntegracao{

    public function __construct(){
        echo "ClassTeste funcionando";
        echo "<hr>";
        echo $this->Integrar();
    }
}















?>