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
        file_put_contents($this->fileData, json_encode($this->db));//lo guardamos en el archivo db
    }

    public function update($data){
        foreach ($this->db as $key => $item) {//recorremos sus valores y su key
            if($item['id'] == $data['id']){//cuando el valor del id de la iteracion es igual al se igual al id de la informacion que recibimos
                $this->db[$key] = $data;//sustituimos el key por la nueva data que recibimos
                file_put_contents($this->fileData, json_encode($this->db));
            }
        }
        return false;
    } 

    public function delete($id){
        foreach ($this->db as $key => $item) {
            if($item['id'] == $id){
                unset($this->db[$key])//eliminamos el elemento que con el id igual al que recibimos del delete
                $this->bd = array_values($this->db);//reordena los indices para que sean unicos
                file_put_contents($this->fileData, json_encode($this->db));
            }
        }
        return false;
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