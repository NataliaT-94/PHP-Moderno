<?php 
//Una función de orden superior es una función que puede recibir otras funciones como parámetro o también retornar una función como resultado. En sí, las funciones de orden superior te permiten tener funciones con más dinamismo porque podríamos tener un comportamiento dinámico interno, el cual puede ser recibido externamente.

$some = function(float $a, float $b): float{//en la variable $some se guardo la funcion sin nombre
    return $a + $b;
};

function mul(float $a, float $b): float{//funcion nombrada
    return $a * $b;
}

function show($fn, float $a, float $b){//esta funcion recibe como parametro una funcion, y dos numeros
    echo $fn($a, $b);
}

show($some, 3, 5);
show("mul", 3, 5);//la funcion nombrada es llamada como un string

?>