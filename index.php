<?php

require 'Routing.php';

session_start(); 
$path =trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);
if (session_id() == '' || !isset($_SESSION['login'])) { 
    Routing::post('login','SecurityController');
    Routing::get('register','SecurityController');
    Routing::get('not_found','SecurityController');
    Routing::run($path);
} else {
    Routing::get('','DefaultController');
    Routing::get('mainpage','DefaultController');
    Routing::get('index','DefaultController');
    Routing::get('register','SecurityController');
    Routing::get('not_found','SecurityController');
    Routing::post('login','SecurityController');
    Routing::post('logout','SecurityController');
    Routing::post('alltasks','tasksController');
    Routing::post('addtask','tasksController');
    Routing::post('edittask','tasksController');
    Routing::post('updateUser','SecurityController');

    Routing::run($path);
}

// docker-compose up --build