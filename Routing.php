<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/tasksController.php';

class Routing{
    public static $routes;

    public static function get($url,$contoller){
        self::$routes[$url]=$contoller;
    }

    public static function post($url,$contoller){
        self::$routes[$url]=$contoller;
    }

    public static function run($url){
        $action = explode("/",$url)[0];
        if(!array_key_exists($action,self::$routes)){
            // die("wrong url"); 
            $url="http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/not_found");
        }else{
            $controller = self::$routes[$action];
            $object = new $controller;
            $action = $action ?: 'login';
            $object->$action();
        }


    }

}