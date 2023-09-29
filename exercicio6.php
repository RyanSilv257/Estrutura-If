<?php 
    $numeros = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

    foreach($numeros as $value){
        if ($value == 30 || $value == 40){
            continue;
        }
        echo $value + 1;
        echo "<br>";
        
    }


?>