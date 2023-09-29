<?php
    //Declaração de variavel
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

    //Loop
    foreach($numeros as $n) {
        if ($n % 2 == 0) {
            echo $n;
            echo "<br>";
        }
    }



?>

