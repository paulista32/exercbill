<?php

function fibonacci($n){
    if ($n== 0){
        return  0;
    }
    elseif ($n == 1){
        return  1;
    }else{
        return fibonacci($n-1) + fibonacci($n - 2) ;
    }
}

echo "Os 10 primeiros números da sequência Fibonacci:\n";
for($i  = 0; $i < 10; $i++){
    echo fibonacci($i) . " ";
}
?>