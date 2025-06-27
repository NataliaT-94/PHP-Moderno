<?php 
//Gracias a las funciones puras podemos tener podemos hacer pruebas unitarias de una manera más fácil. Podemos también detectar donde se hace un cambio, ya que la función pura no alterándolo lo que está externo, donde se hace el cambio.
//Las funciones de recursivas sirven para cuando tenemos jerarquías. Cuando tenemos árboles, es decir, cuando tenemos nosotros que hacer el funcionamiento del mismo. Funcionamiento para el recorrido de un grafo, de un árbol de estructuras de datos. Las funciones recursivas son muy útiles porque con poco código podemos hacer algo que con programación imperativa, con unos for, unos while sería más tedioso.

//El caso base es donde la función ya va a terminar de ejecutarse, es decir, ya no va a ejecutarse nuevamente llamándose a sí misma.

function show($n){
    if($n < 1){//caso base
        return;
    }

    echo "Hola ".$n."<br>"; //proceso

    show($n - 1);//nos llamaos a nosotros mismo pero con un cambio de entrada

}

Show(10);




?>