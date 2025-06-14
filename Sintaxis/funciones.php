<?php
//Funciones: Las funciones en programación son bloques de código que puede reutilizar. Este bloque de código le pone su nombre y puede reutilizarlo. Esta función puede tener entrada de información y salida de información.

hi("Natalia");
hi("Braian");
echo add(1,2);
echo add(11,12);

function hi($name){
    echo "Hola $name";
}

function add($a, $b){
    $result = $a + $b;
    return $result;
}

?>