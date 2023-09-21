<?php
    $nota = 0;
    switch (true){
        case ($nota <5): 
            echo "Insuficiente";
            break;
        case ($nota <6): 
            echo "Suficiente";
            break;
        case ($nota <7): 
            echo "Bien";
            break;
        case ($nota <9): 
            echo "Notable";
            break;
        default: 
            echo "Sobresaliente";
    }
?>

