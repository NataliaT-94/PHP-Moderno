<?php 
//Diseño creacional- Factory method: El tipo creacional sirven para crear objetos dependiendo de ciertas circunstancias, en este caso Factory Method. Sirve bastante cuando nosotros no conocemos el tipo de objeto que vamos a utilizar.
//Bueno, Factory Method sirve para este tipo de situaciones donde tú no conoces el tipo final de tu objeto y existe un método que vas a invocar para crear ese objeto También sirve este patrón de diseño cuando la creación del objeto tiene lógica. Y esta lógica quieres tú tenerla en un método, Es decir, la creación del objeto la quieres delegar a un método y este método simplemente lo invocas con los parámetros y esto hará con las reglas de negocio internamente el objeto. Este patrón de diseño Factory viene bien. Factory Method.

interface BeerInterface{
    public function getPrice(): float;
}

class Lager implements BeerInterface{
    private float $tax;
    private float $price;

    public function __construct(Float $price, float $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function getPrice(): float
    {
        return $this->price + $this->tax;
    }
}

class IPA implements BeerInterface{
    private float $discount;
    private float $price;

    public function __construct(Float $price, float $discount)
    {
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getPrice(): float
    {
        return $this->price - $this->discount;
    }
}

abstract class BeerFactory{
    abstract public function create(array $params): BeerInterface;
}

class LagerFactory extends BeerFactory{
    public function create(array $params): BeerInterface{
        return new Lager($params["price"], $params["tax"]);
    }
}

class IPAFactory extends BeerFactory{
    public function create(array $params): BeerInterface{
        return new Lager($params["price"], $params["discount"]);
    }
}

$ipaFactory = new IPAFactory();
$ipa = $ipaFactory->create(["price" => 10, "discount" => 2]);
echo "$ ".$ipa->getPrice();

$lagerFactory = new IPAFactory();
$lager = $lagerFactory->create(["price" => 10, "discount" => 2]);
echo "$ ".$lager->getPrice();

?>