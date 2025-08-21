<?php 

namespace app\excel;

use app\interfaces\ExcelInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class CreatorExcel implements ExcelInterface{
    public function create(array $data, string $filrPath)//implementamo el excelinterface el cual requiere create()
    {
        $spreadsheet = new Spreadsheet();//creamos un objeto
        $sheet = $spreadsheet->getActiveSheet();//seleccionamos la hoja el cual estamos activos
        $headers = ['Id', 'Cerveza', 'Alcohol'];//encabezados
        $sheet->fromArray([$headers],null, 'A1');//metemos los headers en el sheet, indicando que comenszamos en la fila A1
        $sheet->fromArray($data, null, 'A2');//metemos la informacion recibida a partir de la fila A2
        $write = new Xlsx($spreadsheet);//guardamos la informacion recibida
        $write->save($filrPath);//indicamos donde gruardar
    }
}



?>