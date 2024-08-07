<?php

$num = readline("Digite um número: ");
$i = 1;
while(true) {
    echo "$num x $i = ".$i * $num . "\n";
    if($i > 9) {
        break;
    }
    $i++;
}