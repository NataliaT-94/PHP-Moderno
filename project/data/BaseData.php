<?php 

namespace app\data;

use PDO;

abstract class BaseData{
    protected $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=". DB_HOST ."dbname=". DB_NAME .";charset=utf8";//conexion a la base de datos
        $this->pdo = new PDO($dsn, DB_USER, DB_PASS);//creamos el objeto PDO, recibe la conexion dns, el usuario y contraseña
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//nos avisa si existe un error o excepcion
    }
}

?>