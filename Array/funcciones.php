<?php
$beers=[
    "Carolus",
    "London Porter",
    "Delirium Red"
];

$beers2=[
    "Carolus 2",
    "London Porter 2",
    "Delirium Red 2"
];

array_push($beers, "karmeliten");//agrega un elemento al final

array_pop($beers);//elimina el elemento final del 
$beer = array_pop($beers);//elimina el elemento final del array pero lo guarde un una variable

echo count($beers);//cuenta la cantidad de elementos dentro del array

print_r($beers);//imprime el contenido del array

if(in_array("Corona", $beers)){//busca si existe el elemento corona dentro de la variable $beers
    echo "existe";
}else {
    echo "No existe";
}

$beerMixed = array_merge($beers, $beers2);//combina los dos arrays
print_r($beerMixed);

?>