<?php

$quantidade = readline("As maças custam R$1,25 se comprar a partir de 12 será R$1,00: ");

if($quantidade < 12){
    echo "Você pagará R$".$quantidade*1.25;
}
else{
    echo "Você pagará R$".$quantidade;
}