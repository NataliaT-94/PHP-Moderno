<?php 
namespace app\interfaces;

interface Validatorinterface{
    //definimos los metodos 
    public function getError(): string;//obtenemos el detalle del erro
    public function validateAdd($data): bool;//validar cuando la informacion se va agregar
    public function validateUpdate($data): bool;//validar cuando la informacion se modifica
   
}


?>