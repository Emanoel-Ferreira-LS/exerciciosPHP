<?php
/*
Use a estrutura WHILE para calcular a soma de todos os números ímpares de 1 a
50.
*/

$cont = 1;
$soma = 0;

while($cont <= 50) {
    if($cont%2 != 0) {
        $soma + = $cont;
    }

    $cont++;
}

echo "A soma dos números impares de 0 à 50 é <strong>$soma</strong>";


?>