<?php


spl_autoload_register(function ($class) {
    $class = str_replace("\\", '/', $class);
//    print_r($class . '.php');
    include "".$class.'.php';
//    include_once __DIR__."/../".$class.'.php';
//    include_once "php_oop_mvc/App/Models/User2222.php";
//    die;


});