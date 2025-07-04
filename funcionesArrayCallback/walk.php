<?php 
//Array_walk(): Nos sirve para dos cosas principalmente una para recorrer los elementos como utilizamos foreach tal cual, y la segunda es para modificar los elementos de un array. Tiene la posibilidad de modificar el array original, si lo hacemos por paso por referencia &

require "modelsArray/functions.php";

$numbers = [1, 2, 3, 4, 5];

//recorre el array sin modificar el original

array_walk($numbers, function($num){
    echo $num."<br>";
});

//modifica el array original

array_walk($numbers, fn(&$num) => $num *= 2);//&: lo paso por referencia
?>