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