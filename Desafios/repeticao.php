<?php

//Contar de 1 ate o 15

for($i = 1; $i <=15; $i ++){
    echo $i .PHP_EOL;
}

// ------------------
while($contador <=15){


    echo "#$contador" .PHP_EOL;
    $contador = $contador + 1;
}


/* 
Vamos utilizar o while quando não sabemos quando o loop se encerrará.
 Quando é uma decisão um pouco mais complexa.
 Já o for é utilizado quando sabemos o momento de saída do loop. Normalmente,
 quando temos um caso de uso de variável contadora. */