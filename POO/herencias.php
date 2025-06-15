<?php
//herencia: te permite crear un class hija con todas las funcionalidades de la class padre y extenderla

$sale = new Sale(10.5, date("Y-m-d"));
$onlineSale = new OnlineSale(15, date("Y-m-d"), "Tarjeta");
echo $onlineSale->createInvoice();///utilizamos los metodos del padre
echo $onlineSale->showInfo();

class Sale{//clase
    public float $total;
    public string $date;
    public array $concepts;
    public static $count;//propiedad estatica

    public function __construct(float $total, string $date)//le podemos asignar nosotros parámetros que van a ser obligados a utilizarse al momento que se crea el objeto.
    {
        $this->total = $total;//le asignamos propiedades a los parametros
        $this->date = $date;
        $this->concepts = [];
        self::$count++;//accedemos a la propiedad estatica de forma interna
    }

    public function addConcept(Concept $concept){
        $this->concepts[] = $concept;
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

    public function __construct(float $total, string $date, string $paymentMethod)//le podemos asignar nosotros parámetros que van a ser obligados a utilizarse al momento que se crea el objeto.
    {
        parent::__construct($total, $date);//invocamos el constructor del padre
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