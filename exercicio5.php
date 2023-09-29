<?php
    //Declaração de variável
    $i = 4;

    //Loop
    while($i < 30) {
        echo $i+=2;
        echo "<br>";

        if($i == 24) {
            break;
        }
    }

?>