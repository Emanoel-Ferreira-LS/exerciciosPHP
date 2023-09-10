<?php
/*
Defina uma variável chamada "idade" com um valor e use a estrutura IF-ELSE para
determinar se essa idade é menor ou maior do que 18 anos. Exiba uma mensagem
apropriada com base no valor da variável.
*/

    $idade = 18;

    if($idade >= 18) {
        echo "Idade: $idade = Maior de idade!";
    }else if($idade > 0 && $idade < 18) {
        echo "Idade : $idade = Menor de idade!";
    }else {
        echo "Idade Invalida!";
    }


?>