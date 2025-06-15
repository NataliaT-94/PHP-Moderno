<?php
declare(strict_types=1);//declaramos un tipado estricto

//Class:Una clase te permite crear objetos y el objeto es una estructura de datos, una colección de información, llamada propiedades, y comportamientos, llamadas metodos

//-------- Sin Constructor -------------
$sale = new Sale();//objeto
 
//accedemos a las propiedades del objeto
$sale->total = 10.5;
$sale->date = date("Y-m-d");
$sale->createInvoice();
// print_r($sale);//imprimimos lo que contiene el objeto

//-------- Con Constructor -------------
//Constructores: es un tipo   de metodo especial. Para que yo obligue en la creación del objeto utilizando la clase que tenga que existir algo. Si no existe ese algo, no puedo crear el objeto.

$sale = new Sale(10.5, date("Y-m-d"));

echo Sale::$count;//accedemos por fuera

Sale::reset();//llamamos al metodp estatico
 
echo $sale->createInvoice();


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

class Concept{
    public string $descripcion;
    public float $amount;

    public function __construct(string $descripcion, float $amount)
    {
        $this->descripcion = $descripcion;
        $this->amount = $amount;
    }
}

//------------- Destructores --------------

//destructor: Estos se ejecutan al momento que tu objeto ha sido dejado de utilizarse (Cuando se acaba el script). También cuando reemplazas el objeto, tu variable por otro nuevo objeto y sobre todo si es un objeto entre una función y esta función termina el destructor se invoca en automático, tu no lo invocas. Solamente puede existir una vez, pero el destructor no puede recibir parámetros y tampoco retorna información.

//Metodos y propiedades estaticos: Pertenece a la class y no al object.



?>