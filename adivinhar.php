<?php
$num_aleatorio = rand(1, 100);
echo "Tente adivinhar o número entre 1 e 100.\n";

while (true) {
    $palpite = readline("Digite seu palpite: ");
    if (!is_numeric($palpite)) {
        echo "Por favor, digite um número válido.\n";
        continue;
    }
    if ($palpite == $num_aleatorio) {
        echo "Parabéns! Você acertou o número.\n";
        break;
    } elseif ($palpite < $num_aleatorio) {
        echo "O número é maior. ";
    } else {
        echo "O número é menor. ";
    }
    echo "Tente novamente.\n";
}
?>
