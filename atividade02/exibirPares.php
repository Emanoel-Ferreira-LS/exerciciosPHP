<?php
/*
Escreva um código em PHP que exiba todos os números pares de 1 a 50 usando a
estrutura de repetição FOR.
*/

    for($i = 1; $i <= 50; $i++) {
        if($i%2 == 0){
            echo "$i <br>";
        }
    }
?>