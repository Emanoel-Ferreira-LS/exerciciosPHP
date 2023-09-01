<?php
    $meuNome = "Emanoel";
    echo($meuNome);
    
    $a = "José";
    $b = "Silva";

    echo "<br>";

    echo($a . " da " .$b);

    echo "<br><br><br>";

    $c = 15;
    $d = 7.5;
    $e = 10;

    $soma = $c + $d + $e;
    $desconto = $soma*20/100;

    echo("O valor da compra é $soma <br>");
    echo("O desconto é de R$ $desconto <br> O total a pagar é R$ " . $soma - $desconto);

    /*EXECUTAR:
        localhost/exercicios/ex01.php
    */
?>

