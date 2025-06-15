<?php
//foreach: es un estructura de control repetitiva iterativa. Se utiliza el nombre del array y un nombre en singular que representa cada iteracion

$names = ["Natalia", "Braian", "Evelyn"];

foreach($names as $name){
    echo $name.";";//concatenamos el ; para separar los valores
}

$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

foreach($beer as $v){
    echo $v.";";
}

foreach($beer as $k => $v){//traemos tambien los valores de la key
    echo $k." ".$v.";";
}


?>