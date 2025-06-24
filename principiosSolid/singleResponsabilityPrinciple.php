<?php 
//Principio de responsabilidad unica/ single responsability principle (SRP)
//Este principio establece que una clase debe tener una responsabilidad, Así, cuando tenemos un cambio, solamente aplica una clase y no a varias clases, o por lo menos reducir el impacto de cuando haya exista un cambio de requerimiento bueno afecte al menor número de clases. Tener la clase como una responsabilidad única te ayuda a que sea más fácil de entender, modificar y sobre todo, mantener.

class Order{
    private $items = [];
    private $total;

    public function getTotal(){
        return $this->total;
    }

    public function addItem($description, $price){
        $this->items[] = [
            'description' => $description,
            'precio' => $price
        ];
        $this->total += $price;
    }

    public function createOrder(){
        echo "Se procesa el pedido <br>";
    }

}

class EmailNotifier{
    public function send(Order $order){
        echo "Mensaje del pedido, total: " . $order->getTotal() . "<br>";
    }
}

$order = new Order();//creamos el producto
$order->addItem('Producto 1', 100);//aplicamos el producto
$order->addItem('Producto 2', 200);
$order->createOrder();//ejecutamos la funcion

$emailNotifier = new EmailNotifier();//creamos el objeto
$emailNotifier->send($order);//ejecutamos la funcion
?>
