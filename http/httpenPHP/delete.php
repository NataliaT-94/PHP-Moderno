<?php 
//http://localhost/GitHub/PHP-Moderno/http/httpenPHP/delete.php?id=1

header('Content-type: application/json');

$arr = [
    [
        "id" => 1,
        "name" => "Pablo"
    ],
    [
        "id" => 2,
        "name" => "Pedro"
    ]
];

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    extract(($_GET));
    if(isset($id)){
        $index = get($id, $arr);

        if($index >= 0){
            unset($arr[$index]);//elimina el array
            $arr = array_values($arr);//reorganiza los arrays

            http_response_code(200);
            echo json_encode([
                "message"=>"Datos Eliminados en servidor",
                "data"=> json_encode($arr)
            ]);
        } else {
            http_response_code(404);
            echo json_encode([
                'error'=>'No existe el identificador '.$id
            ]);
        }
    } else {
        http_response_code(400);
        echo json_encode([
            'error'=>'Informacion Erronea'
        ]);
    }

} else {
    http_response_code(405);//el metodo no es permitido
    echo json_encode([
        'error'=>'La solicitud no es de tipo DELETE'
    ]);
}

function get(int $id, array $arr){//busca un array por medio de un id
    for($i=0; $i<count($arr); $i++){//recorre lo el array
        if($arr[$i]['id'] === $id){
            return $i;
        }
    }
    return -1;
}


?>