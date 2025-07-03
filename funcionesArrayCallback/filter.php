<?php 
//Array_filter(): Sirve para filtrar contenido de un array.

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelArray\People;

$people = [
    new People("Juan", 20),
    new People("Pedro", 30),
    new People("Maria", 25)
];

$greater25Years = array_filter($people,//primer parametro el array del cual vamos a trabajar
                    fn($person) => $person->age >= 25);//segundo parametro la funcion

show($greater25Years);

$withoutPedro = array_filter($people,
                fn($person) => $person->name != "Pedro");
   
show($withoutPedro);

?>