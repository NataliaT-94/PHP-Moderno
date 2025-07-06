<?php 
//Comportamiento- strategy: Nos van a dar una estructura, nos van a dar una forma de organizar las clases e interfaces para comportamientos en específico.
//Este patrón Strategy aplica muchísimo a muchas situaciones. Por ejemplo, a lo mejor tienes distintos tipos de venta, a lo mejor tienes distintos tipos de envíos de correos o envíos o envíos de mensaje. A lo mejor uno es de correo electrónico, otro es un SMS, otro es un mensaje push notification a un celular, etcétera Y de esta manera tu puedes escalar tu código con el patrón de Strategy para tus comportamientos.
//Interfas que nos obliga a tener un metodo. Tenemos acá dos clases que implementan la interfaz Strategy, por lo cual cumplen con tener el método



interface IStragegy{
    public function get(): array;
}

class ArrayStrategy implements IStragegy{
    private array $data = ["Titulo 1", "Titulo 2", "Titulo 3"];

    public function get(): array
    {
        return $this->data;
    }
}

class UrlStrategy implements IStragegy{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function get(): array {
        $data = file_get_contents($this->url);
        $arr = json_decode($data, true);
        return array_map(fn($item) => $item["title"], $arr);
    }
}

class InfoPrinter{
    private IStragegy  $strategy;
    public function __construct(IStragegy $strategy)
    {
        $this->strategy = $strategy;
    }
    
    public function print(){
        $content = $this->strategy->get();
        foreach($content as $item){
            echo $item."<br>";
        }
    }
}

$arrayStrategy = new ArrayStrategy();
$urlStrategy = new UrlStrategy("https://jsonplaceholder.typicode.com/posts");
$infoPrinter = new InfoPrinter($urlStrategy);
$infoPrinter = new InfoPrinter($arrayStrategy);
$infoPrinter->print();
?>