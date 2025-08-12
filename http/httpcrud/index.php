<?php 
require_once __DIR__ . '/autoload.php';

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

}catch(\Exception $e){
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}



?>