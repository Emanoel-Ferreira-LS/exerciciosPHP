<?php
    $num = 8;
    $i = 1;

    while($i <= 10) {
        echo("$num x $i = " . $i*$num . "<br>");
        $i++;
    }

    echo("<br>");

    for($cont = 1; $cont <= 100; $cont++){
        for($i2 = 1; $i2 <=10; $i2++){
            echo("$cont x $i2 = " . $i2*$cont . "<br>");
        }
        echo "<br>";
    }

    /*EXECUTAR:
        localhost/exercicios/tabuada.php
    */
?>