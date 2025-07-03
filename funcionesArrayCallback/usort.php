<?php 
//Usort: al distinto arrayfilter arraymap Arrayreduce Es que esta sí te modifica el array original. Es decir, yo al momento que pongo aquí people el resultado va a estar en el mismo people, es decir, me va a modificar el array original, no me va a crear un nuevo array.

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelArray\People;

$people = [
    new People("Juan", 20),
    new People("Pedro", 30),
    new People("Maria", 25)
];

//Space Set (<=>): que lo que hace es comparar dos elementos y retornarte un valor -1 o cero o uno. Si un elemento es menor a otro te tiene que retornar -1. Si un elemento es igual te tiene que retornar cero, y si un elemento es mayor que el otro, te tiene que retornar uno positivo.

usort($people,
        fn($person1, $person2)
        => $person1->age <=> $person2->age);

show($people);

//Ordenamos ed forma descendente
usort($people,
        fn($person1, $person2)
        => $person2->age <=> $person1->age);

show($people);

?>