<?php

require 'Routing.php';

$path =trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('mainpage','DefaultController');
Routing::get('index','DefaultController');
Routing::get('register','SecurityController');
Routing::post('login','SecurityController');
Routing::post('alltasks','tasksController');
Routing::post('addtask','tasksController');
Routing::post('edittask','tasksController');
Routing::post('updateUser','SecurityController');

Routing::run($path);

// docker-compose up --build