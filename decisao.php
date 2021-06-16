<?php

$idade = 20;
$nome = 'Luan';

echo "Vocé só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if($idade >= 18) {
    echo "voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';


}

echo "Vocé só pode entrar se tiver a partir de 18 anos e se nome for luan." . PHP_EOL;
if($idade >= 18 and $nome == 'Luan') {
    echo "Oi $nome, você já tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';


}