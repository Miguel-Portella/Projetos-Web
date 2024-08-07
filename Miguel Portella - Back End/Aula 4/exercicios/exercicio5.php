<?php 
$soma = 0;
$i=0;
while(true) {
    if($i == 10){
        break;
    }
    $num = readline("Digite um número: ");
    $soma = $soma + $num;
    $i++;
}
echo $soma;