<?php 
/*
$array1 =[1, 2, 3]; //valores del array1 123
$array2 = $array1;
$array2[] = 10; //agrega al array2 un valor 10
print_n($array1); //muestra solo los valores del array1 123
print_n($array2); //muestra solo los valores del array2 12310, sin modificar el array1


*/

//que el objeto va por referencia en la mayoría de lenguajes de programación.

class A{
    public string $label;
}

class Some{
    public string $name;
    public A $a;

    public function __clone(){//intecepta la clonacion
        $this->name = strtoupper($this->name);//al objeto clonado ponerlo en mayusculas
        $this->a = clone $this->a;//si clono el objeto interno en el metodo magico, entonces lo unico que cambia es el valor del objeto nuevo y no el objeto viejo
    }
}

function change(Some $some){
    $some->name = "Ya no tien algo, se ha cambiado su valor";
}

$some = new Some();//se crea al objeto
$some->name = "algo";//el valor de name es algo
$some2 = $some; //el valor es iagual a some "algo"
$some2->name = "lo cambio"; //cambio el valor de $some2 y $some
echo $some2->name."<br>";
echo $some->name."<br>";

$some->a =new A();
$some->a->label="un label";


change($some);
echo $some->name."<br>";
echo $som2->name."<br>";

//__clone(): Se ejecuta cuando yo clono un objeto. Podemos interceptar esa clonacion. Objetos que estan dentro de objenos no se van a clonar

$newSome = clone $some;
$newSome->a->label = "cambio el label";
echo $newSome->a->label;
echo $some->a->label;
// $newSome->name = "Lo cambio el clonado<br>";
echo $newSome->name."<br>";


?>