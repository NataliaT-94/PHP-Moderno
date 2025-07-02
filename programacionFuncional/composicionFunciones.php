<?php 
//Composicion de funciones: Una composición de funciones no es más que una función de orden superior que se compone de de comportamiento de varias funciones. Es muy parecido al concepto de pipe, pero aquí nosotros podemos darle un orden en específico y lo común es ver las composición de funciones ejecutándose el parámetro de la derecha primero y después el de la izquierda, es decir, ejecutándose la función que recibe a la derecha primero y después la función que recibe a la izquierda la composición de funciones.
//es que es una función que se compone de varias funciones. Podrían ser dos o más y muy parecido al pipe, solamente que aquí vemos que la ejecución se hace en un orden inverso. Primero se ejecuta la de la derecha y luego la de la izquierda.

function composition($fn1, $fn2){
    return function ($value) use($fn1, $fn2){
        return $fn1($fn2($value));//primero se ejecuta$fn2 y luego $fn1
    };
}

$add10 = fn($n) => $n + 10;
$mul20 = fn($n) => $n * 20;

$comp = composition($add10, $mul20);// se ejecutan las funciones pero con un orden inverso
echo $comp(4);//90 muestra en pantalla


?>