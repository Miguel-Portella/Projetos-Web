<?php

$num = readline("Digite um número da semana: ");

if ($num == 1) {
    echo "é Domingo";
}
else if ($num == 2) {
    echo "é Segunda feira";
}
else if ($num == 3) {
    echo "é Terça feira";
}
else if ($num == 4) { 
    echo "é Quarta feira";
}
else if ($num == 5) {
    echo "é Quinta feira";
}
else if ($num == 6) {
    echo "é Sexta feira";
}
else if ($num == 7) {
    echo "é Sabado";
}
else{
    echo "Digite um valor válido";
}
