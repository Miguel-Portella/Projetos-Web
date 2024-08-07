<?php 

$num1 =  readline('Digite um número: ');
$num2 = readline('Digite outro número: ');
$soma = 0;
$i = 1;
if( $num1 <= $num2 ){
    while ($num1 <= $num2) {
        $soma = $soma + $num1;
        $num1 = $num1 + 1;
    }

}
else{
    echo 'Digite um valor válido';
}
echo $soma;