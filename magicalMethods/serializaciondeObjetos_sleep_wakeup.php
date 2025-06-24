<?php 
//Serialización es convertir un objeto en un una cadena, la cual te pudiera servir para guardarla en un archivo y poder restablecer ese objeto si tú lo necesitabas. Darle persistencia a los objetos, más allá de que estén en memoria en la serialización, nos ayuda a tener un formato. Este formato puede ser JSON, puede ser XML o puede ser un formato muy único del lenguaje de programación
//__sleep(): se ejecuta antes de que ejecutes la funcion serialize, por lo cual tú puedes filtrar información, limpiar información. Si tienes un objeto enorme, a la mejor no necesitas guardar todo. Entonces aquí tú especificas con un array, tienes que hacer un return de array, los nombres de las propiedades que quieres guardar
//__wakeup(): se ejecuta antes de que ejecutes la funcion unserialize.
class Animal{
    public string $name;
    public int $age;
    public string $color;

    public function __sleep(){
        return ["name", "color"];//en el array especificamos que variables queremos guardar
    }

    public function __wakeup(){
        echo "Se deserializo el objeto<br>";
        $this->age = 0;
        $this->some();//antes de deserializar se va a ejecutar ka funcion some
    }

    private function some(){
        echo "el color es: ".$this->color."<br>";
    }
}

$duck = new Animal();
$duck->name = "pato";
$duck->age = 2;
$duck->color = "rojo";

$s = serialize($duck);//en la variable $s serializamos $duck

echo $s."<br>";

$obj = unserialize($s);//en la variable $obj lo revertimos
print_r($obj);
?>