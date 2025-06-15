<?php

$beers = [
    [    
        "name" => "Erdinger",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ],
    [    
        "name" => "Erdinger 2",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ]
];

//Para acceder al segundo valor del array multidimencional

echo $beers[1]["name"];

//Para acceder por foreach

foreach($beers as $beer){
    foreach($beer as $value){//accedemos al segundo nivel de valores
        echo $value."<br>";//concatemnamos un salto de linea
    }
}

foreach($beers as $beer){
    foreach($beer as $key => $value){//imprimimos la key y los valores
        echo $key.": ".$value."<br>";
    }
}

?>