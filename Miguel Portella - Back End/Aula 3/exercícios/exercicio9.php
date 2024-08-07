<?php 

$num1 =  readline('Digite um número: ');
$num2 = readline('Digite outro número: ');
$soma = 0;
if( $num1 <= $num2 ){
    foreach (range($num1, $num2) as $i) {
        $soma = $soma + $i;
    }

}
else{
    echo 'Digite um valor válido';
}
echo $soma;