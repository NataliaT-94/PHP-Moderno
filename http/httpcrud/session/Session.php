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

    public function get(): array
    {
        return $_SESSION["beers"];
    }

    public function create($data)
    {
        $beers = $_SESSION["beers"];//obtener el array
        if(count($beers) == 0){//si esta en 0
            $data['id'] = 1;//le agregamos un id 1
        }else{//si tiene algo
            $lastElement = $beers[count($beers) -1];//va al ultimo elemento
            $data['id'] = ((int)$lastElement["id"]) + 1;//le agrega un id, el cual al ultimo elemento le suma 1
        }
        array_push($beers, $data);
        $_SESSION["beers"] = $beers;//guardamos la nueva informacion
    }

    public function update($data)
    {
        $beers = $_SESSION["beers"];
        
        foreach($beers as $key => $beer){//recorremos el array
            if($beer["id"] == $data["id"]){//si existe con un id
                $beer[$key] == $data;//modificamos la informacion
                break;
            }
        }
        $_SESSION["beers"] = $beers;//guardamos la nueva informacion
    }

    public function delete(int $id)
    {
        $beers = $_SESSION["beers"];

        foreach($beers as $key => $beer){//recorremos el array
            if($beer["id"] == $id){//si existe con un id
                unset($beers[$key]);//elimina
                $beers = array_values($beers);
                $_SESSION["beers"] = $beers;
                break;
            }
        }
    }

    public function exists(int $id): bool
    {
        $beers = $_SESSION["beers"];

        foreach($beers as $beer){//recorremos el array
            if($beer["id"] == $id){//si existe con un id
                return true;
            }
        }
        return false;
    }


}

?>