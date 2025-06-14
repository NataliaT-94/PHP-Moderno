<?php
    //switch: Es una estructura de control para comparar, pero esta estructura de control te sirve cuando tu vas a comparar un valor con diferentes escenarios y estos escenarios son bastantes. Tienen que ser si o si iguales
    //break. Sirve par aque cuando entre en un case y cumplaa con la intruccion no sigua comparando con los demas case
    //Default : Es para que cuando no entra en ninguna de las opciones, entonces le das la ultima opcion, es como un else

    
    $month = 5;

    switch ($month){
        case 1:
        case 2:
        case 12:
            echo "es invierno";
            break;
        case 3:
        case 4:
        case 5:
            echo "es primavera";
            break;
        case 6:
        case 7:
        case 8:
            echo "es verano";
            break;
        case 9:
        case 10:
        case 11:
            echo "es otoño";
            break;
        default:
            echo "Dato invalido";
    }
?>