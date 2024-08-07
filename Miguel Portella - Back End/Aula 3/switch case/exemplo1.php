<?php

$dia = readline("Digite um dia da semana: ");

switch ($dia) {
    case 1: 
        echo "Segunda";
        break;
    case 2:
        echo "Quarta";
        break;
    case 3:
        echo "Sexta";
        break;
    default:
        echo "Número inválido";
        break; 
    }
