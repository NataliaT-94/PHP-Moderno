<?php 
require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

// echo "Hola desde composer";

$now = Carbon::now();
echo "La fecha y hora actual es: " . $now->toDateTimeString();

?>