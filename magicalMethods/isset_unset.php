<?php 

//isset: Comprueba si existe una variable o un elemento.
//unset: Elimina un elemento.

//__isset:Comprueba la existencia de una propiedad. Se ejecuta exista o no la propiedad.
//__unset:Se ejecuta cuando quieras eliminar elementos que no existen.

$a = 1;
unset($a);//elimina la variable $a.

if(isset($a)){
    echo "existe";
} else {
    echo "no existe";
}

$wine = new Wine();//creamos el objeto
if(isset($wine->name)){//comprobamos si existe la propiedad en wine
    echo "existe<br>";
} else {
    echo "no existe<br>";
}

unset($winw->style);
class Wine{
    private $data = [
        "name"=>"vinos"
    ];

    public function __isset($name)
    {
        echo "Se compueba existencia $name<br>";
        return isset($this->data[$name]);//comprueba la existencia del key en el array data
    }

    public function __unset($name)
    {
        echo "Se elimino la propiedad $name<br>";
    }
}

?>