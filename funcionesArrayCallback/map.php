<?php 
// Arraymap: Recibe un array y retorna un nuevo array, el cual tú le vas a aplicar una transformación. Lo que hace esta función es recorrer todo tu array y en cada iteración hacer una transformación. Al final va a construir un nuevo array, el cual te va a retornar.el cual nosotros especificamos. El cuerpo de este array. Qué campos queremos para este nuevo array a partir de un array existente a partir de este array existente
require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelArray\People;

$people = [
    new People("Juan", 20),
    new People("Pedro", 30),
    new People("Maria", 25)
];

$names = array_map(fn($person) => $person->name, $people);//como primer paametro una funcion principal el cual esta com puesto por un objeto singular por cada iteracion, y lo que quiero que haga, en este caso que traiga el nombre, Segundo parametro es el array con el cual vamos a trabajar
show($names);//imprimimos el nuevo array, ejecutando la funcion show
show($people); // no se modifica el array original

//Con Arraymap también podemos hacer formateo, transformación de información.

$namesWhitFormat = array_map(fn($person) => "<b style='color:red'>".$person->name."</b>",
                    $people);

show($namesWhitFormat);

// también puedo transformar este array con a un nuevo array que tenga elementos nuevos

$namesWhitNumber = array_map(fn($person, $index) //index contiene el resultado del array_keys
                    => $index." - ".$person->name,
                    $people,
                    array_keys($people)//Es mostrarnos un array con los índices con los nombres de los kits de nuestro array.
);

show($namesWhitNumber);

//podría regresar también arrays, los cuales sean con un distinto con un distinto cuerpo.

$namesWhitNumber2 = array_map(fn($person, $index) //index contiene el resultado del array_keys
                    => ["id" => ($index + 1), "name" => $person->name],
                    $people, array_keys($people)
);

show($namesWhitNumber2);

?>