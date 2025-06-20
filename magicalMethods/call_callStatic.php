<?php 
//__call: Sirve cuando tú quieres ejecutar un método que no existe. Tiene dos parámetros, uno es el nombre al método que tú quieres acceder y otro son los argumentos que estas enviando.
//__callStatic: Solo funciona con los metodos estaticos.Mismo caso que el call normal, solamente que éste se va a ejecutar cuando yo quiera acceder de forma estática ej: nombre de la class :: metodo().  podemos interceptar esas llamadas a cosas que no existen.

//implode:recorrer todo el array y separar todos los elementos por una coma.


$engine = new Engine();
//$engine->run("name", "some", true);//ejecutamos la funcion run, el cual no existe, call nos muestra los argumentos name some y 1 del true

Engine::some();//metodo estatico

class Engine{

    public function __call($name, $args){
        echo "Llamando al metodo '$name' "
            ."con los argumentos: " . implode(', ', $args) . "\n";
    }

    public static function __callStatic($name, $args){
        echo "Llamando al metodo '$name' "
            ."con los argumentos: " . implode(', ', $args) . "\n";
    }
}
//------------------------ Ejemplo --------------------------

$engine2 = new Engine2("log.txt");//cuando creamos el objeto, creamos un log.txt
$engine2->error("Un error ocurrio");
$engine2->log("El usuario ha hecho lo siguiente");
$engine2->warning("Un alerta!");

class Engine2{
    private $fileName;
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function __call($name, $args){
        $message = $name.": ";//mensaje
        $message .= $args[0]." - ";
        $message .= date("Y-m-d H:i:s")."\n";

        if(!file_exists($this->fileName)){//comprobamos que no exista un archivo creado 
            file_put_contents($this->fileName, "");
        }

        file_put_contents($this->fileName, $message, FILE_APPEND);
    }


    public static function __callStatic($name, $args){
        echo "Llamando al metodo '$name' "
            ."con los argumentos: " . implode(', ', $args) . "\n";
    }
}


?>