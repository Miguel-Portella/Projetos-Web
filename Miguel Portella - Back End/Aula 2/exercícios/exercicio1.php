<?php

$num1 = readline("Digite um número: ");

$num2 = readline("Digite outro número: ");

if ($num1 > $num2) {
    echo "O primeiro número é maior que o segundo.";
}
elseif ($num1 < $num2) {
    echo "O primeiro número é menor que o segundo";
}
else{
    echo "Os números são iguais";

}

