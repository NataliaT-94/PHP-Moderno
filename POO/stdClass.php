<?php 
//stdclass: crea objetos de manera dinamica, sin necesidad de una clase. Me permite crear elementos de este objeto sin que existan

$beer = new stdClass();

$beer->name = "Erdinger";
$beer->alcohol = 8.5;

// echo gettype($beer);
// print_r($beer);

$beer->name = "Erdinger Pikantus";//modificamos el valor
echo $beer->name;

// --------------- Convercion de objetos a array --------------------

$arr = (array) $beer;//utilizamos los parentesis para asignarle el tipo

echo $arr["alcohol"];

// --------------- Convercion de array a objetos --------------------

$arrLocation = [
    "address" => "Calle del Mal #15",
    "country" => "Mexico"
];

$objLocation = (object) $arrLocation;

echo $objLocation->country;
?>