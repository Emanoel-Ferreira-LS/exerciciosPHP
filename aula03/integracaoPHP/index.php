<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração PHP</title>
    <style>
        
        table{
            border: 1px solid black;
            padding: 0;
        }

        td{
            border: 1px solid black;
            width: 50px;
            margin: 0;
            padding: 10px; 
        }

        th{
            border: 1px solid black;
            width: 50px;
            padding: 10px; 
        }
    </style>
</head>
<body>
    <h1>
        <?php
            echo 'Meu site';
        ?>
    </h1>

    <?php
        echo "<h1>Meu Site</h1>";
    ?>

    <h2 style="font-family: Roboto">
        <?php
            $idade = 18;

            if($idade >= 18) {
                echo "Idade: $idade = Maior de idade!";
            }else if($idade > 0 && $idade < 18) {
                echo "Idade : $idade = Menor de idade!";
            }else {
                echo "Idade Invalida!";
            }

            //Só devolve o resultado pois o php roda do lado do servidor 
        ?>
</h2>


    <p>--Facilitar a impressão de códigos utilizando estruturas de repetição:--</p>
    <?php
        for($i = 0; $i < 10; $i++){
            echo "<p>$i</p>";//As tags dentro do bloco php tem que ser colocadas entre " " aspas pra que sejam lidas como texto
        }
    ?>


    <p>--Outra forma que  poderia ser util em caso mais complexos de codigos onde será preciso usar muitas tags html e fica inviável colocar tudo dentro do echo:--</p>
    <?php
        for($i = 0; $i < 10; $i++){
    ?>

        <p><?php echo $i; ?></p>
    
    <?php
        }
    ?>

    <!-----------------------------------------FORM------------------------------------------------->
    <h2>Usando PHP para imprimir em tabelas com uso de Form</h2>

   <form action="index.php" method="POST"><!--Enviar os valores para o proprio arquivo(nesse caso)-->
        <label for="number">Informe o número:</label>
        <input type="number" name="number" id="number"><br>
        <input type="submit" value="Enviar">
   </form>

   <br>
    
    <!--------------------------------------------TABELAS----------------------------------------------->

    <table>
        <tr>
            <th>N</th>
            <th>M</th>
            <th>resultado</th>
        </tr>

        <?php
            if(isset($_POST['number']) && !empty($_POST['number'])){//verificando se a variavel está setada(existe) e se ele possui algun valor
                $num = $_POST['number'];//pegar o numero do input de name number
            }else{
                $num = 1;
            }

            for($i = 1; $i <= 5; $i++){
                $result = $num*$i;
        ?>

            <tr>
                <td><?php echo $num ?></td>
                <td><?php echo $i?></td>
                <td><?php echo $result?></td>
            </tr>

        <?php
            }
        ?>
    </table>


    <form method="POST" action="login.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="pass">Senha:</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>