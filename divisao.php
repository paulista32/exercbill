<?php

$numero = readline("Digite um número inteiro positivo: ");

  echo "Divisores do $numero: ";
  for ($d = 1; $d <= $numero; $d++){
      if($numero % $d == 0){
          echo "$d ";
      }
  }