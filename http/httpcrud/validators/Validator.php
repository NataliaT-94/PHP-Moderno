<?php 

namespace app\validator;

use app\interfaces\ValidatorInterface;

class Validator implements ValidatorInterface{
    private string $error;

    public function getError(): string{
        return $this->error;//retornamos el valor del error
    }

    public function validateAdd($data): bool{//se va a ejecutar en el caso de uso cuando estamos creando información.
        if(empty($data['name'])){//si el nombre no existe, es null o esta vacio
            $this->error = 'Nombre es obligatorio';
            return false;
        }
        return true;
    }

    public function validateUpdate($data): bool{//se va a ejecutar en el caso de uso cuando estamos creando información.
        if(empty($data['id'])){//si el id no existe, es null o esta vacio
            $this->error = 'Id es obligatorio';
            return false;
        }
        if(empty($data['name'])){//si el nombre no existe, es null o esta vacio
            $this->error = 'Nombre es obligatorio';
            return false;
        }
        return true;
    }
}
?>