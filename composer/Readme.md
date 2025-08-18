# Insatalacion COMPOSER
Descargamos composer desde la pagina composer

abrimos la terminal en el cual colocamos el siguiente comando seguido de la ruta de la carpeta donde se va a utilizar el composer

cd C:\xampp\htdocs\GitHub\PHP-Moderno\composer 
 damos enter

Luego colocamos el siguiente comando 

composer init 
    damos enter

completamos la informacion requerida

    Package name (<vendor>/<name>) [natt1/composer]: hdeleon/test --Nombre del paquete

    Description []: Pruebas para composer --Breve descripcion

    Author [Natalia T-94 <nattecheira@gmail.com>, n to skip]: skip --pregunta si quieres agregar el correo, no es obligatorio

    Minimum Stability []: dev --estabilidad minima

    Package Type (e.g. library, project, metapackage, composer-plugin) []: project --

    License []: -- dar enter

    Would you like to define your dependencies (require) interactively [yes]? no --Pregunta si agregar un  buscador aparte

    Would you like to define your dev dependencies (require-dev) interactively [yes]? no --

    Add PSR-4 autoload mapping? Maps namespace "Hdeleon\Test" to the entered relative path. [src/, n to skip]: src/ --pregunta si agregar un autoload

    
{
    "name": "hdeleon/test",
    "description": "Pruebas para composer",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Hdeleon\\Test\\": "src/"
        }
    },
    "authors": [
        {
            "name": "skip"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}

Do you confirm generation [yes]? yes --pregunta si esta todo bien para poder generarlo

----- Listo ya se generaron las carpetas correspondientes ----------



# Instalacion de bibliotecas utilizando composer
--ingresar a ala pagina https://packagist.org/

Elegir la libreria que desea utilizar y luego colocar el comando correspondiente en la consola
composer require nesbot/carbon

Luego en el codigo colocar el siguiente comando para poder utilizar la libreria
use Carbon\Carbon;