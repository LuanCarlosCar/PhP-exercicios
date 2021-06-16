<?php


// Printar somente os numeros impares de 1 ate 100
while($contador <=100){
        
    if($contador %2 == 0){
        continue;
    }
    echo "#$contador" .PHP_EOL;
    $contador= $contador +1;
    
}
