<?php

require_once 'src/controllers/DefaultController.php';

class Routing{
    public static $routes;

    public static function get($url,$contoller){
        self::$routes[$url]=$contoller;
    }

    public static function run($url){
        $action = explode("/",$url)[0];
        if(!array_key_exists($action,self::$routes)){
           die("wrong url"); 
        }

        //todo contorller method
        $contoller = self::$routes[$action];
        $object = new $contoller;

        $object->$action();


    }

}