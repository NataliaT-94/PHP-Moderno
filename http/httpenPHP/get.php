<?php 
//Solicitud http en php

    //POSMAN -> Collections -> + black collections -> rename: curso PHP -> click derecho: add request -> URL

    // http://localhost/GitHub/PHP-Moderno/http/httpenPHP/get.php
    // http://localhost/GitHub/PHP-Moderno/http/httpenPHP/get.php?name=Pedro&age=15
    //?:para mandar parámetros en una solicitud GET, seguido del nombre como quiero que se llama el key
    //&:un nuevo parámetro

    

    //echo $_SERVER['REQUEST_METHOD'];//nos va a decir como tu me estás solicitando como cliente(get,post,put,etc...). Puedo filtrar las solicitudes.

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // echo "Recibido"; 

    // http://localhost/GitHub/PHP-Moderno/http/httpenPHP/get.php?name=Pedro
    echo json_encode($_GET);
    // echo $_GET["name"];
} else {
    http_response_code(404);//podemos mandar directamente el código. Ya que al no ser get se entiende como error
    echo json_encode(['error'=>'La solicitud no es de tipo GET']);
}


?>