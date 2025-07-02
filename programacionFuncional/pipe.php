<?php 
//Pipe(): es un concepto en el cual se aplican programación en front end y back end. Es más que nada una ejecución de funciones encadenadas y la recibiendo el resultado de la de la función anterior. Recibe la función que sigue el resultado y lo ejecuta y así sucesivamente hasta acabar el encadenamiento de funciones.

//la desestructuración de argumentos de función.(...$nombre del array)

function showNames(...$names){
    foreach($names as $name){
        echo $name."<br>";
    }
}

showNames("Ana", "Juan", "Pedro");

function pipe(...$funcs){
    return function ($value) use ($funcs){
        foreach($funcs as $fn){
            $value = $fn($value);//el value obtenido en la funcion, se guarda en un value nuevamente
        }

        return $value;
    };
}

$toUpper =fn ($s) => strtoupper($s);//transforma en mayuscula
$replaceSpace = fn($s) => str_replace(" ", "", $s);//elimina los espacios vacios
$replaceNumbers = fn($s) => preg_replace('/\d+/u', '', $s);//elimina los numeros

$myPipe = pipe($toUpper, $replaceSpace, $replaceNumbers);//Se va ir ejecutando las funciones una tras otra
$result = $myPipe("abcd ef891 gh");
echo $result;//ABCDEFGH se muestra en pantalla

?>