<?php
    //Declaração de variável
    $numeros = array();

    //Adição de valores a array
    for ($i = 10; $i <= 20; $i++){
        $numeros[] = $i;
    }
    
    //Checar se o número é ímpar e imprimí-lo
    foreach($numeros as $a){
        if ($a % 2 != 0) {
            echo $a;
            echo "<br>";
        }
    }


?>