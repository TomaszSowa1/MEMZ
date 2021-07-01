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
    public function register(){

        $this->render('register');

    }
    public function addtask(){

        $this->render('addtask');

    }
    public function edittask(){

        $this->render('edittask');

    }
    public function alltasks(){

        $this->render('alltasks');

    }


    
}