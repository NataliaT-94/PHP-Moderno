<?php 
//Closure: Una función de orden superior puede recibir parámetros que son funciones o puede retornar funciones. Entonces un closure retorna una función.
//use: sirve para poder ir a obtener un valor que está fuera de mi ámbito de función.
function add(float $number){
    return function($number2) use($number){
        return $number + $number2;
    };
}

$s1 = add(10);//mantiene el estado del 10 uqe fue guardado
echo $s1(20)."<br>";//Le suma 20 al 10 que fue guardado
echo $s1(10);

function hi(){
    $count = 0;
    return function() use(&$count){
        $count++;
        return "Hola $count";
    };
}

$h1 = hi();
echo $h1();
echo $h1();
echo $h1();

?>