<?php 
namespace app\data;

use PDO;
use app\interfaces\DataInterface;
use app\data\BaseData;

class BeerData extends BaseData implements DataInterface{//hereda BaseData e implememnta DataInterface
    const TABLE = 'beer'; //conecta a una base de datos

    public function get(): array{//para cumplir con el dataInterface
        $sql = "SELECT id, name, alcohol FROM ".self::TABLE;//realizamos la query
        $stml = $this->pdo->prepare($sql);//lo preparamos para evitar inyeccion de jquery
        $stml->execute();//ejecutamos
        $data = $stml->fetchALl(PDO::FETCH_ASSOC);//obtenemos array por el nombre delas columnas de la tablaque hemos recibido(id,name,alcohol)
        return $data;
    }

}

?>