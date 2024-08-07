<?php

$num = readline("Digite um número: ");
$soma = 0;

foreach(range(1, $num) as $i) {
    if($i != $num){
        echo $i."+";
        $soma = $soma + $i;
    }
    else{
        echo $i;
        $soma = $soma + $i;
    }
} 

echo "=".$soma;