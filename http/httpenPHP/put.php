<?php 
//http://localhost/GitHub/PHP-Moderno/http/httpenPHP/put.php

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

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    //echo file_get_contents('php://input'); //ahí yo puedo ver la información que me estás mandando desde una solicitud, en este caso post.

    $json = file_get_contents('php://input');
    $data = json_decode($json);
    extract((array)$data);

    if($data != null && isset($id) && isset($name)){
        $index = get($id, $arr);

        if($index >= 0){
            $arr[$index]["name"] = $name;

            http_response_code(200);
            echo json_encode([
                "message"=>"Datos actualizados en servidor",
                "data"=> json_encode($arr)
            ]);
        } else {
            http_response_code(404);
            echo json_encode([
                'error'=>'no existe el identificador '.$id
            ]);
        }
    }else{
        http_response_code(400);
        echo json_encode([
            'error'=>'Informacion Erronea'
        ]);
    }

} else {
    http_response_code(405);//el metodo no es permitido
    echo json_encode([
        'error'=>'La solicitud no es de tipo PUT'
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