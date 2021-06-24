<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController{

    public function login(){
        $userRepository = new UserRepository();
        if(!$this->isPost()){
            return $this->render('login');
        }
        $this_emial = $_POST["email"];
        $this_password = $_POST["password"];
        $user = $userRepository->getUser($this_emial);
        if(!$user)     {
            return $this->render('login',['messages'=>['User with this email does not exist']]);
        }
        if($user->getEmail()!==$this_emial){
            return $this->render('login',['messages'=>['User with this email does not exist']]);
        }
        if($user->getPassword()!==$this_password){
            return $this->render('login',['messages'=>['Password is not correct']]);
        }

        
        // return $this->render('mainpage');
        
        $url="http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/mainpage");
    }
}