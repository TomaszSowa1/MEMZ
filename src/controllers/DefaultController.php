<?php

require_once 'AppController.php';

class DefaultController extends AppController{
    public function login(){
            //dispaly login
            $this->render('login');
    }

    public function index(){

        $this->render('mainpage');

    }

    public function mainpage(){

        $this->render('mainpage');

    }


    
}