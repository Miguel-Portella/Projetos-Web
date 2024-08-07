<?php
$i=1;
while(true){
    if ($i > 50){
        break;
    }
    else if($i % 2 != 0){
        echo $i."\n";
    }

    $i++;
}