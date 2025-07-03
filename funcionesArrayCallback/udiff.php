<?php 
//array_udiff(): lo que hace es comparar dos arrays, pero nos va a regresar solamente los elementos diferentes del primer array

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelArray\People;

$people1 = [
    new People("Juan", 20),
    new People("Mario", 20),
    new People("Pedro", 30),
    new People("Maria", 25)
];

$people2 = [
    new People("Juan", 20),
    new People("Pedro", 30),
    new People("Ana", 31),
    new People("Luis", 25)
];

$differences = array_udiff($people1, $people2, //primer parametro un array, segundo parameytro otro array
            fn($person1, $person2)// tercer parametro funcion con los nombres de los elementos
            => $person1->name <=> $person2->name);
show($differences);

?>