Vamos a crear un proyecto nuevo y vamos a crear aquí un proyecto que va a ir a la base de datos.

Ir por información y esa información va a crear un archivo de Excel que es algo muy común en los proyectos

--Click derecho sobre la carpeta project->Reveal in file explorer->proyect->copiamos la ruta de la carpeta C:\xampp\htdocs\GitHub\PHP-Moderno\project

En consola colocamos el siguiente comando 
cd C:\xampp\htdocs\GitHub\PHP-Moderno\project

Luego colocamos 
composer init

Package name (<vendor>/<name>) [natt1/project]: natalia/excel
Description []:
Author [Natalia T-94 <nattecheira@gmail.com>, n to skip]:
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Add PSR-4 autoload mapping? Maps namespace "Natalia\Excel" to the entered relative path. [src/, n to skip]: src/

{
    "name": "natalia/excel",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Natalia\\Excel\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Natalia T-94",
            "email": "nattecheira@gmail.com"
        }
    ],
    "require": {}
}

Do you confirm generation [yes]? yes