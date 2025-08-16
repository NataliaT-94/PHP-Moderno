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
        return false;
    }
    public function create($data)
    {
        
    }
    public function update($data)
    {
        
    }
    public function delete($id)
    {
        
    }


}
 ?>