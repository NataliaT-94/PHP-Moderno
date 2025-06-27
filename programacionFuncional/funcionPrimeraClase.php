<?php 
//Una función de primera clase es una función que tiene la que se puede guardar en una variable teniéndola en una variable, pues la puedes pasar a otras funciones como parámetro o también podría devolver una función el resultado de una función.

$some = function(float $a, float $b): float{//en la variable $some se guardo la funcion sin nombre
    return $a + $b;
};

echo $some(2,3);

?>