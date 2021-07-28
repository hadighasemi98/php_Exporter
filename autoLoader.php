<?php

spl_autoload_register(function ($className){

    $classFile = __DIR__ . "/$className.php";
    // echo $classFile . PHP_EOL;
    include $classFile ;

    // if (file_exists($classFile) and is_readable($classFile)) {
    //     include $classFile ;
    // } else {
    //     echo "file NIISSSSSST " . PHP_EOL ;
    // }
});
