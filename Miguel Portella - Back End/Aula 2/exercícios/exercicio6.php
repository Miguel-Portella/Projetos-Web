<?php

$num1 = readline('Digite um número: ');
$num2 = readline('Digite outro número: ');

$operacao =  readline("Qual operação dejesa fazer? \n adição - 1 \n subtração - 2 \n divisão - 3 \n multiplicação - 4");

if ($operacao == 1) {
    echo $num1 + $num2;
} else if ($operacao == 2) {
echo $num1 - $num2;
}
else if ($operacao == 3) {
    echo $num1 / $num2;
}
else if ($operacao == 4) {
    echo $num1 * $num2;
}
else{
    echo "Digite um valor vlido";
}