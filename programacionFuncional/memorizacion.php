<?php 
//memorización, el cual es útil cuando tú tienes cálculos que son repetitivos y que son muy costosos, que tardan mucho tiempo y que estás trabajando con función pura. Una de las características de una función pura es que es determinista. Si tú le mandas un valor A y te retorna B, si le vuelves a mandar ese A en una semana, te va A debe retornar B, Es decir, siempre la función pura te va a retornar el mismo valor bajo el mismo parámetro que le estás dando. Tú puedes ir guardando esos resultados para ahorrarte esa ejecución en algún punto, en una variable.

function add($a, $b){//Funcion pura, bajo los mismos valores te retorna el mismo resultado
    return $a + $b;
}

function addMemo(){
    $memo = [];

    return function($a, $b) use(&$memo){
        $index = $a."-".$b;

        if(isset($memo[$index])){//si existe significa que ya esta guardado en memo
            echo "Ya existia operacion <br>";
            return $memo[$index];
        }

        echo "No existia operacion <br>";
        $memo[$index] = $a + $b;//si no existe se realiza la operacion y se guarda en index
        return $memo[$index];//retornamos el valor
    };
}

$mySum = addMemo();
echo $mySum(4, 5)."<br>";
echo $mySum(4, 5)."<br>";
?>