<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController{

    public function login(){
        if(!$this->isPost()){
            return $this->render('login');
        }
        $userRepository = new UserRepository();
        $this_emial = $_POST["email"];
        $this_password = sha1(md5($_POST["password"]));
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

        session_start();
        $_SESSION['login']=$user->getEmail();
        $_SESSION['role']='admin';//$user->getRole();
        $_SESSION['loggedIn']=true;
        $_SESSION['user_id']='1';//$user->getUserId();
        $_SESSION['password']=$this_password;
        $url="http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/mainpage");
    }

    public function register()
    {
        if ($this->isPost()) {
            $userRepository = new UserRepository();
            $this_email = $_POST['email'];
            $this_password = $_POST['password'];
            $this_confirmedPassword = $_POST['confirmedPassword'];
            $this_name = $_POST['name'];
            $this_surname = $_POST['surname'];
            $this_phone = $_POST['phone'];
            

            if ($this_password !== $this_confirmedPassword) {
                return $this->render('register', ['messages' => ['Please provide proper password']]);
            }

            $user = new User($this_email, sha1(md5($this_password)), $this_name, $this_surname,$this_phone,true,'',date("Y/m/d"));
            $userRepository->addUser($user);

            return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
        }else{
            return $this->render('register');
        }
    }

    function logout()
	{
		session_start();
        setcookie(session_name(), "", time() - 3600); 
        session_destroy(); 
        session_write_close();
		return $this->render('login');
	}

    public function updateUser()
    {
        session_start();
        $userRepository = new UserRepository();
        if($this->isGet()){
            $that_email=$_SESSION['login'];
            $this_user = $userRepository->getUser($that_email);
            return $this->render('updateUser', ['model' => $this_user]);
        }
        elseif ($this->isPost()) {
            $this_email = $_POST['email'];
            $this_password = sha1(md5($_POST['password']));
            $this_confirmedPassword = sha1(md5($_POST['confirmedPassword']));
            if($_POST['password']==null){
                $this_password=$_POST['password_b'];
                $this_confirmedPassword=$_POST['password_b'];
            }
            $this_name = $_POST['name'];
            $this_surname = $_POST['surname'];
            $this_phone = $_POST['phone'];
            

            if ($this_password !== $this_confirmedPassword) {
                return $this->render('updateUser', ['messages' => ['Please provide proper password']]);
            }

            $user = new User($this_email, $this_password, $this_name, $this_surname,$this_phone,true,'',date("Y/m/d"),$_SESSION['role']);
            $userRepository->updateUser($user);

            $url="http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/alltasks");
        }else{
            return $this->render('updateUser');
        }
    }

    public function not_found(){
        return $this->render('not_found');
    }

}