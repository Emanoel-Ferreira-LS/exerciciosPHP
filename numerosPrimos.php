<?php
    $primo = 0;

    for($i = 1; $i <= 100; $i++) {
        for($j = 2; $j < $i; $j++){
            if($i%$j != 0){
                $primo++;
            }
        }
        if($primo == $i - 2){
            echo "$i<br>";
        }
        $primo = 0;
        
    }

    /*EXECUTAR:
        localhost/exercicios/numerosPrimos.php
    */
?>