<?php 
//Caso de uso ADD, para agregar informacion


namespace app\business;

use app\exceptions\ValidatorException;
use app\interfaces\RepositoryInterface;
use app\interfaces\ValidatorInterface;

class Add{
    private RepositoryInterface $repository;//para guardar la informacion
    private ValidatorInterface $validator;//para validar la informacion

    public function __construct(RepositoryInterface $repository, ValidatorInterface $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function add($data){
        if(!$this->validator->validateAdd($data)){//si no es valido
            throw new ValidatorException($this->validator->getError());//recibimos el mensaje de error correspondiente
        }

        $this->repository->create($data);//si es valido mandamos la informacion al metodo crear
    }
}


?>