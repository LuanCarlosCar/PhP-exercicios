<?php 


$conta1 = [
    'titular' => 'luan',
    'saldo'=> 1500
];
$conta2 = [
    'titular' => 'ruan',
    'saldo'=> 600
];
$conta3 = [
    'titular' => 'vitor',
    'saldo'=> 1700
];



$contasconrrentes = [$conta1,$conta2,$conta3];

for($i = 0;$i < count($contasconrrentes); $i++){
    echo $contasconrrentes[$i]['titular'] .   PHP_EOL;
};