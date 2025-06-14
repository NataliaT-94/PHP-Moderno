<?php
    //Estructura
        //instruccion booleana: Algo que se tiene que cumplir para entrar aqui
        // if(instruccion booleana){}
    if(true){
        echo  "entra";
    }

    $age = 30;

    if($age == 18){
        echo "Eres mayor de edad";
    }    

    if($age > 18){
        echo "Eres adulto mayor";
    }    

    //Else: significa que si no entra en una intruccion entra en la siguiente

    if($age == 18){
        echo "Eres mayor de edad";
    } else {
        echo "No entro a la primera comparativa";
    }

    //else if
    if($age == 18){
        echo "Eres mayor de edad";
    } else if($age > 18){
        echo "Eres mayor a 18";
    } else {
        echo "Eres menor de edad";
    }

    //el if se puede usar con una comparativa o compuesto
        // &&: es un "y", se tienen que complir todas las condiciones
        // ||: es un "o", se tienen que complir al menos una de las condiciones

    if($age > 18 && $age < 60 ){
        echo "Eres mayor de edad";
    } else if( $age >= 60){
        echo "Eres una persona de tercera edad";
    } else {
        echo "Eres menor de edad";
    }
?>