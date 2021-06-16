<?php

// Calcular o IMC



$peso =50;
$altura = 1.75;

$imc= $altura * $altura / $peso;

if($imc<18.5){
    echo "Abaixo do peso";
}else if($imc >= 18.5 or $imc <=24.9 ){
    echo "Peso Normal";
}else if($imc >= 25 or $imc <= 29.9){
    echo "Sobrepeso";
}else if($imc >= 30 or $imc <= 34.9){
    echo "Obesidade Grau I";
}else if($imc >= 35 or $imc <= 39.9){
    echo "Obesidade Grau II";
}else if($imc >40){
    echo "Obesidade Grau III ou Mórbida";
}