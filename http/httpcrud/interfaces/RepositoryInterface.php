<?php 
//Los repositorios son elementos que guardan o más bien encapsulan el comportamiento de guardado de la persistencia, siendo la persistencia una base de datos, un archivo, etc...

namespace app\interfaces;

interface RepositoryInterface{
    //definimos los metodos 
    public function create($data);
    public function get(): array;
    public function update($data);
    public function delete(int $id);
    public function exists(int $id): bool;//definimos si existe un id
}



?>