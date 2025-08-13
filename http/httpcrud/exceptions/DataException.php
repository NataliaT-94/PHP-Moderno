<?php 
//excepcion para el problema sea el manejo de data es decir para cuando la informacion sea erronea

namespace app\exceptions;

use Exception;//usamos clase global de php

class DataException extends Exception{//hereda deException
    public function __construct($message){
        parent::__construct($message);
    }
}






?>