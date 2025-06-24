<?php 
//principio abierto, cerrado/ Open Closed Principle (OCP):
//Este es un principio en el cual indica que los módulos funciones clases deben estar abiertas para extensión, pero cerradas para modificación. quiere decir que si tú tienes funcionamiento deberá estar puesto para que tú lo puedas extender, pero si necesitan modificar algo, no necesites o rara vez necesites modificar en sí mismo ese funcionamiento. Si necesitas nuevos, nuevos opciones, nuevas categorías, no modifiques lo que ya está hecho. Es decir, este principio dice que si tú ya tienes funcionamiento y hay nuevo funcionamiento que agregar, no tendrías que mover lo que ya está funcionando.

interface OpInterface{
    public function calculate(float $a, float $b): float;
}

class Sum implements OpInterface{
    public function calculate(float $a, float $b): float
    {
        return $a + $b;
    }
}

class Mul implements OpInterface{
    public function calculate(float $a, float $b): float
    {
        return $a * $b;
    }
}

class Sub implements OpInterface{
    public function calculate(float $a, float $b): float
    {
        return $a - $b;
    }
}

class Calculator{
    private OpInterface $op;

    public function __construct(OpInterface $op)
    {
        $this->op = $op;
    }

    public function calculate(float $a, float $b): float{
        return $this->op->calculate($a, $b);
    }
}

$sum = new Sum();
$mul = new Mul();
$sub = new Sub();

$calculator->calculate(4,5);
?>