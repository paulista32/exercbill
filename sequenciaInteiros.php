<?php

$total = 0;
$quantia = 0;

echo "Digite uma sequência de números POSITIVOS, e termine com um NEGATIVO\n";
while(true){
    $numero = readline("Digite um número: ");

    if($numero < 0){
        break;
    }

    if($numero >= 0){
        $total += $numero;
        $quantia++;
    }
}

if($quantia > 0){
    $media = $total / $quantia;
    echo"A média dos números positivos é $media";
} 
    else {
    echo "Nenhum número positivo foi inserido";
}
