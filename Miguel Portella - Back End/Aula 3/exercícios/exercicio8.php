<?php 
$soma = 0;
foreach(range(1, 10) as $i){
    $num = readline('Digite um número: ');
        if($num < 40){
            $soma = $soma + $num;
        }

}
echo $soma;