<?php 
//El objetivo de Autoload es ser un núcleo donde esté cargando bibliotecas, clases, etc...

require_once __DIR__ . '/interfaces/ValidatorInterface.php';
require_once __DIR__ . '/interfaces/RepositoryInterface.php';

require_once __DIR__ . '/validators/Validator.php';
require_once __DIR__ . '/exceptions/ValidationException.php';
require_once __DIR__ . '/exceptions/DataException.php';
require_once __DIR__ . '/data/Repository.php';
require_once __DIR__ . '/business/Get.php';
require_once __DIR__ . '/business/Add.php';
require_once __DIR__ . '/business/Update.php';
require_once __DIR__ . '/business/Delete.php';






?>