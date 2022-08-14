<?php

namespace App;

class Route2222{

//    public static array $routes = [];

    static public function get($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        echo '1';
        print_r($move);
//        print_r($uri);
        if($method == 'GET' && $uri == $_SERVER['REQUEST_URI']){
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = "\App\controllers\\$controller";
            $objectController = new $controller;
            $objectController->$method();


        }
//        self::$routes[] = $uri;

    }
    static public function post($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST' && $uri == $_SERVER['REQUEST_URI']){
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = "\App\controllers\\$controller";
            $objectController = new $controller;
            $objectController->$method();


        }
//        self::$routes[] = $uri;
    }
}