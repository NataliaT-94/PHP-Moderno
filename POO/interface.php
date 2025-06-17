<?php
//interface: Es como un contrato, solamente tiene métodos por implementar. No tiene métodos que son implementados ni tampoco tiene propiedades.
//La interfaz es parte de la base de la arquitectura de software, sobre todo para que tú puedas trabajar con las clases implementando interfaces y que clases que estén utilizando objetos internamente utilicen interfaces para que fácilmente puedas cambiar un tipo de clase por otro tipo de clase sin necesidad de moverle internamente a las clases que usan objetos internamente.

use Dom\Document as DomDocument;

interface SendInterface{//interfas
    public function send(string $message);//metodo el cual va a obligar a tener si se utiliza si implementamos la interfas
}

interface SaveInterface{//interfas
    public function save();
}

class Document implements SendInterface, SaveInterface{//implementamos las interfaces, puede ser mas de una
    public function send(string $message){
        echo "Se envia la venta ".$message;
    }

    public function save(){
        echo "Se guarda la venta en la nube";
    }
}

class BeerRepository implements SaveInterface{//manda un repositorio, pero tambien puede manf¿dar un documneto ya que tambien implementa saveinterface
    public function save(){
        echo "Se guarda la venta en una bd";
    }
}

class SaveProcess{
    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager)
    {
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "hacemos algo antes<br>";
        $this->saveManager->save();
    }
}

$beerRepository = new BeerRepository();
$document = new Document();
$saveProcess = new SaveProcess($document);
$saveProcess->keep();
?>