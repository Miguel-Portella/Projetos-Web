<?php

$num = readline("Digite um número: ");

foreach(range(1, 10) as $i) {
    echo "$num x $i = ".$i * $num . "\n";
}