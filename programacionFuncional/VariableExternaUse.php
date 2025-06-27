<?php 
//Capturar variables externas con Use: en funciones en PHP nosotros podemos hacer uso de elementos que están externos a las funciones sin necesidad de mandarse en parámetro.

$const = 5;

$some = function(float $a, float $b) use($const): float{//en la variable $some se guardo la funcion sin nombre
    return $a + $b + $const;
};

// $sum = fn($a, $b) => $a + $b;//Arrow function
$sum = fn(float $a, float $b) => $a + $b;//Arrow function con tipado


function show(callable $fn, float $a, float $b){//esta funcion recibe como parametro una funcion, y dos numeros
    echo $fn($a, $b);
}

show($some, 4, 5);//en vez de mostrar un resultado 9 muestra 14, porq suma la variable $const

?>