<?php 
require_once __DIR__ . '/autoload.php';

use app\business\Add;
use app\business\Get;
use app\business\Update;
use app\business\Delete;
use app\data\Repository;
use app\validators\Validator;
use app\exceptions\ValidationException;
use app\exceptions\DataException;

$repository = new Repository();
$validator = new Validator();

try{

    switch ($_SERVER['REQUEST_METHOD']) {//analiza un elemento y ve los casos distintos.
        case 'POST':
            $body = json_decode(file_get_contents('php://input'), true);
            $add = new Add($repository, $validator);
            $add->add($body);
            break;
        case 'PUT':
            $body = json_decode(file_get_contents('php://input'), true);
            $update = new Update($repository, $validator);
            $update->update($body);
            break;
        case 'DELETE':
            $id = $_GET['id'];
            $delete = new Delete($repository);
            $delete->delete($body);
            break;
        case 'GET':
            $get = new Get($repository);
            echo json_encode($get->get());
            break;
        
        default:
            http_response_code(405);//metodo no permitido
            break;
    }

}catch(ValidationException $e){ 
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