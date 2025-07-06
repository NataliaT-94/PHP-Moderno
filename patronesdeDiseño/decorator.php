<?php 
//Diseño estructural- decorator: Este patrón de diseño sirve para darle funcionamiento dinámico a objetos ya existentes sin necesidad de heredar. Este patrón de diseño es de tipo estructural y este tipo de patrones, los estructurales, son darle andamios, darles una forma como tenemos que implementar clases, es decir, cómo se van a ensamblar estos objetos para tener una estructura, cómo se relacionan estos objetos para hacer un tipo de técnica?
//Entonces de esta manera nosotros podemos crear comportamientos dinámicos a objetos ya existentes sin necesidad de crear herencia sobre ellos.
interface BudgeInterface{
    public function cost(): float;
}

class BasicBudget implements BudgeInterface{
    Private int $hours;
    private float $hourlyRate;

    public function __construct(int $hours, float $hourlyRate)
    {
        $this->hours = $hours;
        $this->hourlyRate = $hourlyRate;
    }

    public function cost(): float{
        return $this->hours * $this->hourlyRate;//horas por costo
    }
}

class BudgetDecorator implements BudgeInterface{
    protected BudgeInterface $budget;

    public function __construct(BudgeInterface $budget)
    {
        $this->budget = $budget;
    }

    public function cost(): float{//puente
        return $this->budget->cost();
    }
}

class ForeignBudgetDecorator extends BudgetDecorator{
    const EXCHANGE_RATE = 1.5;

    public function cost(): float{//sobreescribimos el cost del padre
        return parent::cost() * self::EXCHANGE_RATE;//aumento el 50%, ejecutando el padre y multiplicandolo por elEXCHANGE
    }
}

class CustomerBudgetDecorator extends BudgetDecorator{
    const DISCOUNT = 0.9;

    public function cost(): float{//sobreescribimos el cost del padre
        return parent::cost() * self::DISCOUNT;//Descuento, ejecutando el padre y multiplicandolo por el DISCOUNT
    }
}

$budget = new BasicBudget(10,100);
echo "presupuesto base: $ ".$budget->cost() . "<br>";

$foreignBudget = new ForeignBudgetDecorator($budget);//lo envuelvoel objeto base $budget con el decorador
echo "presupuesto extranjero: $ ".$foreignBudget->cost() . "<br>";

$customerBudget = new CustomerBudgetDecorator($budget);//lo envuelvoel objeto base $budget con el decorador
echo "presupuesto cliente: $ ".$customerBudget->cost() . "<br>";
?>