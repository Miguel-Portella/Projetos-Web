<?php 
$soma = 0;
$i = 1;
while($i < 11){
    $num = readline('Digite um número: ');
        if($num < 40){
            $soma = $soma + $num;
        }
    $i++;
}
echo $soma;