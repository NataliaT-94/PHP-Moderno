<?php 

namespace app\business;

use  app\interfaces\DataInterface;
use  app\interfaces\ExcelInterface;


class GeneratorExcel{
    private DataInterface $repository;//recibir informacion
    private ExcelInterface $excel;//generar excel

    public function __construct(DataInterface $repository, ExcelInterface $excel)
    {
        $this->repository = $repository;
        $this->excel = $excel;
    }

    public function generate(string $filePath){
        $data = $this->repository->get();//obtengo un array con la informacion y lo guardo en la variable data
        $this->excel->create($data, $filePath);//creamos el archivo excel
    }
}



?>