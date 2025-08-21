<?php 
namespace app\session;

use app\interfaces\RepositoryInterface;

class Session implements RepositoryInterface{
    public function __construct()
    {
        session_start();//tiene que iniciar sesion
        if(!isset($_SESSION["beers"])){//Si no existe la variable beers
            $_SESSION["berrs"] = [];//vamos a poner un array vacio
        }
    }
}

?>