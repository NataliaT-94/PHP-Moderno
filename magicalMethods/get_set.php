<?php 

//__get: Se va a ejecutar solo por sí mismo cuando quieras acceder a una propiedad que no existe.
//__set: el método mágico set funciona a la inversa cuando tú quieres agregarle un valor a una propiedad que no existe.

$person = new Person();//crear object
$person->name = "Juan";//le agrgamoscontenido al objeto

echo $person->country;//quiere acceder a country, pero no existe

$person->address = "Calle tal";//se agrego la informacion gracias al __set
echo $person->address;//obtenemos info gracias al __get

class Person{
    public int $id;
    public string $name;
    public array $data = [];

    public function __get($name){
        //echo "No existe $name en el objeto";//en este caso va a mostrar "No existe country en el objeto", ya que country no existe
        return $this->data[$name];//obtenemos informacion
    }

    public function __set($name, $value){
        //echo "No puedes agregar $value a $name";//en este caso va a mostrar "No puedes agregar calle tal a address"
        $this->data[$name] = $value; //agregamos informacion
    }
}


?>