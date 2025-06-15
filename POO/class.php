<?php
//Class:Una clase te permite crear objetos y el objeto es una estructura de datos, una colección de información, llamada propiedades, y comportamientos, llamadas metodos

$sale = new Sale();//objeto

//accedemos a las propiedades del objeto
$sale->total = 10.5;
$sale->date = date("Y-m-d");
$sale->createInvoice();
// print_r($sale);//imprimimos lo que contiene el objeto

class Sale{//clase
    public $total;
    public $date;

    public function createInvoice(){//Metodo
        echo "Se crea la factura";
    }
}



?>