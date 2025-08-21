<?php 
session_start();//solo se debe ejecutar una vez, sino tira error

if(isset($_SESSION["name"])){
    echo "Hola " . $_SESSION["name"];
}

$_SESSION["name"] = "Natalia";//guarda en la variable name el nombre natalia

?>