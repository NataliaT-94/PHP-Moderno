<?php 
//POSMAN -> http://localhost/GitHub/PHP-Moderno/http/httpenPHP/post.php

//body -> row -> JSON
    // {
    // "name": "Natalia",
    // "age": 30
    // }

//----------------
header('Content-type: application/json');//para aclarar en la respuesta del http que es un json

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //echo file_get_contents('php://input'); //ahí yo puedo ver la información que me estás mandando desde una solicitud, en este caso post.

    $json = file_get_contents('php://input');//string
    $data = json_decode($json);//lo convierto en objeto
    //echo $data->name;//objeto
    
    $name = $data->name;//asignamos el objeto a variables
    $age = $data->age;
    
    //con Arrays ------
    //$data = json_decode($json, true);//lo convierto en array
    //echo $data["name"];

    // extract((array)$data);//convierte  los elementos del array en variables que puedan ser utilizadas debajo
    // echo $name;
    
    http_response_code(201);//recibido correctamente pero hubo una modificacion
    echo json_encode([
        "message"=>"Datos recibidos correctamente"
    ]);

} else {
    http_response_code(404);//podemos mandar directamente el código. Ya que al no ser get se entiende como error
    echo json_encode([
        'error'=>'La solicitud no es de tipo POST'
    ]);
}

?>