<?php 
$soma = 0;
foreach (range(1, 10) as $item) {
    $num = readline("Digite um número: ");
    $soma = $soma + $num;
}
echo $soma;