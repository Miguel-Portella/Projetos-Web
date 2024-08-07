<?php

class Conta{
    public $saldo= 1000.00;
    function depositar(){

    }


    function sacar(){

    }
}

class ContaCorente extends Conta{
    function transferir($valor){
        $this->saldo-=$valor;
    }
}
$cc = new ContaCorente();
$cc->transferir(250);
echo "Saldo: {$cc->saldo}";