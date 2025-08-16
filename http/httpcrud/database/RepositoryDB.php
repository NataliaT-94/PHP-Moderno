<?php 
namespace app\database;

use PDO;
use app\interfaces\RepositoryInterface;
use app\database\BaseRepository;

class RepositoryDB extends BaseRepository implements RepositoryInterface{
    const TABLE = 'beer';

    public function get(): array
    {
        $sql = "SELECT * FROM ".self::TABLE;//query
        $stmt = $this->pdo->prepare($sql);//preparamos la sentencia
        $stmt->execute();//ejecutamos
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);//obtenemos informacion, solamente las columna
        return $data;
    }
    public function exists($id): bool
    {
        $sql = "SELECT * FROM ".self::TABLE 
                ." WHERE id = : id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);//protejemos la consulta para que no puedan hacer inyecciones sql 
        $result = $stmt->rowCount() > 0;
        return $result;
    }
    public function create($data)
    {
        $sql = "INSERT INTO ".self::TABLE. "(name, alcohol, idBrand) "
                ."VALUES (:name, :alcohol, :idBrand)";//mandamos la informacion de forma protegida
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
    public function update($data)
    {
        
    }
    public function delete($id)
    {
        
    }


}
 ?>