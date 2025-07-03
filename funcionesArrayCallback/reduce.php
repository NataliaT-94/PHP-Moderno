<?php 
//Arrray_reduce(): éste te retorna un valor escalar, es decir, un valor básico no es una colección. Un valor puede ser un string, un entero. Lo que hace esta función es recorrer todo tu array y aplicar una operación y llevar un acumulado.

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelArray\People;

$people = [
    new People("Juan", 20),
    new People("Pedro", 30),
    new People("Maria", 25)
];

$sum = array_reduce($people,//primer parametro el array del cual vamos a trabajar
        fn($current, $person) => $current + $person->age,//segundo parametro la funcion, esta va a tener dos parametros el primero el nombre que va a tener el acumulkado, el segundo el nombre del singular de las iteraciones
        0);//tercer parametro el valor inicial del acumulado $current

echo $sum;

$namesPipe = array_reduce($people,
        fn($current, $person) => $current.$person->name."|",
        "");

echo $namesPipe;

$contenHTML = array_reduce($people,
            fn($current, $person) => 
            $current."<li>".$person->name."</li>",
        "<ul>");
$contenHTML.=  "</ul>";

echo $contenHTML;
?>