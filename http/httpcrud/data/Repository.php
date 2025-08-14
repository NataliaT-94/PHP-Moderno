<?php 
//

namespace app\data;

use app\interfaces\RepositoryInterface;

class Repository{
    private string $fileData;
    private array $db;

    public function __construct(){
        $this->fileData = __DIR__.'/data.json';
        $json = file_get_contents($this->fileData);//en la variable $json se lee el archivo que esta en fileData
    }
}



?>