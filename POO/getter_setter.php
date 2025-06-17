<?php
//getter y setter: Es cuando tú necesitas que algo que está protegido. Tenga ciertas validaciones y restricciones a ella, o tengas la obtención de este elemento con cierto valor o el elemento original, pero sin que puedas modificarlo.
    //get: Los getter comienzan con la palabra get seguida del campo del nombre del campo. Necesito obtener algo
    //set: Vamos a escribir la palabra set seguida del nombre de la propiedad y lo que vamos a recibir lo vamos a asignar en si. Necesito modificar algo

$sale = new Sale(10.5, date("Y-m-d"));
$onlineSale = new OnlineSale(date("Y-m-d"), "Tarjeta");
// echo $onlineSale->createInvoice();
// echo $onlineSale->showInfo();

$concept = new Concept("cerveza", 10.2);
$concept2 = new Concept("cerveza 2", 20.2);
$sale->addConcept($concept);
$sale->addConcept($concept2);

echo $sale->getTotal();
echo $sale->getDate();
$sale->setDate("2");

class Sale{
    protected float $total;
    public string $date;
    public array $concepts;
    public static $count;

    public function __construct(string $date)
    {
        $this->date = $date;
        $this->total = 0;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept){
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal(): float{
        return $this->total;
    }

    public function getDate(): float{
        return $this->date;
    }

    public function setDate(string $date){
        if(strlen($date) > 10 || strlen($date) < 10){
            echo "La fecha es incorrecta";
        }
        $this->date = $date;
    }

    public static function reset(){//metodo statico
        self::$count = 0;
    }

    public function __destruct()
    {
        echo "Se a eliminado el objeto";
    }

    public function createInvoice(): string{//Metodo
        return "Se crea la factura";
    }
}

class OnlineSale extends Sale {//extendemos las funcionalidad del padre
    public $paymentMethod;

    public function __construct(string $date, string $paymentMethod)//le podemos asignar nosotros parámetros que van a ser obligados a utilizarse al momento que se crea el objeto.
    {
        parent::__construct($date);//invocamos el constructor del padre
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo() : string{
        return "La venta tiene un monto de: $this->total";
    }
}

class Concept{
    public string $descripcion;
    public float $amount;

    public function __construct(string $descripcion, float|int|string $amount)//union type
    {
        $this->descripcion = $descripcion;
        $this->amount = $amount;
    }
}
?>