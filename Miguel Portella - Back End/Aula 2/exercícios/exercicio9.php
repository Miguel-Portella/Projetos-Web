<?php
$salario = readline("Digite seu salário fixo: ");
$venda = readline("Digite o valor da venda: ");

if ($venda <= 1500) {
    echo "A comissão será de". $venda * 3 / 100;
    echo "Seu salário é R$$salario adicinando a comissão ficará". $salario+$venda * 3 / 100;
}
else{
    echo "A comissão será de". $venda * 5 / 100;
    echo "Seu salário é R$$salario adicinando a comissão ficará". $salario+$venda * 5 / 100;
}


