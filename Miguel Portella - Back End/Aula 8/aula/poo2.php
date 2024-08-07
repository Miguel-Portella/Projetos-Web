<?php

class Conta{
    public $saldo = 0;
    public $titular;

    function depositar($valor){
        $this->saldo += $valor;
    }
    function sacar($valor){
        if($this->saldo>0 &&  $this->saldo>=$valor){
            $this->saldo -= $valor;
        }else{
            echo "Saldo insulficiente!";
        }
    }
    function verSaldo(){
        echo "Saldo atual R$".$this->saldo;
    }
}

$cc = new Conta();
$cc->depositar(-20);
$cc->sacar(150);
$cc->verSaldo();