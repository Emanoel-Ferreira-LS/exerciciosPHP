<h3>Primeira Questão</h3>
<?php
    $a = 10;
    $b = 30;
    $soma = $a + $b;
    $resultado = $soma*$a;

    echo "A soma de $a + $b multiplicado por $a é igual a $resultado";
?>

<h3>Segunda Questão</h3>
<?php
    $val1 = 3;
    $val2 = 5;
    $val3 = 7;
    $media = ($val1 + $val2 + $val3)/3;

    echo "A media de $val1 + $val2 + $val3 é igual a $media";
?>

<h3>Terceira Questão</h3>
<?php
    $v1 = 12;
    $v2 = 13;
    $v1_quad = $v1**2;
    $v2_quad = $v2**2;
    $soma = $v1_quad + $v2_quad;

    echo "A soma do quadrado de $v1 com o quadrado de $v2 é igual a $soma";
?>

<h3>Quarta Questão</h3>
<?php
    $peso = 56;
    $altura = 1.59;

    $imc = number_format(56/1.59**2,2);
    echo "Altura: $altura <br> Peso: $peso <br>";
    echo "Seu imc é $imc";
?>

<h3>Quinta Questão</h3>
<?php
    $valorProduto = 35.50;
    $desconto = $valorProduto*7/100;

    $valorFinal = number_format($valorProduto - $desconto ,2);
    echo "Preço original: $valorProduto <br>";
    echo "O valor final do produto é de R$ $valorFinal";
?>

<h3>Sexta Questão</h3>
<?php
    $n1 = 9;
    $n2 = 7;
    $n3 = 5;

    $mediaPonderada = number_format(($n1*2 + $n2*3 + $n3*5)/(2+3+5), 2);

    echo "A media do aluno é $mediaPonderada";
?>

<h3>Sétima Questão</h3>
<?php
    $valorProduto = 150;
    $valorAcres = $valorProduto*16/100;
    $parcela = ($valorProduto + $valorAcres)/10;
    $valorAcres = number_format($valorAcres, 2);
    $parcela = number_format($parcela, 2);

    echo "Parcela: R$ $parcela <br> Valor total do produto: R$ $valorAcres";
?>

<h3>Oitava Questão</h3>
<?php
    $valor = 7;

    if($valor%2 == 0){
        echo "O valor $valor é par";
    }else if($valor%2 == 1){
        echo "O valor $valor é impar";
    }
?>

<h3>Nona Questão</h3>
<?php
    $va = 4;
    $vb = 3;

    if($va < $vb){
        echo "$va $vb";
    }else if($vb < $va){
        echo "$vb $va";
    }else{
        echo "Os numeros são iguais <br>$va $vb";
    }
?>

<h3>Decima Questão</h3>
<?php
    $A = 3;
    $B = 9;
    $C = 6;
    $D = 2;

    $soma = $A + $C;
    $multiplicacao = $B*$D;

    if($soma > $multiplicacao){
        echo "A + C é maior do que B * D";
    }else if($soma < $multiplicacao){
        echo "A + C é menor do que B * D";
    }else{
        echo "A + C é igual a B * D";
    }

    /*EXECUTAR:
        localhost/exercicios/exercicios.php
    */
?>

