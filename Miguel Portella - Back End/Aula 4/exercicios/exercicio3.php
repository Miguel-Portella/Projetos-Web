<?php

$num = readline("Digite um número: ");
$soma = 0;
$i = 1;
while(true) {
    if($i != $num){
        echo $i."+";
        $soma = $soma + $i;
    }
    else{
        echo $i;
        $soma = $soma + $i;
        break;
    }
    $i++;
} 

echo "=".$soma;