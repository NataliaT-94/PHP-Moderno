<?php 
//callback no es más que una función de primera clase que se pasa a una función de orden superior. Y esta función de primera clase que se pasó hace una transformación con la información que se está ejecutando o procesando internamente

$numbers = [1,2,3,4,5,6];

function process(array $arr, callable $fun): array{
    $newArr = [];

    foreach($arr as $element){
        $newElement = $fun($element);//ejecutamos la funcion con parametro $element
        $newArr[] = $newElement;// el nuevo elemento se lo agregamos al array
    }

    return $newArr;
}

$result1 = process($numbers, fn($e) => $e * 2);
print_r($result1);

$result2 = process($numbers, fn($e) => $e + 10);
print_r($result2);

$result3 = process($numbers, fn($e) => "El valor es: ".$e);
print_r($result3);

?>