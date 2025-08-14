<?php 
//

namespace app\data;

use app\interfaces\RepositoryInterface;

class Repository implements RepositoryInterface{
    private string $fileData;
    private array $db;

    public function __construct(){
        $this->fileData = __DIR__.'/data.json';
        $json = file_get_contents($this->fileData);//en la variable $json se lee el archivo que esta en fileData
        $this->db = json_decode($json, true);//deserializarmos el json para obtenerlo en un array
    }

    public function get(): array{
        return $this->db;
    }

    public function create($data){
        if(count($this->db) == 0){//si el db esta vacio
            $data['id'] = 1; //la data agregada se va a tener un id 1
        } else {//si la db no esta vacia
            $lastElement = $this->db[count($this->db) - 1];//obtenemos la posicion del ultimo elemento
            $data['id'] = ((int)$lastElement["id"]) + 1;//luego a la nueva informacion le colocamos el id que le sigue despues del ultimo elemento guardado
        }
        $this->db[] = $data;//por ultimo lo agregamos al array
        file_put_contents($this->fileData, jron_encode($this->db));//lo guardamos en el archivo db
    }

    public function exists(int $id): bool{
        foreach ($this->db as $item) {
            if($item["id"] == $id){
                return true;
            }
        }
        return false;
    }
}



?>