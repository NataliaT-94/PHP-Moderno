<?php
//asociatiivo: Podes acceder a los elementos del array mediante una key
//las keys estan del lado izquierdo
$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

echo $beer["alcohol"];

//Cambiar el valor de un elemento

$beer["alcohol"] = 9;

?>