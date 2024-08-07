<?php

$horas = readline("Que horas do dia são? ");
$minutos = readline("Que minuos do dia são? ");

if ($minutos > 60){
    echo"Digite um valor de minutos válidos";
}

else if ($horas > 0 and $horas < 12) {
    echo "Bom Dia são $horas:$minutos";
}

else if ($horas > 11 and $horas < 18){
    echo "Boa Tarde são $horas:$minutos";
}
else{
    echo "Boa Noite $horas:$minutos";
}
