<?php
/*Crie um programa em PHP onde é fornecida uma operação matemática (adição,
subtração, multiplicação ou divisão) e, em seguida, os números necessários para
realizar essa operação. Use uma estrutura SWITCH-CASE para executar a
operação escolhida e exibir o resultado. */

$operacao = "*";
$num1 = 46;
$num2 = 2;

switch($operacao) {
    case "+": 
        echo "$num1 + $num2 = " . $num1 + $num2; 
        break;
    case "-": 
        echo "$num1 - $num2 = " . $num1 - $num2; 
        break;
    case "*": 
        echo "$num1 x $num2 = " . $num1 * $num2; 
        break;
    case "/":
        echo "$num1 / $num2 = " . $num1 / $num2; 
        break;
    default:
    echo "Operação invalida!"; 
}


?>
