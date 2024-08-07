<?php

$letra = readline("Digite uma letra: ");

$letra = strtolower($letra);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u"){
    echo "Você digitou uma vogal";
}
else{
    echo "Você digitou uma consoante";
}
