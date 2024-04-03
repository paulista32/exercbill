<?php

$numero = readline("Digite um número inteiro positivo: ");

if($numero <= 0){
    echo "Por favor, digite um número inteiro maior que 0";
    exit();
}
    for ($a = 1; $a <= 10; $a++){
        $resultado = $numero*$a;
        echo "$numero * $a = $resultado".
        PHP_EOL;
    }
?>