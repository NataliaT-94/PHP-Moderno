<?php 
//namespace: Le da un nombre a la clase para que esté agrupada junto con otras clases. Y esto para evitar colisiones. Regularmente los namespace deberían tener el mismo nombre de su carpeta y así evitarás muchísimos problemas

require "Utils\Operations.php";//llamamos el namespace utils del archivo operations.php

use Utils\Operations;

$op = new Operations();//creamos un object a partir de la class operations que se encuentra agurpado con el namespace utils
echo $op->add(2,3);






?>