<?php
//Traits: Sirve para poder reutilizar codigo. Podemos crear funcionalidad y propiedades, la cual se puede compartir en múltiples clases, clases que no tienen relación alguna. Esto es muy utilizado por frameworks como Laravel.

trait EmailSender {//trait
    public function sendEmail(){
        echo "Se envia un Email<br>";
    }
}

trait DB{
    public function save(){
        echo "Se guarda en la base de datos<br>";
    }
}

trait Log{
    public function log(string $message, string $fileName){
        if(!file_exists($fileName)){//comprueba si no existe el archivo $fileName
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s")." - ".$message."\n";
        file_put_contents($fileName, $current);

    }
}

class Invoice{
    use EmailSender, DB, Log;//utilizamos el trait, va a obtener todas las funcionalidades del trait.

    public function create(){
        echo "Se crea ka factura<br>";
        $this->log("Se creo la factura", "log.txt");
    }
}

$invoice = new Invoice();//creamos el objeto
$invoice->sendEmail();//llamamos a la funcionalidad
$invoice->save();
$invoice->create();

?>