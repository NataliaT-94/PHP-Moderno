<?php 
//Caso de uso Delete, para eliminar informacion

namespace app\business;

use app\interfaces\RepositoryInterface;
use app\exceptions\DataException;//validar cuando algo falla en la base de datos

class Delete{
    private RepositoryInterface $repository;//para guardar la informacion

    public function __construct(RepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function delete(int $id){

        if(!$this->repository->exists($id)){//si no existe el id
            throw new DataException('No existe el dato a eliminar');        }

        $this->repository->delete($id);
    }
}


?>