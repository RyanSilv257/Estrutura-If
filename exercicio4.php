<?php
    //Declaração de variável
    $velocidade = 45;

    if ($velocidade >= 41 && $velocidade <= 50){
        echo "O motorista está na velocidade correta";
    } else if ($velocidade == 40) {
        echo "Atenção a velocidade";
    }
    else if($velocidade > 50) {
        echo "Multa";
    }

?>