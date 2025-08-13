<?php 
require_once __DIR__ . '/autoload.php';

use\exceptions\DataException;
use\exceptions\ValidatorException;

try{

    switch ($_SERVER['REQUEST_METHOD']) {//analiza un elemento y ve los casos distintos.
        case 'POST':
            # code...
            break;
        case 'PUT':
            # code...
            break;
        case 'DELETE':
            # code...
            break;
        case 'GET':
            # code...
            break;
        
        default:
            http_response_code(405);//metodo no permitido
            break;
    }

}catch(ValidatorException $e){ 
    http_response_code(400);//la informacion es erronea o falta enviar informacion
    echo json_encode(['error' => $e->getMessage()]);
}catch(DataException $e){//agregamos otro catch para categorizar las dataExceptions 
    http_response_code(404);//el recurso no se encuentra
    echo json_encode(['error' => $e->getMessage()]);
}
catch(\Exception $e){
    http_response_code(500);//error en el servidor
    echo json_encode(['error' => $e->getMessage()]);
}



?>