<?php
//Class abstract: Puedes tener una base abstracta de un comportamiento, de una estructura y esto sirve mucho para el diseño del software.No puedes crear objetos a partir de estas clases.
//constante: es una variable la cual no se va a modificar, y se ecribe con letras mayusculas.

$beer = new Beer("Delirium", 15);

echo $beer->getName();

showInfo($beer);

function showInfo(Product $product){
    echo "$ ".$product->calculatePrice();
}

abstract class Product{//clase abstracta
    protected float $price;
    protected string $name;

    abstract public function calculatePrice(): float;//metodo abstracto sin funcionalidad

    public function getName(): string{
        return $this->name;
    }
}

class Beer extends Product{
    const TAX = 1.1;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function calculatePrice(): float{//cumplimos con la funcion de calcular precio que exije el padre
        return $this->price * self::TAX;
    }

}


?>