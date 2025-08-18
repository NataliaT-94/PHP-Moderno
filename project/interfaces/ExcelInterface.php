<?php 

namespace app\interfaces;


interface DataInterface{
    public function create(array $data, string $filrPath);//crear, recibe un array data con la informacion y un string de donde se va a guardar la informacion
}


?>