<?php

spl_autoload_register(function($className){
    $classFile = 'app'. DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $className) . '.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});