<?php 
//Caso de uso UPDATE, para modificar informacion

namespace app\business;

use app\interfaces\RepositoryInterface;
use app\interfaces\ValidatorInterface;
use app\exceptions\DataException;//validar cuando algo falla en la base de datos
use app\exceptions\ValidationException;//valida la informacion que envia el cliente

class Update{
    private RepositoryInterface $repository;//para guardar la informacion
    private ValidatorInterface $validator;//para validar la informacion

    public function __construct(RepositoryInterface $repository, ValidatorInterface $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function update($data){
        if(!$this->validator->validateUpdate($data)){//si no es valido la informacion
            throw new ValidationException($this->validator->getError());//recibimos el mensaje de error correspondiente
        }
        if(!$this->repository->exists((int)$data['id'])){//si no existe el id
            throw new DataException('No existe el dato a actualizar');        }

        $this->repository->update($data);//si es valido mandamos la informacion al metodo crear
    }
}


?>