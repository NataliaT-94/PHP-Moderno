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

------------------------

# Definimos las carpetas, las cuales van a darnos ese lineamiento de los componentes que va a tener nuestro proyecto.

El objetivo final es crear un proyecto que lea base de datos, la tabla que tenemos de cervezas.

# Business
A la tabla la vamos a convertir en un archivo de Excel

# Data 
Vamos a necesitar ir a la base de datos

# Interfaces
Vamos a necesitar ciertas interfaces para depender de abstracciones

# Excel
Para un componente que vaya a crear un archivo de Excel. donde vamos hacer la implementacion a excel

# Config
También necesito cierto proceso de configuración, por ejemplo, las constantes que va a tener la información de la conexión de la base de datos o alguna otra configuración

# Files
Vamos a generar esos archivos de Excel. Donde vamos a guardar los archivos

------------------------
Generamos las interfaces, las de obtener informacion get(), create()

------------------------
Creacion del caso de uso: El cual define al proyecto, es un conjunto de eventos que al final este conjunto de eventos hacen. Una acción que te pidió un cliente. 

En este caso  un cliente me pidió ir a la base, ir a una información que está guardada en algún lado y crear un Excel

Uno de los objetivos de la arquitectura de software es tener las reglas de negocio encapsuladas para que puedan funcionar en muchas distintos detalles

En la carpeta business, creamos un archivo generationExcel