<?php
//Encapsulamiento: Es de las partes principales de este paradigma y consiste en darle cierta restricción de acceso a propiedades y métodos.
    //Publica: Todos pueden acceder a ella. Puede ser visto por todos los elementos por fuera, por dentro c
    //Privada: Solamente puede ser visto por la misma clase.
    //Protected: Solamente puedan ver los elementos tú y quien te hereda.

$sale = new Sale(10.5, date("Y-m-d"));
$onlineSale = new OnlineSale(date("Y-m-d"), "Tarjeta");
// echo $onlineSale->createInvoice();
// echo $onlineSale->showInfo();

$concept = new Concept("cerveza", 10.2);
$concept2 = new Concept("cerveza 2", 20.2);
$sale->addConcept($concept);
$sale->addConcept($concept2);

echo $sale->getTotal();

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