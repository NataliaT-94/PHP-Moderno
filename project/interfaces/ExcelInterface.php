<?php 

namespace app\interfaces;


interface ExcelInterface{
    public function create(array $data, string $filrPath);//crear el excel, recibe un array data con la informacion y un string de donde se va a guardar la informacion
}


?>