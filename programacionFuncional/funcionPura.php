<?php 
//Una función pura es una función que tiene que tener dos características. Una es que tenga para el mismo conjunto de entradas siempre tenga la misma salida. Y la segunda característica es que no tiene efectos secundarios sobre elementos externos a ella. Lo que pasa en la función se queda en la función, Es decir, si tú recibes valores no tienes que modificarlos. Esos valores externos no tienes que alterarlos.
//Gracias a las funciones puras podemos tener podemos hacer pruebas unitarias de una manera más fácil. Podemos también detectar donde se hace un cambio, ya que la función pura no alterándolo lo que está externo, donde se hace el cambio.
class Counter{
    public int $count = 0;
}

$counter = new Counter();

function show(Counter $counter): string{//no es una funcion pura porque los objetos se pasan por referencia, altera el elemento externo
    $counter->count++;
    return $counter->count."<br>";
}

echo show($counter);
echo show($counter);
echo show($counter);


function add(float $a, float $b): float{//Funcion pura no altera el elemento externo
    return $a + $b;
}

echo add(1,3);
echo add(1,3);
echo add(1,3);
?>