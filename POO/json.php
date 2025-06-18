<?php 
//JSON: Es un formato que ya es utilizado por todos los lenguajes de programación y sirve para que tú puedas comunicar información entre lenguajes de programación, entre cliente servidor. Es decir, tú tienes estructuras de datos en tus lenguajes de programación pueden ser objetos, arrays y a veces necesitas transmitírselos a otros lenguajes de programación o otra tecnología.Entonces JSON es un intermediario para que tú puedas transformar en JSON tu información y a partir de ese JSON, transformarla al tipo de información que él pueda entender.

//----------- Transformar object a json ---------------

$beer = new Beer("Delirium Red", "Delirium", 8.5, true);

$json = json_encode($beer);//tranformar a json
// echo $json;

//----------- Transformar json a object ---------------

$jsonBeer = '{"name":"Delirium Red", "brand":"Delirium","alcohol":8.5, "isStrong":true}';
$objBeer = json_decode($jsonBeer);//transformat a objeto

//----------- Transformar array a json ---------------

$arr = [
    "name" => "Hector",
    "country" => "Mexico"
];

$newJson = json_encode($arr);
echo $newJson;

//----------- Transformar json a array ---------------

$newArr = json_decode($newJson, true);//con el true se transforma en array asociativo, sin el true se transforma en object
echo $newArr["country"];



class Beer{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct($name, $brand, $alcohol, $isStrong)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}



?>