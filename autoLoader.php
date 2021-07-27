<?php


spl_autoload_register(function ($className){

    $classFile = __DIR__ . "/$className.php";

    file_exists($classFile) and is_readable($classFile) ? include $classFile : "File not found" ;
});