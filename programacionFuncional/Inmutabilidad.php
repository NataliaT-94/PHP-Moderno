<?php 
//La inmutabilidad en programación es la capacidad que tienen ciertas estructuras, ciertos valores, para no modificarse. En este caso un objeto que no permita que se pueda modificar. Entonces la inmutabilidad de esta manera puede protegernos a saber que ese objeto no se va a modificar por nada, permitiendo que evitemos efectos secundarios. Por ejemplo, la función pura. Ya sabemos que ese objeto que es desde que se lo damos, no se puede modificar. Ya sabemos que la función internamente no lo va a poder modificar. En caso de que necesitemos el objeto con valores distintos, podemos utilizar técnicas como la clonación o hacer un método en la misma clase, el cual haga una clonación de los valores más el cambio que se le está solicitando.

class Location{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function move(float $x, float $y): Location{
        $location = new Location($this->x + $x, $this->y + $y);
        return $location;
    }
}

$location = new Location(1, 2);
$newLocation = $location->move(10, 22);
echo $location->getX()." ".$location->getY()."<br>";
echo $newLocation->getX()." ".$newLocation->getY()."<br>";


?>