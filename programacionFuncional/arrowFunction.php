<?php 
//Funciones flecha/ Arrow function:

$some = function(float $a, float $b): float{//en la variable $some se guardo la funcion sin nombre
    return $a + $b;
};

// $sum = fn($a, $b) => $a + $b;//Arrow function
$sum = fn(float $a, float $b) => $a + $b;//Arrow function con tipado

function mul(float $a, float $b): float{//funcion nombrada
    return $a * $b;
}

function show(callable $fn, float $a, float $b){//esta funcion recibe como parametro una funcion, y dos numeros
    echo $fn($a, $b);
}

show($some, 3, 5);
show($sum, 3, 5);
show(fn($a, $b) => $a - $b, 3, 5);//directamente colocamos el arrow function como parametro

?>