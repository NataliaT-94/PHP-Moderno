<?php 
//Principio de inversion de la dependencia/ Dependency inversion principle (DIP):
//Este principio dice lo siguiente Los módulos de alto nivel no deberían depender de los módulos de bajo nivel y ambos deberían depender de abstracciones.
// abtractas: cuando tu creas elementos que te definen simplemente qué es lo que hace más no cómo lo hace.
//Los módulos de alto nivel son los elementos que tienen reglas de negocio. Las reglas de negocio son lo que definen tu sistema.
//Un módulo de bajo nivel Son módulos que tienen funcionamiento básico.  esos son los que tu puedes reemplazar algún día muy rápido. Por ejemplo, conexión a base de datos, enviar correo electrónico, conectarte a solicitud HTTP, hacer una operación matemática, hacer una operación matemática.

interface ReportInterface{
    public function generate(string $content);//creamos un interface
}


class PDFReport implements ReportInterface{//implementamos el interface
    public function generate(string $content){
        echo "Se crea pdf con el contenido: $content";
    }
}

class HTMLReport implements ReportInterface{
    public function generate(string $content){
        echo "Se crea html con el contenido: $content";
    }
}

class ExcelReport implements ReportInterface{
    public function generate(string $content){
        echo "Se crea excel con el contenido: $content";
    }
}

class Estimate{
    // private PDFReport $report;
    private ReportInterface $report;//dependemos del interface

    public function __construct(ReportInterface $report)//que nos lo manden creado al constructor
    {
        // $this->report = new PDFReport();
        $this->report = $report;//lo asignamos
    }

    public function process(){
        echo "Se genera la estimacion<br>";
        $this->report->generate("Contenido de la estimacion");
    }
}
$pdfReport = new PDFReport();
$htmlReport = new HTMLReport();
$excelReport = new ExcelReport();
// $estimate = new Estimate($pdfReport);
// $estimate = new Estimate($htmlReport);
$estimate = new Estimate($excelReport);

$estimate->process();

?>