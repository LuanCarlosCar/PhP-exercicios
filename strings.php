<?php 

$idade = 20;
echo 'Sou o luan, tenho' . $idade . 'anos'; // estou concatenando minha string e minha variavel atravez do '.'
echo "Sou o luan, tenho $idade anos"; // Desta forma o php consegue ler minha variavel mesmo quando eu tiver declarando minha string

echo "Ola mundo\n"; // "\n"(new line) esta quebrando a linha/ gerando uma nova linha 
echo '\n'; // estou informando que "\n" e apenas uma string
echo "\t"; // estou gerando um 'tab'(espaço no textto)
echo "Sou o luan, tenho $idade anos";
echo "Olá mundo!" . PHP_EOL; // forma mais semantica de gerar uma nova linha 



// mais exemplos de caracteres especiais : https://www.php.net/manual/pt_BR/language.types.string.php