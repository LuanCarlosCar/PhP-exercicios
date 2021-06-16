<?php

$idade = 20;
$nome = 'Luan';

echo "Vocé só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if($idade >= 18) {
    echo "voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';


}else{
    echo "Você nao tem a idade necessaria";
}

echo "Vocé só pode entrar se tiver a partir de 18 anos e se nome for luan." . PHP_EOL;
if($idade >= 18 and $nome == 'Luan') {
    echo "Oi $nome, você já tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';


}
// Nova regra de negocio


$idade = 20;
$QuantidadeDePessoas= 2 ;

echo "Vocé só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos com acompanhante." . PHP_EOL;

if($idade >= 18) {
    echo "voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';


}else if($idade >= 16 && $QuantidadeDePessoas > 1){
        echo "Você tem $idade anos, está acompanhado, então pode entrar.";

}else{
    echo "Você nao tem a idade necessaria";
}