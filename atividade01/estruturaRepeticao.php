<?php
    //WHILE
    //---------------------------------------------------------------------
    $cont = 0;
    while($cont < 100){
        echo "O valor atual do contador é $cont(while)<br>";
        $cont++;
    }

    //DO WHILE
    //---------------------------------------------------------------------
    $cont2 = 101;
    do{
        echo "O valor atual do contador é $cont2(do while)<br>";
        $cont2++;
    }while($cont2 > 100 && $cont2 < 1000);


    //FOR
    //---------------------------------------------------------------------
    for($cont3 = 0; $cont3 < 1000; $cont3++) {
        echo "O valor atual do contador é $cont3(for)<br>";
    }

    //FOREACH
    //---------------------------------------------------------------------
    //foreach: oferece uma maneira mais facil de navegar entre os elementos de uma array
    $nome_array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

    foreach($nome_array as $elementos){
        echo($elementos);
    }


    //----------------------------------------------------------------------
    $nome = "a";
    echo "raissa";
    for($i = 0; $i < 10; $i++){
        echo $nome;
        $nome = $nome . "a";
    }

    /*EXECUTAR:
        localhost/exercicios/estruturaRepeticao.php
    */
?>