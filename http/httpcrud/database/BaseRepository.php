<?php 
namespace app\database;

use PDOException;
use PDO;

abstract class BaseRepository{
    protected $pdo;

    public function __construct()//el constructor va a ser invocado por quien herede de esta class, en el momento que hago new
    {
        $dsn = "mysql:host". DB_HOST .";dbname=". DB_NAME .";charset=utf8";//variable de origen de datos
        $this->pdo = new PDO($dsn, DB_USER, DB_PASS);//conexion a la base de datos
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//preparamos el pdo por si hay un error o una excepcion, nos avisa
    }

}

?>