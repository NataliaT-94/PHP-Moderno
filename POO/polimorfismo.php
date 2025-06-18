<?php
//Polimorfismo - Sobreescritura de metodos (overwrite): Es la capacidad que tienen métodos que están en clases para comportarse de diferentes maneras. Dependiendo del contexto.

class Discount{
    protected $discount = 0;

    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount($price){
        echo "Se aplica descuento<br>";
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount{
    const SPECIAL_DISCOUNT = 2;

    public function getDiscount($price)
    {
        echo "Se aplica descuento especial<br>";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}

// $discount = new Discount(0.1);
$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->getDiscount(100);
echo $discountAmount;
?>