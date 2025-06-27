<?php 

//principio de sustitucion de liskov/ Liskov substitution principle ():
//Si tu tienes una clase hija, esta debería ser sustituible por su clase padre sin alterar el comportamiento del programa. Esto indica que si tu tienes una clase llamada A a la cual hereda una clase B, tu puedes sustituir los objetos de B por por equiparlos con el tipo A el padre y no debería romperse tu programa. Esto es lo que dice este principio. Esto hace que las herencias sean correctas y que tengas un diseño coherente en tu sistema. Sobre todo. Esto ya es parte de diseño de sistemas y tener una coherencia en tu sistema indica que no te vas a encontrar con cosas que tu indiques.
//La composición: es utilizar funcionamiento interno de algo que ya está hecho.


interface ISendProject{ // se va a utilizar en las class que sea necesarias
    public function send();
}
interface ISendMail{
    public function send();
}

class SendMail implements ISendMail{
    public function send(){
        echo "Se envia un correo Electronico";
    }
}

class Project{
    public function create(){
        echo "Se ha creado el proyecto";
    }

    // public function send(){
    //     echo "se envia el proyecto"; //ya que en el InternalProyect no se necesita utilizar el send(), creamos un interface ISendProject
    // }
}

class SalesProject extends Project implements ISendProject{
    private ISendMail $sender;//creamos objeto privado de tipo isendmail

    public function __construct(ISendMail $sender)//llamamos al objeto mediante la funcion constructo de tipo isendmail
    {
        $this->sender = $sender;// asignamos
    }
    //aqui mas funcionamiento

    public function send()
    {
        // echo "Se envia el proyecto";
        $this->sender->send();//hacemos un puente
    }
}

class InternalProyect extends Project{
    //extra
    // public function send(){
    //     throw new Exception("los proyectos intermos no se envian"); //ya que se creo el interface, no es necesario esta funcion de excepcion.
    // }
}

function send(ISendProject $project){
    $project->send();
}

// send(new SalesProject);
$sendMail = new SendMail();
send(new SalesProject($sendMail));

?>