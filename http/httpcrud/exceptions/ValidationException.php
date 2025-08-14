<?php 
//


namespace app\exceptions;

use Exception;//usamos clase global de php

class ValidationException extends Exception{//hereda deException
    public function __construct($message){
        parent::__construct($message);
    }
}



?>
