<?php 
require __DIR__ . '/../vendor/autoload.php';

use app\interfaces\ExcelInterface;
use app\interfaces\DataInterface;
use app\data\BeerData;
use app\excel\CreatorExcel;
use app\business\GeneratorExcel;

$now = date('Y-m-d');

$filePath = __DIR__ . '/files/beer-' . $now . '.xlsx';


$repository = new BeerData();//creamos el objeto encargado de la infomacion
$excel = new CreatorExcel();//creamos el objeto encargado de crear el excel

$generator = new GeneratorExcel($repository,$excel);//creamos el objeto encargado de general el excel mediante la informacion obtenida

$generator->generate($filePath);

echo "Excel creado";


?>