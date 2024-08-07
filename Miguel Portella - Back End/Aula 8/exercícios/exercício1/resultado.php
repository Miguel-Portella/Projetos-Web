<?php


class Calculo{
    function area($l1, $l2){
        return $l1 * $l2;
    }
    function perimetro($l1, $l2){
        return $l1 * 2 + $l2 * 2;
    }
}


$lado1 =  $_POST['lado1'];
$lado2 = $_POST['lado2'];

$c = new Calculo();

print "A área desse retângulo é: ".$c->area($lado1,$lado2)."<br><br>
E o perimetro é: ".$c->perimetro($lado1,$lado2); ?>
<style>
    *{
        font-family: roboto;
        font-size: 100px;
    }
</style>
