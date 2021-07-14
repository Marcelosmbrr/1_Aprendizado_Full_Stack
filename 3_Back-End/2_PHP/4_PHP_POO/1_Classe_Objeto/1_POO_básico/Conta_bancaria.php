<?php

class Conta_bancaria {
    private $tipo;
    private $cpf;
    private $dono;
    public $num_conta;
    private $saldo;
    private $status;
    
    public function Conta_bancaria($tipo, $cpf, $dono, $num_conta, $saldo, $status){
        $this->tipo = $tipo;
        $this->cpf = $cpf;
        $this->dono = $dono;
        $this->num_conta = $num_conta;
        $this->saldo = $saldo;
        $this->status = $status;
    }
    function setNum_conta($num_conta): void {
        $this->num_conta = $num_conta;
    }
    function getNum_conta() {
        return $this->num_conta;
    }

    function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function getDono() {
        return $this->dono;
    }



    


}
