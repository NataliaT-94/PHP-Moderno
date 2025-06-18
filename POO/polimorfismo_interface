<?php 

//Polimorfismo Interfaces: Esto sirve para la arquitectura de software para que tu puedas reemplazar comportamientos simplemente yendo a un lugar y todo el comportamiento que puede ser muy simple o muy complejo, muy complejo y parecido, se sustituye de manera muy fácil sin que alteres cosas ya hechas. Esta función depende de una abstracción.
//Abstraccion: Una abstracción es indicar una acción que se hace más no como se hace. cómo se hace quien lo hace son las clases que implementan.

interface GetInfo{
    public function getInfo(): string;
}

class Address implements GetInfo{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function getInfo(): string{
        return $this->address;
    }
}

class WebSite implements GetInfo{
    protected $url;

    public function __construct($url)
    {
        $this->url =$url;
    }

    public function getInfo(): string {
        return file_get_contents($this->url);//lee un archivo y lo transforma en string
    }
}

function printInfo(GetInfo $site){
    echo $site->getInfo();
}

$address = new Address('Calle 123');
$webSite = new WebSite('https://info.com');
printInfo($address);
printInfo($webSite);



?>