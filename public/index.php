<?php
    require __DIR__.'/../vendor/autoload.php';
$request = new App\Http\Request;
// var_dump(__DIR__.'/..vendor/autoload.php');
// __DIR__ construye rutas absolutas y no relativas
$request-> send();

