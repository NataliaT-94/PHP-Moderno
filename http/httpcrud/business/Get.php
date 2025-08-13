<?php 
//Caso de uso (historia del usuario) GET, para obtener informacio

namespace app\business;

use app\interfaces\RepositoryInterface;

class Get{
    private RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function get(): array{
        return $this->repository->get();
    }
}

?>