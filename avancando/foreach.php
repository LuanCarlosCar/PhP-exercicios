<?php




$contasconrrentes = [
    13213137 => [
        'titular' => 'luan',
        'saldo'=> 1500
    ],
    8637826732 => [
        'titular' => 'ruan',
        'saldo'=> 600
    ],
    787617846 => [
        'titular' => 'vitor',
        'saldo'=> 1700
    ]
];



foreach($contasconrrentes as $cpf => $conta){

echo $cpf  .   PHP_EOL;

}