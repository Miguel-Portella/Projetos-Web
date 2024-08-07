<?php

//class Fruta{
//   public $nome;

//}
//$laranja= new Fruta();
//$laranja ->nome = "Laranja Pera";
//echo $laranja->nome.'<br>';


#################

class Fruta2{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar(){
        return "Nome: {$this->nome}<br>
        Cor: {$this->cor}<br>
        Peso: {$this->peso}gr";
    }



}


$maca = new Fruta2();
$maca->nome = "Maça Argentina";
$maca->cor = "Vermelha";
$maca->peso =  100;

echo $maca->apresentar();