<?php
/*
Use a estrutura FOR para calcular a soma de todos os números primos de 1 a 1000.
*/

    $soma = 0;

    for($i = 1; $i <= 1000; $i++) {
        $cont = 0;

        for($j = 2; $j < $i; $j++) {
            if($i%$j != 0){
                $cont++;
            }
        }
        
        if($cont == $i - 2){
            $soma += $i;
            //echo "$i ; $soma<br>";
        }
    }

    echo "A soma de todos o números primos de 1 a 1000 é <strong>$soma</strong>"
?>