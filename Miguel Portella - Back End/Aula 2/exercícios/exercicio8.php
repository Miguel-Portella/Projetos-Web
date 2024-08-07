<?php

$salario = readline("Qual seu salário por hora? ");

$hora = readline("Quantas horas foram trabalhadas? ");

if($hora > 40){
    echo "Você fez hora estra! Esse mês você vai receber".(40 * $salario) + ((($hora - 40)*$salario)/2);
}
else{
    echo "Seu salário será de".$salario*40;
}