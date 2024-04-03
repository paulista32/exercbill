<?php 

$alt = readline("Digite sua altura: ");
$peso = readline("Digite seu peso: ");

$imc = $peso / ($alt * $peso);

echo "Seu Indice de Massa Corporal é:" .number_format($imc,2);
?>